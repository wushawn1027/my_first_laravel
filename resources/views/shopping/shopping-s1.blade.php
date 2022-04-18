@extends('shopping.template')

@section('title')
    Shopping-Step1
@endsection

@section('css')
    <style>
    main {
        background-color: rgb(180, 181, 182);
        height: 980px;
    }
    #shopping-s1 {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 880px;
    }
    #shopping-s1 .buy-progress {
        height: 180px;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    #shopping-s1 .steps .step {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    #shopping-s1 .steps .step::before {
        content: attr(data-text);
        position: absolute;
        bottom: -30px;
        text-align: center;
        word-break: keep-all;
        color: black;
    }
    #shopping-s1 .buy-progress .steps .buy-progress-bar {
        width: 180px;
        height: 10px;
        border-radius: 5px;
        background-color: darkgray;
        margin: 0px 8px;
    }
    #shopping-s1 .steps .green{
        background-color: rgb(71, 179, 71);
    }
    #shopping-s1 .steps .progress-25::before {
        content: '';
        display: block;
        width: 35%;
        height: 100%;
        background-color: rgb(71, 179, 71);
        border-radius: 5px;
    }
    .order-lists {
        height: 400px;
    }
    .order-list {
        height: 150px;
        display: flex;
        justify-content: space-between;
        align-items: center;
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
    #textNum {
        width: 35px;
        height: 25px;
        border: 1px solid grey;
        background-color: rgb(243, 242, 242);
    }
    #order-table {
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    table {
        width: 200px;
    }
    .fa-arrow-left:hover {
        color: black;
    }
    .btn-lg {
        width: 150px;
    }
    @media(max-width:992px) {
        #shopping-s1 {
            width: 500px;
        }
        #shopping-s1 .buy-progress .steps .buy-progress-bar {
            width: 40px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="shopping-s1" class="container-xxl rounded-3 p-5">
            <div class="buy-progress">
                <h2 class="fw-bolder">購物車</h2>
                <div class="p-4 steps d-flex align-items-center">
                    <div class="step green" data-text="確認購物車">1</div>
                    <div class="buy-progress-bar progress-25"></div>
                    <div class="step" data-text="付款與運送方式">2</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="完成訂購">4</div>
                </div>
            </div>
            <div class="order-lists d-flex flex-column mt-3">
                <h3>訂單明細</h3>
                <div class="order-list">
                    <div class="d-flex align-items-center">
                        <div class="shoppimg-img me-3">
                            <img src="{{asset('img/cat4.jpg')}}" class="" alt="">
                        </div>
                        <div clsss="d-flex flex-column">
                            <p class="m-0 fs-6">Chicken momo</p>
                            <p class="m-0 p-num">#41551</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div clsss="">
                            <span class="me-1">-</span>
                            <input id="textNum" type="text" value="1" class="rounded text-center">
                            <span class="ms-1">+</span>
                        </div>
                        <span class="ms-4">$10.50</span>
                    </div>
                </div>
                <div class="order-list">
                    <div class="d-flex align-items-center">
                        <div class="shoppimg-img me-3">
                            <img src="/img/rick-roll.gif" class="" alt="">
                        </div>
                        <div clsss="d-flex flex-column">
                            <p class="m-0 fs-6">Spicy Mexican potatoes</p>
                            <p class="m-0 p-num">#66999</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div clsss="">
                            <span class="me-1">-</span>
                            <input id="textNum" type="text" value="1" class="rounded text-center">
                            <span class="ms-1">+</span>
                        </div>
                        <span class="ms-4">$10.50</span>
                    </div>
                </div>
                <div class="order-list">
                    <div class="d-flex align-items-center">
                        <div class="shoppimg-img me-3">
                            <img src="/img/cat6.jpg" class="" alt="">
                        </div>
                        <div clsss="d-flex flex-column">
                            <p class="m-0 fs-6">Breakfast</p>
                            <p class="m-0 p-num">#86577</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div clsss="">
                            <span class="me-1">-</span>
                            <input id="textNum" type="text" value="1" class="rounded text-center">
                            <span class="ms-1">+</span>
                        </div>
                        <span class="ms-4">$10.50</span>
                    </div>
                </div>
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
            <div class="d-flex justify-content-between align-items-center pt-3 pb-3">
                <p class="fs-7 text-black">
                    <a href="/bootstrap"><i class="fa-solid fa-arrow-left me-1"></i></a>
                    返回購物
                </p>
                <div class="">
                    <button type="button" onclick="location.href='/shoppingS2'" class="btn btn-primary btn-lg fs-6">下一步</button>
                </div>
            </div>
        </section>
    </main>
@endsection

