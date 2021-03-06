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
        width: 300px;
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
            width: 95px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <form name="s2" action="/shoppingS3" method="post" id="shopping-s2" class="container-xxl rounded-3 p-5">
            @csrf
            <div class="buy-progress">
                <h2 class="fw-bolder">?????????</h2>
                <div class="p-4 steps d-flex align-items-center">
                    <div class="step green" data-text="???????????????">1</div>
                    <div class="buy-progress-bar progress-100"></div>
                    <div class="step green" data-text="?????????????????????">2</div>
                    <div class="buy-progress-bar progress-25"></div>
                    <div class="step" data-text="????????????">3</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="????????????">4</div>
                </div>
            </div>
            <div id="pay" class="d-flex flex-column mt-3">
                <h3 class="w-100">????????????</h3>
                <div class="">
                    <div class="payBox p-3">
                        <input type="radio" name="payway" id="payCard" value="1">
                        <label class="fs-5 ms-1" for="payCard">???????????????</label>
                    </div>
                    <div class="payBox p-3">
                        <input type="radio" name="payway" id="payATM" value="2">
                        <label class="fs-5 ms-1" for="payATM">?????? ATM</label>
                    </div>
                    <div class="p-3">
                        <input type="radio" name="payway" id="payStore" value="3">
                        <label class="fs-5 ms-1" for="payStore">????????????</label>
                    </div>
                </div>
            </div>
            <div id="send" class="d-flex flex-column mt-4">
                <h3 class="w-100">????????????</h3>
                <div class="">
                    <div class="sendBox p-3">
                        <input type="radio" name="deliver" id="sendHome" value="1">
                        <label class="fs-5 ms-1" for="sendHome">????????????</label>
                    </div>
                    <div class="p-3">
                        <input type="radio" name="deliver" id="sendStore" value="2">
                        <label class="fs-5 ms-1" for="sendStore">???????????????</label>
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
                        <td class="fee float-end fw-bolder fs-5">$150(??????) ??? $60(??????)</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">??????:</td>
                        <td class="total float-end fw-bolder fs-5">${{$subtotal}} + 150 ??? 60</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 pb-3 mt-4">
                <div class="">
                    <button id="btnGoBack" type="button" class="btn btn-light btn-lg fs-6"><a class="text-primary" href="/shoppingS1">?????????</a></button>
                </div>
                <div class="">
                    <button id="nextBtn" onclick="next()" type="button" class="btn btn-primary btn-lg fs-6">?????????</button>
                </div>
            </div>
        </form>
    </main>
@endsection

@section('script')
<script>

const sHome = document.querySelector('#sendHome');
const sStore = document.querySelector('#sendStore');

const fee = document.querySelector('.fee');
const total = document.querySelector('.total');

sHome.addEventListener('click',function(){

    fee.innerHTML = '$' + 150;
    total.innerHTML = '$' + (parseInt({{$subtotal}}) + 150);
});

sStore.addEventListener('click',function(){

    fee.innerHTML = '$' + 60;
    total.innerHTML = '$' + (parseInt({{$subtotal}}) + 60);
});


function next(){
    if (!s2.payway[0].checked && !s2.payway[1].checked && !s2.payway[2].checked){
        alert('?????????????????????!');
    }else if(!s2.deliver[0].checked && !s2.deliver[1].checked) {
        alert('?????????????????????!');
    }else
    s2.submit();
}






</script>
@endsection
