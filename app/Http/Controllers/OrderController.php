<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){

        $datas = Order::orderby('id','desc')->get();

        $header = 'Order管理-首頁';
        $slot = '';

        return view('order.index',compact('datas' , 'header' , 'slot'));
    }

    public function edit($id){

        $edit = Order::find($id);

        $header = 'Order管理-編輯';
        $slot = '';

        return view('order.edit',compact('edit' , 'header' , 'slot'));
    }

    public function update($id, Request $request){

        $update = Order::find($id);

        $update->status = $request->status;
        $update->ps = $request->ps;
        $update->save();

        return redirect('/order');
    }
}
