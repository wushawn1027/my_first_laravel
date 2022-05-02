<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

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

}
