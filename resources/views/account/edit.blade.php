@extends('layouts.app')

@section('title')
    會員編輯
@endsection

@section('link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%
    }
    #accountEdit {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #btnClear , #btnSend {
        width: 150px;
        border: 1px solid black;
    }
    @media(max-width:992px) {
        #accountEdit {
            width: 500px;
        }

    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="accountEdit" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <h1 class="w-100 mb-3 text-primary fw-bolder">會員編輯</h1>
            <div class="mb-4">

                <form class="d-flex flex-column" action="/account/update/{{$edit->id}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="accountEmail" class="fs-5 mb-2">使用者帳號</label>
                    <input type="email" readonly id="accountEmail" class="mb-2" value="{{$edit->email}}">

                    <label for="accountName" class="fs-5 mb-2">使用者名稱</label>
                    <input type="text" name="name" id="accountName" class="mb-2" value="{{$edit->name}}">

                    <label for="accountPassword" class="fs-5 mb-2">使用者密碼</label>
                    <input type="password" name="password" id="accountPassword" class="mb-2" value="{{$edit->password}}">

                    <label for="accountPower" class="fs-5 mb-2">使用者權限</label>
                    <select name="power" id="accountPower" class="mb-2">
                        <option value="1" @if ($edit->power == 1 ) selected @endif>管理者</option>
                        <option value="2" @if ($edit->power == 2 ) selected @endif>一般用戶</option>
                    </select>

                    <div class="d-flex justify-content-center mt-5">
                        <button onclick="location.href='/account'" type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消編輯</button>
                        <button type="submit" id="btnSend" class="text-black btn btn-primary btn-lg fs-6 ms-1">編輯完成</button>
                    </div>
                </form>
        </section>
    </main>
@endsection

