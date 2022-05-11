@extends('template.template')

@section('title')
    Order-detail
@endsection

@section('css')
    <style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%;
    }
    #order-detail {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    .order-lists {
        border-bottom: 1px solid rgb(219, 216, 216);
        height: 100%;
    }
    .order-list {
        height: 150px;
        display: flex;
        justify-content: space-between;
        align-items: center;
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
    .orderStatus {
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    .btn-lg {
        width: 150px;
    }
    #btnGoBack {
        border: 1px solid blue;
    }
    @media(max-width:992px) {
        #order-detail {
            width: 650px;
        }
        #order-detail .buy-progress .steps .buy-progress-bar {
            width: 95px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="order-detail" class="container-xxl rounded-3 p-5">
            <h1 class="text-primary fw-bolder">訂單明細</h1>
            <div class="order-lists d-flex flex-column mt-5">
                <h3>購買商品</h3>

                @foreach ($details->detail as $item)
                <div class="order-list">
                <div class="d-flex align-items-center">
                <div class="shoppimg-img me-3">
                    <img src="{{$item->product->img_path}}" class="" alt="">
                </div>
                <div clsss="d-flex flex-column">
                    <p class="m-0 fs-5 fw-bolder">{{$item->product->name}}</p>
                    <p class="m-0 p-num">{{$item->product->introduction}}</p>
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
            <div class="sendDatd d-flex flex-column mt-3 pt-3 pb-3">
                <h3 class="w-100">寄送資料</h3>
                <table>
                    <tr>
                        <td class="fs-5">姓名</td>
                        <td class="fs-5">{{$details->name}}</td>
                    </tr>
                    <tr>
                        <td class="fs-5">電話</td>
                        <td class="fs-5">{{$details->phone}}</td>
                    </tr>
                    <tr>
                        <td class="fs-5">Email</td>
                        <td class="fs-5">{{$details->email}}</td>
                    </tr>
                    <tr>
                    @if ($details->shipping_way == 1)
                        <td class="fs-5">地址</td>
                        <td class="fs-5">{{$details->address}}</td>
                    @else
                        <td class="fs-5">超商地址</td>
                        <td class="fs-5">{{$details->store_address}}</td>
                    @endif
                    </tr>
                </table>
            </div>
            <div id="order-table" class="d-flex justify-content-end pt-3 pb-3">
                <table>
                    <tr>
                        <td class="text-secondary">數量:</td>
                        <td class="float-end fw-bolder fs-5">{{$details->product_qty}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">小計:</td>
                        <td class="float-end fw-bolder fs-5">${{$details->subtotal}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">運費:</td>
                        <td class="float-end fw-bolder fs-5">${{$details->shipping_fee}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">總計:</td>
                        <td class="float-end fw-bolder fs-5">${{$details->total}}</td>
                    </tr>
                </table>
            </div>
            <div class="orderStatus d-flex mt-3 pb-3">
                <span class="w-25 fs-5">訂單狀態</span>
                <span class="w-25 text-danger fs-5">
                    @if ($details->status == 1)
                        未付款
                    @elseif ($details->status == 2)
                        已付款
                    @elseif ($details->status == 3)
                        已出貨
                    @elseif ($details->status == 4)
                        已結單
                    @elseif ($details->status == 5)
                        已取消
                    @endif
                </span>
            </div>
            <div class="w-100 d-flex align-items-center pt-3 pb-3 mt-4">
                <div class="w-100 d-flex justify-content-between">
                    <button onclick="location.href='/order_list'" type="button" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">返回列表</button>
                    <a class="btn btn-primary btn-lg fs-6" href="/" role="button">返回首頁</a>
                </div>
            </div>
        </section>
    </main>
@endsection
