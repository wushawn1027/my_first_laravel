@extends('template.template')

@section('title')
    Shopping-Step2
@endsection

@section('css')
    <style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%;
    }
    #shopping-s2 {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #shopping-s2 .buy-progress {
        height: 180px;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    #shopping-s2 .steps .step {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    #shopping-s2 .steps .step::before {
        content: attr(data-text);
        position: absolute;
        bottom: -30px;
        text-align: center;
        word-break: keep-all;
        color: black;
    }
    #shopping-s2 .steps .buy-progress-bar {
        width: 180px;
        height: 10px;
        border-radius: 5px;
        background-color: darkgray;
        margin: 0px 8px;
    }
    #shopping-s2 .steps .progress-100 {
        background-color: rgb(71, 179, 71);
    }
    #shopping-s2 .steps .green{
        background-color: rgb(71, 179, 71);
    }
    #shopping-s2 .steps .progress-25::before {
        content: '';
        display: block;
        width: 35%;
        height: 100%;
        background-color: rgb(71, 179, 71);
        border-radius: 5px;
    }
    #pay {
        height: 240px;
        display: flex;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    #pay .payBox , #send .sendBox , #send , #order-table{
        border-bottom: 1px solid rgb(219, 216, 216);
    }

    table {
        width: 200px;
    }
    .btn-lg {
        width: 150px;
    }
    #btnGoBack {
        border: 1px solid blue;
    }
    @media(max-width:992px) {
        #shopping-s2 {
            width: 650px;
        }
        #shopping-s2 .buy-progress .steps .buy-progress-bar {
            width: 40px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <form action="/shoppingS3" method="POST" id="shopping-s2" class="container-xxl rounded-3 p-5">
            @csrf
            <div class="buy-progress">
                <h2 class="fw-bolder">購物車</h2>
                <div class="p-4 steps d-flex align-items-center">
                    <div class="step green" data-text="確認購物車">1</div>
                    <div class="buy-progress-bar progress-100"></div>
                    <div class="step green" data-text="付款與運送方式">2</div>
                    <div class="buy-progress-bar progress-25"></div>
                    <div class="step" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="完成訂購">4</div>
                </div>
            </div>
            <div id="pay" class="d-flex flex-column mt-3">
                <h3 class="w-100">付款方式</h3>
                <div class="">
                    <div class="payBox p-3">
                        <input type="radio" name="pay" id="payCard">
                        <label class="fs-5 ms-1" for="payCard" value="1">信用卡付款</label>
                    </div>
                    <div class="payBox p-3">
                        <input type="radio" name="pay" id="payATM">
                        <label class="fs-5 ms-1" for="payATM" value="2">網路 ATM</label>
                    </div>
                    <div class="p-3">
                        <input type="radio" name="pay" id="payStore">
                        <label class="fs-5 ms-1" for="payStore" value="3">超商代碼</label>
                    </div>
                </div>
            </div>
            <div id="send" class="d-flex flex-column mt-4">
                <h3 class="w-100">運送方式</h3>
                <div class="">
                    <div class="sendBox p-3">
                        <input type="radio" name="deliver" id="sendHome">
                        <label class="fs-5 ms-1" for="sendHome" value="1">黑貓宅配</label>
                    </div>
                    <div class="p-3">
                        <input type="radio" name="deliver" id="sendStore">
                        <label class="fs-5 ms-1" for="sendStore" value="2">超商店到店</label>
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
            <div class="d-flex justify-content-between align-items-center pt-3 pb-3 mt-4">
                <div class="">
                    <button id="btnGoBack" type="button" class="btn btn-light btn-lg fs-6"><a class="text-primary" href="/shoppingS1">上一步</a></button>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary btn-lg fs-6">下一步</button>
                </div>
            </div>
        </form>
    </main>
@endsection
