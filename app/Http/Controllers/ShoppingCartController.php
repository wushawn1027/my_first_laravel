<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


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
    public function shoppingS2(Request $request){

        // session的使用方法 使用 鍵與值的方法 將想帶到下一頁的資料寫進去
        session([
            // key value 鍵與值
            'amount' => $request->qty,
            'subtotal' => $request->subtotal,
            'total' => $request->subtotal . 100,
        ]);

        return view('shopping.shopping-s2');
    }
    public function shoppingS3(Request $request){

        // session([
        //     'pay' => $request->payway,
        //     'deliver' => $request->deliver,
        // ]);

        return view('shopping.shopping-s3');
    }
    public function shoppingS4(Request $request){


        // $value = Session::pull('amount', 'subtotal', 'total', 'pay', 'deliver');

        $order = Order::create([
            'product_qty' => $value->amount,
            'payway' => $value->pay,
            'shipping_way' => $value->deliver,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            // 'address' => $request->zone.city.address,
            // 'subtotal' => $value->subtotal,
            // 'shipping_fee' => 100,
            // 'total' => $value->total,
            // 'product_qty' => $value->amount,
            // 'payway' => $value->pay,
            // 'shipping_way' => $value->deliver,
        ]);



        // dump(session()->all());
        // dd($request->all());
        return view('shopping.shopping-s4');
    }
}
