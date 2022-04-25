<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $datas = Product::orderby('id','desc')->get();

        return view('product.index',compact('datas'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){

        $path = Storage::disk('local')->put('public/product', $request->product_img);
        $path = str_replace("public","storage",$path);

        Product::create([
            'img_path' => '/'.$path,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'introduction' => $request->introduction,
        ]);

        return redirect('/product');
    }

    public function edit($id){

        $edit = Product::find($id);

        return view('product.edit',compact('edit'));
    }

    public function update($id, Request $request){

        $products = Product::find($id);

        if ($request->hasfile('product_img')){

            $path = Storage::disk('local')->put('public/product', $request->product_img);
            $path = str_replace("public","storage",$path);

            $target = str_replace("storage","public",$products->img_path);
            Storage::disk('local')->delete($target);

            $products->img_path = '/'.$path;
        }

            $products->name = $request->name;
            $products->price = $request->price;
            $products->quantity = $request->quantity;
            $products->introduction = $request->introduction;
            $products->save();

        return redirect('/product');
    }

    public function destory($id){

        $products = Product::find($id);
        $target = str_replace("storage","public",$products->img_path);
        Storage::disk('local')->delete($target);
        $products->delete();

        return redirect('/product');
    }
}
