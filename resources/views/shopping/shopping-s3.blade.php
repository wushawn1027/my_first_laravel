@extends('template.template')

@section('title')
    Shopping-Step3
@endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%;
    }
    #shopping-s3 {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #shopping-s3 .buy-progress {
        height: 180px;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    #shopping-s3 .steps .step {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    #shopping-s3 .steps .step::before {
        content: attr(data-text);
        position: absolute;
        bottom: -30px;
        text-align: center;
        word-break: keep-all;
        color: black;
    }
    #shopping-s3 .steps .buy-progress-bar {
        width: 180px;
        height: 10px;
        border-radius: 5px;
        background-color: darkgray;
        margin: 0px 8px;
    }
    #shopping-s3 .steps .green{
        background-color: rgb(71, 179, 71);
    }
    #shopping-s3 .steps .progress-100 {
        background-color: rgb(71, 179, 71);
    }
    #shopping-s3 .steps .progress-25::before {
        content: '';
        display: block;
        width: 35%;
        height: 100%;
        background-color: rgb(71, 179, 71);
        border-radius: 5px;
    }
    .sendData {
        height: 500px;
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    .sendData form input {
        outline: none !important;
        background-color: rgb(243, 242, 242);
    }
    .sendData form input:focus {
        outline: none !important;
        background-color: rgb(243, 242, 242);
        border: 2px solid black;
    }
    #order-table {
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
        #shopping-s3 {
            width: 650px;
        }
        #shopping-s3 .buy-progress .steps .buy-progress-bar {
            width: 95px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="shopping-s3" class="container-xxl rounded-3 p-5">
            <form name="s3" action="/shoppingS4" method="post">
                @csrf
                <div class="buy-progress">
                    <h2 class="fw-bolder">?????????</h2>
                    <div class="p-4 steps d-flex align-items-center">
                        <div class="step green" data-text="???????????????">1</div>
                        <div class="buy-progress-bar progress-100"></div>
                        <div class="step green" data-text="?????????????????????">2</div>
                        <div class="buy-progress-bar progress-100"></div>
                        <div class="step green" data-text="????????????">3</div>
                        <div class="buy-progress-bar progress-25"></div>
                        <div class="step" data-text="????????????">4</div>
                    </div>
                </div>
                <div class="sendData p-1 mt-3">
                    <h3>????????????</h3>
                    <div class="form mt-4">
                        <div action="" class="d-flex flex-column">
                            <label for="inputName">
                                <h5 class="mb-1">??????</h5>
                            </label>
                            <div class="form-group w-100">
                                <input type="text" name="name" class="p-2 form-control mb-3" id="inputName"  placeholder="?????????">
                            </div>

                            <label for="inputPhone">
                                <h5 class="mb-1">??????</h5>
                            </label>
                            <div class="form-group w-100">
                                <input type="text" name="phone" class="p-2 form-control mb-3" id="inputPhone"  placeholder="0912345678">
                            </div>

                            <label for="inputEmail">
                                <h5 class="mb-1">Email</h5>
                            </label>
                            <div class="form-group w-100">
                                <input type="text" name="email" class="p-2 form-control mb-3" id="inputEmail"  placeholder="abc123@gmail.com">
                            </div>

                            <label for="inputCity">
                                <h5 class="mb-1">
                                    @if ($deliver == 1)
                                        ??????
                                    @else
                                        ????????????
                                    @endif
                                </h5>
                            </label>
                            <div class="w-100 d-flex">
                                <input type="text" name="city" class="w-50 p-2 form-control mb-3 me-1" id="inputCity"  placeholder="XX???XX???">
                                <input type="text" name="code" class="w-50 p-2 form-control mb-3 ms-1" id="inputZoneNum"  placeholder="????????????">
                            </div>
                            <div class="">
                                <input type="text" name="address" class="p-2 form-control mb-3" id="inputAddress"  placeholder="XX???XX???XX???">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="order-table" class="d-flex justify-content-end pt-3 pb-3">
                    <table>
                        <tr>
                            <td class="text-secondary">??????:</td>
                            <td class="float-end fw-bolder fs-5">{{count($datas)}}</td>
                        </tr>
                        <tr>
                            <td class="text-secondary">??????:</td>
                            <td class="float-end fw-bolder fs-5">${{$subtotal}}</td>
                        </tr>
                        <tr>
                            <td class="text-secondary">??????:</td>
                            <td class="float-end fw-bolder fs-5">$
                                @if ($deliver == 1)
                                    150
                                @else
                                    60
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">??????:</td>
                            <td class="float-end fw-bolder fs-5">${{$total}}</td>
                        </tr>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-3 pb-3 mt-4">
                    <div class="">
                        <button id="btnGoBack" type="button" onclick="document.querySelector('#goBackForm').submit();" class="btn btn-light btn-lg fs-6 text-primary">?????????</button>
                    </div>
                    <div class="">
                        <button id="nextBtn" onclick="gopay()" type="button" class="btn btn-primary btn-lg fs-6">????????????</button>
                    </div>
                </div>
            </form>
            <form action="/shoppingS2/goback" method="post" hidden id="goBackForm">
                @method('POST')
                @csrf
            </form>
        </section>
    </main>
@endsection

@section('script')
<script>

function gopay(){
    if (s3.name.value == "") {
        alert('???????????????!');
    }else if (s3.phone.value == "") {
        alert('???????????????!');
    }else if (s3.email.value == "") {
        alert('?????????Email!');
    }else if (s3.city.value == "" || s3.code.value == "" || s3.address.value == "") {
        alert('?????????????????????!');
    }else
    s3.submit();
}


</script>
@endsection
