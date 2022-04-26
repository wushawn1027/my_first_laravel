<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class ShoppingCartController extends Controller
{

    // public function index(){
    //     $data2 = DB::table('news')->orderby('id','desc')->take(3)->get();
    //     // return view('shopping.index',['news'=> $data2]);
    //     return view('index',compact('data2'));
    // }

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
