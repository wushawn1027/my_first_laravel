<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index(){
        return view('goods.index');
    }

    public function goods(){

        $data = Goods::orderby('id','desc')->get();

        return view('goods.index',compact('data'));
    }

    public function store(Request $request){

        Goods::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'introduction' => $request->introduction,
        ]);

        return redirect('/goods');
    }

    public function edit(){
        return view('goods.');
    }

    public function update(){
        return view('goods.');
    }

    public function delete(){
        return view('goods.');
    }
}
