@extends('layouts.app')

@section('title')
    訂單編輯
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
    #orderEdit {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #btnClear , #btnSend {
        width: 150px;
        border: 1px solid black;
    }
    @media(max-width:992px) {
        #orderEdit {
            width: 500px;
        }

    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="orderEdit" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <h1 class="w-100 mb-3 text-primary fw-bolder">訂單編輯</h1>
            <div class="mb-4">

                <form class="d-flex flex-column" action="/order/update/{{$edit->id}}" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- <label for="productName" class="fs-5 mb-2">訂單名稱</label>
                    <input type="text" readonly name="name" id="productName" class="mb-2" value="{{$edit->product_qty}}"> --}}

                    {{-- <label for="productPrice" class="fs-5 mb-2">買家姓名</label>
                    <input type="text" name="price" id="productPrice" class="mb-2" value="{{$data->name}}"> --}}

                    <label for="orderStatus" class="fs-5 mb-2">訂單狀態</label>
                    <select name="status" id="orderStatus">
                        <option value="1" @if ($edit->status == 1 ) selected @endif>未付款</option>
                        <option value="2" @if ($edit->status == 2 ) selected @endif>已付款</option>
                        <option value="3" @if ($edit->status == 3 ) selected @endif>已出貨</option>
                        <option value="4" @if ($edit->status == 4 ) selected @endif>已結單</option>
                        <option value="5" @if ($edit->status == 5 ) selected @endif>已取消</option>
                    </select>

                    <label for="orderIntro" class="fs-5 mb-2">訂單備註</label>
                    <input type="text" name="ps" id="orderPs" class="mb-2" value="{{$edit->ps}}">

                    <div class="d-flex justify-content-center mt-5">
                        <button onclick="location.href='/order'" type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消編輯</button>
                        <button type="submit" id="btnSend" class="text-black btn btn-primary btn-lg fs-6 ms-1">編輯完成</button>
                    </div>
                </form>

        </section>
    </main>
@endsection

@section('script')


@endsection
