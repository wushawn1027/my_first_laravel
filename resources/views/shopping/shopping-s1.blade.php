@extends('template.template')

@section('title')
    Shopping-Step1
@endsection

@section('css')
    <style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%;
    }
    #shopping-s1 {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
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
        height: 100%;
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
    .qty {
        width: 45px;
        text-align: center;
    }
    .productPrice {
        width: 80px;
    }
    #deleteBtn {
        width: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #order-table {
        border-bottom: 1px solid rgb(219, 216, 216);
    }
    table {
        width: 300px;
    }
    .fa-arrow-left:hover {
        color: black;
    }
    .btn-lg {
        width: 150px;
    }
    @media(max-width:992px) {
        #shopping-s1 {
            width: 650px;
        }
        #shopping-s1 .buy-progress .steps .buy-progress-bar {
            width: 95px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <form action="/shoppingS2" method="POST" id="shopping-s1" class="container-xxl rounded-3 p-5">
            @csrf
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
                {{-- <div class="w-100 d-flex justify-content-between"> --}}
                    <h3>訂單明細</h3>
                    {{-- @foreach ($datas as $data)
                    <button type="button" onclick="clear_cart('{{$data->user_id}}')" class="bg-danger text-light ms-2 rounded">清除購物車</button type="button">
                    @endforeach --}}
                {{-- </div> --}}

                    @foreach ($datas as $item)
                    <div class="order-list">
                        <div class="d-flex align-items-center">
                            <div class="shoppimg-img me-3">
                                <img src="{{$item->product->img_path}}" class="" alt="">
                            </div>
                            <div clsss="d-flex flex-column">
                                <p class="m-0 fs-5 fw-bolder">{{$item->product->name}}</p>
                                <p class="m-0 p-num" data-product_qty="{{$item->product->quantity}}" data-product_price="{{$item->product->price}}">
                                    剩下 {{$item->product->quantity}} 件
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div clsss="">
                                <span class="me-1">數量：</span>
                                <input class="minus" type="button" value="-">
                                <input class="qty" name="qty[]" type="number" value="{{$item->qty}}" readonly>
                                <input class="plus" type="button" value="+">
                            </div>
                            <span class="productPrice ms-4 d-flex justify-content-end">${{$item->qty * $item->product->price}}</span>
                            <button type="button" id="deleteBtn" onclick="delete_cart('{{$item->id}}')" class="btn-danger text-light ms-2">刪除</button type="button">
                        </div>
                    </div>
                    @endforeach

            </div>
            <div id="order-table" class="d-flex justify-content-end pt-3 pb-3">
                <table>
                    <tr>
                        <td class="text-secondary">數量:</td>
                        <td class="float-end fw-bolder fs-5">{{count($datas)}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">小計:</td>
                        <td class="subtotal float-end fw-bolder fs-5">${{$subtotal}}</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">運費:</td>
                        <td class="float-end fw-bolder fs-5">$150(宅配) 或 $60(超商)</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">總計:</td>
                        <td class="total float-end fw-bolder fs-5">${{$subtotal}} + 150 或 60</td>
                    </tr>
                </table>
            </div>
            <span class="subtotal"></span>
            <div class="d-flex justify-content-between align-items-center pt-3 pb-3 mt-4">
                <p class="fs-7 text-black">
                    <a href="/"><i class="fa-solid fa-arrow-left me-1"></i></a>
                    返回購物
                </p>
                <div class="">
                    <button type="submit" class="btn btn-primary btn-lg fs-6" role="button">下一步</button>
                </div>
            </div>
        </form>
    </main>
@endsection

@section('script')
<script>
    const minus = document.querySelectorAll('.minus');
    const qty = document.querySelectorAll('.qty');
    const plus = document.querySelectorAll('.plus');
    const sum_price = document.querySelectorAll('.productPrice');

    // 為了知道各個產品所剩數量 方便判斷 所以將資料印在html中 再使用js抓進來
    const number = document.querySelectorAll('.p-num');

    const subtotal = document.querySelector('.subtotal');
    const total = document.querySelector('.total');


    for (let i = 0; i < minus.length; i++) {

        minus[i].onclick = function(){

            if (parseInt(qty[i].value) > 1){
                qty[i].value = parseInt(qty[i].value) - 1;
                // 重新計算價格 (商品單價*數量)
                sum_price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
            }
            get_total();
        }

        plus[i].onclick = function(){

            if (parseInt(qty[i].value) < parseInt(number[i].dataset.product_qty)){
                qty[i].value = parseInt(qty[i].value) + 1;
                sum_price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
            }
            get_total();
        }

    }

    // 計算所有品項的金額 並加總
    function get_total() {

        var sum = 0;
        for (let j = 0; j < minus.length; j++) {

            sum += parseInt(number[j].dataset.product_price) * parseInt(qty[j].value)
        }
        subtotal.innerHTML = '$' + sum;
        total.innerHTML = '$' + sum + ' + 150 或 60';
    }


    function delete_cart(id){

        var form = new FormData();

        form.append('_token', '{{ csrf_token() }}');

        fetch('/shoppingS1/delete/' + id, {
                method: 'POST',
                body: form
            }).then(res =>{
                // 使用JS重新整理網頁
                location.reload();
            })
    }


    // function clear_cart(id){

    // var formdata = new FormData();

    // formdata.append('_token', '{{ csrf_token() }}');

    // fetch('/shoppingS1/clear/' + id, {
    //         method: 'POST',
    //         body: formdata
    //     }).then(res =>{
    //         location.reload();
    //     })
    // }


</script>
@endsection
