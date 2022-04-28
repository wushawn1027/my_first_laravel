<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){

        // 將所有banner資料從資料庫拿出來,並輸出到列表頁上
        $banners = Banner::get();

        $header = 'Banner管理-首頁';
        $slot = '';

        return view('banner.index' , compact('banners' , 'header' , 'slot'));
    }

    public function create(){

        $header = 'Banner管理-新增';
        $slot = '';

        return view('banner.create' , compact('header' , 'slot'));
    }

    public function store(Request $request){

        // 將使用者填寫的資料,經過處理(ex:檔案上傳/防呆), 新增至資料庫
        $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        $path = str_replace("public","storage",$path); //將路徑中的public換成storage
        Banner::create([
            'img_path' => '/'.$path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->weight,
        ]);

        return redirect('/banner');
    }

    public function edit($id){

        $edit = Banner::find($id);

        $header = 'Banner管理-編輯';
        $slot = '';

        return view('banner.edit',compact('edit' , 'header' , 'slot'));
    }

    public function update($id, Request $request){

        // 根據id找到想修改的資料
        $banners = Banner::find($id);

        // 編輯時若不選新檔案,會傳回原本的檔案
        if ($request->hasfile('banner_img')){

        // 使用者上傳的資料,先經過處理(ex:檔案上傳/防呆)後
        $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        $path = str_replace("public","storage",$path);

        // 將舊資料檔案刪除
        $target = str_replace("storage","public",$banners->img_path); //將路徑中的storage恢復成public
        Storage::disk('local')->delete($target); // 刪除舊照片

        // 將新資料檔案更新到資料庫裡
        $banners->img_path = '/'.$path;
        }

        $banners->img_opacity = $request->img_opacity;
        $banners->weight = $request->weight;
        $banners->save();

        // Banner::where('id', $id)->update([
        //     'img_path' => '/'.$path,
        //     'img_opacity' => $request->img_opacity,
        //     'weight' => $request->weight,
        // ]);

        return redirect('/banner');
    }

    public function destory($id){

        // 使用id 找到要刪除的資料, 並且連同相關檔案一起刪除
        $banners = Banner::find($id);
        $target = str_replace("storage","public",$banners->img_path);
        Storage::disk('local')->delete($target);
        $banners->delete();

        return redirect('/banner');
    }
}
