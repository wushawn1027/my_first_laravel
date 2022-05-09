@extends('template.template')

@section('title')
    Shopping-Step4
@endsection

@section('css')
    <style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%;
    }
    #shopping-s4 {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #shopping-s4 .buy-progress {
        height: 180px;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    #shopping-s4 .steps .step {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    #shopping-s4 .steps .step::before {
        content: attr(data-text);
        position: absolute;
        bottom: -30px;
        text-align: center;
        word-break: keep-all;
        color: black;
    }
    #shopping-s4 .steps .buy-progress-bar {
        width: 180px;
        height: 10px;
        border-radius: 5px;
        background-color: darkgray;
        margin: 0px 8px;
    }
    #shopping-s4 .steps .green{
        background-color: rgb(71, 179, 71);
    }
    #shopping-s4 .steps .progress-100 {
        background-color: rgb(71, 179, 71);
    }
    .order-lists {
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
    .btn-lg {
        width: 150px;
    }
    #btnGoBack {
        border: 1px solid blue;
    }
    @media(max-width:992px) {
        #shopping-s4 {
            width: 650px;
        }
        #shopping-s4 .buy-progress .steps .buy-progress-bar {
            width: 95px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="shopping-s4" class="container-xxl rounded-3 p-5">
            <div class="buy-progress">
                <h2 class="fw-bolder">購物車</h2>
                <div class="p-4 steps d-flex align-items-center">
                    <div class="step green" data-text="確認購物車">1</div>
                    <div class="buy-progress-bar progress-100"></div>
                    <div class="step green" data-text="付款與運送方式">2</div>
                    <div class="buy-progress-bar progress-100"></div>
                    <div class="step green" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar progress-100"></div>
                    <div class="step green" data-text="完成訂購">4</div>
                </div>
            </div>
            <div class="order-lists d-flex flex-column mt-3">
                <h3>訂單明細</h3>

                @foreach ($order->detail as $item)
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
            <div class="sendDatd d-flex flex-column pt-3 pb-3">
                <h3 class="w-100">寄送資料</h3>
                <table>
                    <tr>
                        <td class="fs-5">姓名</td>
                        <td class="fs-5">{{$order->name}}</td>
                    </tr>
                    <tr>
                        <td class="fs-5">電話</td>
                        <td class="fs-5">{{$order->phone}}</td>
                    </tr>
                    <tr>
                        <td class="fs-5">Email</td>
                        <td class="fs-5">{{$order->email}}</td>
                    </tr>
                    <tr>
                    @if ($order->shipping_way == 1)
                        <td class="fs-5">地址</td>
                        <td class="fs-5">{{$order->address}}</td>
                    @else
                        <td class="fs-5">超商地址</td>
                        <td class="fs-5">{{$order->store_address}}</td>
                    @endif
                    </tr>
                </table>
            </div>
            <div id="order-table" class="d-flex justify-content-end pt-3 pb-3">
                <table>
                    <tr>
                        <td class="text-secondary">數量:</td>
                        <td class="float-end fw-bolder fs-5">{{$order->product_qty}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">小計:</td>
                        <td class="float-end fw-bolder fs-5">${{$order->subtotal}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">運費:</td>
                        <td class="float-end fw-bolder fs-5">${{$order->shipping_fee}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">總計:</td>
                        <td class="float-end fw-bolder fs-5">${{$order->total}}</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-end align-items-center pt-3 pb-3 mt-4">
                <div class="">
                    <a class="btn btn-primary btn-lg fs-6" href="/" role="button">返回首頁</a>
                </div>
            </div>
        </section>
    </main>
@endsection
