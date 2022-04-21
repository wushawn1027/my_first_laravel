<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Comment;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }

    public function comment(){

        // DB直接操作
        // $data1 = DB::table('comments')->orderby('id','desc')->get(); //orderby將最新的排序到最前面後,取出所有資料

        $data1 = Comment::orderby('id','desc')->get(); // 使用model抓資料

        return view('comment.comment',compact('data1'));
    }

    public function save_comment(Request $request){

        // DB直接操作
        // DB::table('comments')->insert([
        //     'title' => $request->title,
        //     'name' => $request->name,
        //     'content' => $request->content,
        // ]);

        Comment::create([
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect('/comment');  //重新導向, 與view不同
    }

    public function edit_comment($id){

        // DB直接操作
        // $edit = DB::table('comments')->where('id',$id)->first(); //從符合條件的筆數中,抓第一筆
        // 或
        // $edit = DB::table('comments')->find($id);

        $edit = Comment::find($id);

        return view('comment.edit',compact('edit'));
    }

    public function update_comment($id, Request $request){

        // DB直接操作
        // DB::table('comments')->where('id', $id)->update([
        //     'title' => $request->title,
        //     'name' => $request->name,
        //     'content' => $request->content,
        // ]);

        Comment::where('id', $id)->update([
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect('/comment');
    }

    public function delete_comment($id){

        // DB直接操作
        // DB::table('comments')->where('id',$id)->delete();

        Comment::where('id',$id)->delete();

        return redirect('/comment');
    }
}
