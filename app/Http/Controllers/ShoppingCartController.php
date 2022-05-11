<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderComplete;
use Illuminate\Support\Facades\Mail;


class ShoppingCartController extends Controller
{

    public function shoppingS1(){

        // 登入的使用者ID, 為了搜尋屬於他的購物清單
        $user = Auth::id();
        $datas = ShoppingCart::where('user_id',$user)->get();
        //每次從資料庫抓資料出來都應當先dd一下確認是否有抓對

        $subtotal = 0;
        foreach ($datas as $value) {
            $subtotal += $value->qty * $value->product->price;
        }

        // for ($i=0; $i < count($data); $i++) {
        //     $item = $datas[$i];
        //     dump($item->product->name);
        //     dump($item->product->img_path);
        //     dump($item->product->introduction);
        //     dump($item->product->price);
        // }

        // foreach ($datas as $i => $item) {
        //     dump($item->product->name);
        //     dump($item->product->img_path);
        //     dump($item->product->introduction);
        //     dump($item->product->price);
        // };


        return view('shopping.shopping-s1' , compact('datas','subtotal'));
    }

    public function delete_cart($id){

        ShoppingCart::find($id)->delete();

        return redirect('/shopping-s1');
    }

    // public function clear_cart($id){

    //     ShoppingCart::where('user_id',$user)->delete();

    //     return redirect('/shopping-s1');
    // }

    public function shoppingS2(Request $request){

        // session的使用方法 使用 鍵與值的方法 將想帶到下一頁的資料寫進去
        // session([
            // key value 鍵與值
        //     'amount' => $request->qty,
        // ]);

        // 不使用session 直接將新數量寫入購物車(待買清單)的資料表
        $datas = ShoppingCart::where('user_id', Auth::id())->get();

        //事先將新的數量更新至資料表中
        foreach ($datas as $key => $item) {
            $item->qty = $request->qty[$key];
            $item->save();
        }

        $subtotal = 0;
        foreach ($datas as $value) {
            $subtotal += $value->qty * $value->product->price;
        }


        return view('shopping.shopping-s2', compact('datas','subtotal'));
    }


    public function shoppingS2_goback(Request $request){

        $datas = ShoppingCart::where('user_id', Auth::id())->get();

        $subtotal = 0;
        foreach ($datas as $value) {
            $subtotal += $value->qty * $value->product->price;
        }


        return view('shopping.shopping-s2', compact('datas','subtotal'));
    }


    public function shoppingS3(Request $request){

        session([
            'pay' => $request->payway,
            'deliver' => $request->deliver,
        ]);


        $datas = ShoppingCart::where('user_id', Auth::id())->get();
        $subtotal = 0;
        foreach ($datas as $value) {
            $subtotal += $value->qty * $value->product->price;
        }

        if (session()->get('deliver') =='1'){
            $fee = 150;
        }else{
            $fee = 60;
        }
        $total = $subtotal + $fee;

        $deliver = $request->deliver;

        return view('shopping.shopping-s3', compact('datas','subtotal','deliver','total'));
    }


    public function shoppingS4(Request $request){

        // 為了計算單價 將購物車根據使用者Id抓出來
        $merch = ShoppingCart::where('user_id', Auth::id())->get();

        $subtotal = 0;

        // 利用foreach迴圈 將價格與數量乘一起
        // foreach ($merch as $key => $goods) {
        //     $subtotal += $goods->product->price * session()->get('amount')[$key];
        // }

        // 如果購物車有在第一步就將數量更新到最新
        foreach ($merch as $value) {
            $subtotal += $value->qty * $value->product->price;
        }


        // 根據取貨方式決定運費金額  1 = 黑貓宅急便 所以是150元, 2 = 超商店到店 所以是60元
        if (session()->get('deliver') =='1'){
            $fee = 150;
        }else{
            $fee = 60;
        }

        // 如果要做 滿額免運 (ex:10000)
        // if ($subtotal >= 10000) {
        //     $fee = 0;
        // }


        $order = Order::create([
            'product_qty' => count($merch),
            'subtotal' => $subtotal,
            'shipping_fee' => $fee,
            'total' => $subtotal + $fee,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'payway' => session()->get('pay'),
            'shipping_way' => session()->get('deliver'),
            'status' => 1,
            'user_id' => Auth::id(),
        ]);

        if ($order->shipping_way == 1){
            // 如果運送方式(shipping_way)是1 代表是黑貓宅急便 地址要填入address
            $order->address = $request->code.$request->city.$request->address;
        }else{
            // 如果運送方式(shipping_way)是2 代表是店到店 地址要填入store_address
            $order->store_address = $request->code.$request->city.$request->address;
        }
        $order->save();

        foreach ($merch as $key => $value) {
            OrderDetail::create([
                'product_id' => $value->product->id,
                'qty' => $value->qty,
                'price' => $value->product->price,
                'order_id' => $order->id,
            ]);
        }
        // 訂單建立成功, 將購物車資料清除
        ShoppingCart::where('user_id', Auth::id())->delete();


        // 訂單建立成功後, 寄信給購買者
        $data = [
            'order_id' => $order->id,
            'user_name' => Auth::user()->name,
            'subject' => '下單成功通知',
        ];
        Mail::to(Auth::user()->email)->send(new OrderComplete);

        return redirect('/show_order/'.$order->id);
    }


    public function show_order($id){

        $order = Order::find($id);
        return view('shopping.shopping-s4', compact('order'));
    }
}




//利用foreach迴圈 將價格與數量乘在一起
        //(因為第一步驟的數量本身商品順序就是跟購物車一樣 所以直接用相同索引值的資料互乘再加總)
        //$merch[0]->product->product_price * $amount[0]
        //$merch[1]->product->product_price * $amount[1]
        //$merch[2]->product->product_price * $amount[2]
        //$merch[3]->product->product_price * $amount[3]
        // for ($key=0; $key < count($merch); $key++) {
        //     $goods =  $merch[$key];
        //     $subtotal += $goods->product->product_price * session()->get('amount')[$key];
        // }
        // foreach ($merch as $key => $goods) {
        //     $subtotal += $goods->product->product_price * session()->get('amount')[$key];
        // }
