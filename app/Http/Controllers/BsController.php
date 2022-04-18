<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

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

    public function index(){
        $data2 = DB::table('news')->orderby('id','desc')->take(3)->get();
        // return view('shopping.index',['news'=> $data2]);
        
        return view('shopping.index',compact('data2'));
    }
    public function shoppingS1(){
        return view('shopping.shopping-s1');
    }
    public function shoppingS2(){
        return view('shopping.shopping-s2');
    }
    public function shoppingS3(){
        return view('shopping.shopping-s3');
    }
    public function shoppingS4(){
        return view('shopping.shopping-s4');
    }
}
