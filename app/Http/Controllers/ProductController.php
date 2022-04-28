<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Product_img;

class ProductController extends Controller
{
    public function index(){

        $datas = Product::orderby('id','desc')->get();

        $header = 'Product管理-首頁';
        $slot = '';

        return view('product.index',compact('datas' , 'header' , 'slot'));
    }

    public function create(){

        $header = 'Product管理-新增';
        $slot = '';

        return view('product.create',compact('header' , 'slot'));
    }

    public function store(Request $request){

        $path = Storage::disk('local')->put('public/product', $request->product_img);
        $path = str_replace("public","storage",$path);

        $product = Product::create([
            'img_path' => '/'.$path,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'introduction' => $request->introduction,
        ]);

        // 次要圖片,多圖片上傳
        if ($request->hasfile('second_img')){
            foreach ($request->second_img as $index => $element) {

                $path = Storage::disk('local')->put('public/product', $element);
                $path = str_replace("public","storage",$path);

                Product_img::create([
                    'img_path' => '/'.$path,
                    'product_id'=> $product->id,
                ]);
            }
        }

        return redirect('/product');
    }

    public function edit($id){

        $edit = Product::find($id);

        $header = 'Product管理-編輯';
        $slot = '';

        return view('product.edit',compact('edit' , 'header' , 'slot'));
    }

    public function update($id, Request $request){

        $products = Product::find($id);

        // 主要圖片處理
        if ($request->hasfile('product_img')){

            $path = Storage::disk('local')->put('public/product', $request->product_img);
            $path = str_replace("public","storage",$path);

            $target = str_replace("storage","public",$products->img_path);
            Storage::disk('local')->delete($target);

            $products->img_path = '/'.$path;
        }

        // 次要圖片處理
        if ($request->hasfile('second_img')){
            foreach ($request->second_img as $index => $element) {

                $path = Storage::disk('local')->put('public/product', $element);
                $path = str_replace("public","storage",$path);

                Product_img::create([
                    'img_path' => '/'.$path,
                    'product_id'=> $products->id,
                ]);
            }
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

        // 找出所有 要被刪除的 商品次要圖片
        $imgs = Product_img::where('product_id',$id)->get();
        // 次要圖片可能會有多筆,利用foreach迴圈去刪除資料
        foreach ($imgs as $key => $value) {
            $target = str_replace("storage","public",$value->img_path);
            Storage::disk('local')->delete($target);
            $value->delete();
        }

        $target = str_replace("storage","public",$products->img_path);
        Storage::disk('local')->delete($target);
        $products->delete();

        return redirect('/product');
    }

    public function delete_img($img_id) {

        $img = Product_img::find($img_id);
        $target = str_replace("storage","public",$img->img_path);
        Storage::disk('local')->delete($target);
        // 資料刪除前,
        $product_id = $img->product_id;
        $img->delete();

        return redirect('/product/edit/'.$product_id);
    }
}
