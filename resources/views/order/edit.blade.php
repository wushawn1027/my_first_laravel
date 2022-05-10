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
    .order-lists {
        height: 100%;
    }
    .order-list {
        height: 150px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    .order-list:not(:last-child) {
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    .shoppimg-img img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }
    .p-num {
        font-size: 10px;
        color: grey;
    }
    .sendDatd {
        border-bottom: 1px solid rgb(219, 216, 216);
        height: 100%;
    }
    .sendDatd table {
        width: 400px;
        height: 250px;
    }
    #order-table {
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    #order-table table {
        width: 200px;
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
    #orderPs {
        resize: none;
        width: 100%;
        height: 100px;
    }
    @media(max-width:992px) {
        #orderEdit {
            width: 650px;
        }

    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="orderEdit" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <h1 class="w-100 mb-3 text-primary fw-bolder fs-1">訂單編輯</h1>
            <div class="mb-4">
                <div class="order-lists d-flex flex-column mt-3">
                    <h3 class="fs-3">訂單明細</h3>

                    @foreach ($edit->detail as $item)
                    <div class="order-list">
                    <div class="d-flex align-items-center">
                    <div class="shoppimg-img me-3">
                        <img src="{{$item->product->img_path}}" class="" alt="">
                    </div>
                    <div clsss="d-flex flex-column">
                        <p class="m-0 fs-5 fw-bolder">{{$item->product->name}}</p>
                        <p class="m-0 p-num">#{{$item->product->id}}</p>
                    </div>
                    </div>
                    <div class="d-flex align-items-center">
                    <div clsss="">
                        <span class="me-1">數量：</span>
                        <span class="ms-1">{{ $item->qty }}</span>
                    </div>
                    <span class="productPrice ms-4 d-flex justify-content-end">${{$item->qty * $item->price}}</span>
                    </div>
                    </div>
                    @endforeach

                </div>
                <div class="sendDatd d-flex flex-column pt-3 pb-3 mt-2">
                    <h3 class="w-100 fs-3">寄送資料</h3>
                    <table>
                        <tr>
                            <td class="fs-5">姓名</td>
                            <td class="fs-5">{{$edit->name}}</td>
                        </tr>
                        <tr>
                            <td class="fs-5">電話</td>
                            <td class="fs-5">{{$edit->phone}}</td>
                        </tr>
                        <tr>
                            <td class="fs-5">Email</td>
                            <td class="fs-5">{{$edit->email}}</td>
                        </tr>
                        <tr>
                        @if ($edit->shipping_way == 1)
                            <td class="fs-5">地址</td>
                            <td class="fs-5">{{$edit->address}}</td>
                        @else
                            <td class="fs-5">超商地址</td>
                            <td class="fs-5">{{$edit->store_address}}</td>
                        @endif
                        </tr>
                    </table>
                </div>
                <div id="order-table" class="d-flex justify-content-end pt-3 pb-3">
                    <table>
                        <tr>
                            <td class="text-secondary">數量:</td>
                            <td class="float-end fw-bolder fs-5">{{$edit->product_qty}}</td>
                        </tr>
                        <tr>
                            <td class="text-secondary">小計:</td>
                            <td class="float-end fw-bolder fs-5">${{$edit->subtotal}}</td>
                        </tr>
                        <tr>
                            <td class="text-secondary">運費:</td>
                            <td class="float-end fw-bolder fs-5">${{$edit->shipping_fee}}</td>
                        </tr>
                        <tr>
                            <td class="text-secondary">總計:</td>
                            <td class="float-end fw-bolder fs-5">${{$edit->total}}</td>
                        </tr>
                    </table>
                </div>
                <form class="d-flex flex-column" action="/order/update/{{$edit->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="orderStatus" class="fs-5 mt-4 mb-2">訂單狀態</label>
                    <select name="status" id="orderStatus">
                        <option value="1" @if ($edit->status == 1 ) selected @endif>未付款</option>
                        <option value="2" @if ($edit->status == 2 ) selected @endif>已付款</option>
                        <option value="3" @if ($edit->status == 3 ) selected @endif>已出貨</option>
                        <option value="4" @if ($edit->status == 4 ) selected @endif>已結單</option>
                        <option value="5" @if ($edit->status == 5 ) selected @endif>已取消</option>
                    </select>

                    <label for="orderPS" class="fs-5 mb-2 mt-3">訂單備註</label>
                    {{-- <input type="text" name="ps" id="orderPs" class="mb-2" value="{{$edit->ps}}"> --}}
                    <textarea type="text" name="ps" id="orderPs" class="mb-2">{{$edit->ps}}
                    </textarea>
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
