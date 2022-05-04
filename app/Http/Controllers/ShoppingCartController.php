<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ShoppingCart;


class ShoppingCartController extends Controller
{

    public function shoppingS1(){

        $datas = ShoppingCart::orderby('id','desc')->get();;

        return view('shopping.shopping-s1' , compact('datas'));
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
