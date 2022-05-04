<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;


class BsController extends Controller
{

    // public function index(){

    //     $data1 = DB::table('news')->take(3)->get(); //抓最舊的3筆
    //     $data2 = DB::table('news')->orderby('id','desc')->take(3)->get(); //抓最新的3筆
    //     $data3 = DB::table('news')->inRandomOrder()->take(3)->get(); //隨機抓3筆
    //     dd($data1,$data2,$data3);
    //     // dd($data2);
    //     // return view('news', $data2);
    //     return view('shopping.index');
    // }

    // public function index(){
    //     $data2 = DB::table('news')->orderby('id','desc')->take(3)->get();
    //     // return view('shopping.index',['news'=> $data2]);

    //     return view('index',compact('data2'));
    // }

    public function index(){

        $intros = DB::table('news')->orderby('id','desc')->take(3)->get();

        $merchs = Product::inRandomOrder()->take(1)->get();

        $cards = Product::orderby('id','desc')->take(8)->get();

        return view('index' , compact('intros' , 'merchs' , 'cards'));
    }

    public function detail($id){

        $details = Product::find($id);

        return view('detail' , compact('details'));
    }

    public function add_cart(Request $request){

        $product = Product::find($request->product_id);

        //檢查購買數量是否正常
        if ($request->add_qty > $product->quantity){
            $result = [
                'result' => 'error',
                'message' => '欲購買數量超過庫存，請聯絡客服!',
            ];
            return $result;
        }elseif ($request->add_qty < 1){
            $result = [
                'result' => 'error',
                'message' => '購買數量異常，請重新確認!',
            ];
            return $result;
        }

        // 檢查是否登入，!Auth::check()因為有加上!，反轉判斷結果，所以現在沒有登入= true。
        if (!Auth::check()) {
            $result = [
                'result' => 'error',
                'message' => '尚未登入，請先登入!',
            ];
            return $result;
        }

        ShoppingCart::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::user()->id,
            'qty' => $request->add_qty,
        ]);
        $result = [
            'result' => 'success',
        ];
        return $result;
    }


}
