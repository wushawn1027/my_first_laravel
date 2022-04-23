<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $data = Product::orderby('id','desc')->get();

        return view('product.index',compact('data'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){

        Product::create([
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

        Product::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'introduction' => $request->introduction,
        ]);

        return redirect('/product');
    }

    public function destory($id){

        Product::where('id', $id)->delete();

        return redirect('/product');
    }
}
