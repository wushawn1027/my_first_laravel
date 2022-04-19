@extends('template.template')

@section('title')
    Shopping-Step1
@endsection

@section('css')
    <style>
    main {
        background-color: rgb(180, 181, 182);
        height: 1300px;
    }
    #shopping-s4 {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 1200px;
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
        height: 400px;
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
            width: 500px;
        }
        #shopping-s4 .buy-progress .steps .buy-progress-bar {
            width: 40px;
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
                <div class="order-list">
                    <div class="d-flex align-items-center">
                        <div class="shoppimg-img me-3">
                            <img src="{{asset('img/cat4.jpg')}}" class="" alt="" onerror="errorImg(this)">
                        </div>
                        <div clsss="d-flex flex-column">
                            <p class="m-0 fs-6">Chicken momo</p>
                            <p class="m-0 p-num">#41551</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div clsss="">
                            <span class="me-1">x</span>
                            <span class="ms-1">1</span>
                        </div>
                        <span class="ms-4">$10.50</span>
                    </div>
                </div>
                <div class="order-list">
                    <div class="d-flex align-items-center">
                        <div class="shoppimg-img me-3">
                            <img src="{{asset('img/rick-roll.gif')}}" class="" alt="" onerror="errorImg(this)">
                        </div>
                        <div clsss="d-flex flex-column">
                            <p class="m-0 fs-6">Spicy Mexican potatoes</p>
                            <p class="m-0 p-num">#66999</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div clsss="">
                            <span class="me-1">x</span>
                            <span class="ms-1">1</span>
                        </div>
                        <span class="ms-4">$10.50</span>
                    </div>
                </div>
                <div class="order-list">
                    <div class="d-flex align-items-center">
                        <div class="shoppimg-img me-3">
                            <img src="{{asset('img/cat6.jpg')}}" class="" alt="" onerror="errorImg(this)">
                        </div>
                        <div clsss="d-flex flex-column">
                            <p class="m-0 fs-6">Breakfast</p>
                            <p class="m-0 p-num">#86577</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div clsss="">
                            <span class="me-1">x</span>
                            <span class="ms-1">1</span>
                        </div>
                        <span class="ms-4">$10.50</span>
                    </div>
                </div>
            </div>
            <div class="sendDatd d-flex flex-column pt-3 pb-3">
                <h3 class="w-100">寄送資料</h3>
                <table>
                    <tr>
                        <td class="fs-5">姓名</td>
                        <td class="fs-5">王曉明</td>
                    </tr>
                    <tr>
                        <td class="fs-5">電話</td>
                        <td class="fs-5">0912345678</td>
                    </tr>
                    <tr>
                        <td class="fs-5">Email</td>
                        <td class="fs-5">abc123@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="fs-5">地址</td>
                        <td class="fs-5">409 台中市小鎮村英雄路1號</td>
                    </tr>
                </table>
            </div>
            <div id="order-table" class="d-flex justify-content-end pt-3 pb-3">
                <table>
                    <tr>
                        <td class="text-secondary">數量:</td>
                        <td class="float-end fw-bolder fs-5">3</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">小計:</td>
                        <td class="float-end fw-bolder fs-5">$24.90</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">運費:</td>
                        <td class="float-end fw-bolder fs-5">$24.90</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">總計:</td>
                        <td class="float-end fw-bolder fs-5">$24.90</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-end align-items-center pt-3 pb-3">
                <div class="">
                    <button type="button" onclick="location.href='/bootstrap'" class="btn btn-primary btn-lg fs-6">返回首頁</button>
                </div>
            </div>
        </section>
    </main>
@endsection
