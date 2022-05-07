<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function index(){

        $datas = User::orderby('id','desc')->get();

        $header = 'Account管理-首頁';
        $slot = '';

        return view('account.index',compact('datas' , 'header' , 'slot'));
    }

    public function create(){

        $header = 'Account管理-新增';
        $slot = '';

        return view('account.create',compact('header' , 'slot'));
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */

    public function store(Request $request){

        // laravel內建的帳號註冊的防呆, 檢查輸入是否錯誤
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);


        // 改寫成直接呼叫一個驗證器去幫我們驗證
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()){
            return redirect('account/create')->with('problem','輸入資訊錯誤, 請重新檢查!');
        };

        $uesr = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'power' => 1,
        ]);

        return redirect('/account')->with('success','新增成功');
    }

    public function edit($id){

        $edit = User::find($id);

        $header = 'Account管理-編輯';
        $slot = '';

        return view('account.edit',compact('edit' , 'header' , 'slot'));
    }

    public function update($id, Request $request){

        $user = User::find($id);

        $user->name = $request->name;
        $user->power = $request->power;

        // needRehash 檢查是否已經做過Hash運算了, 如果沒有才會執行裡面的程式
        if (Hash::needsRehash($request->password)) {
            $user->password = Hash::make($request->password);
        };

        $user->save();

        return redirect('/account');
    }

    public function destory($id){

        $Users = User::find($id)->delete();

        return redirect('/account');
    }

}
