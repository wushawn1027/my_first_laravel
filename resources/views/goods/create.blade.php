@extends('template.template')

@section('title')
    商品新增
@endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%
    }
    #bannerCreate {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #btnClear , #btnSend {
        width: 150px;
        border: 1px solid black;
    }
    @media(max-width:992px) {
        #bannerCreate {
            width: 500px;
        }

    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="bannerCreate" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <h1 class="w-100 mb-3 text-primary fw-bolder">商品新增</h1>
            <div class="mb-4">
                <form class="d-flex flex-column" action="/goods/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="goodsName" class="fs-5 mb-2">商品名稱</label>
                    <input type="text" name="name" id="goodsName" class="mb-2 text-secondary">

                    <label for="goodsPrice" class="fs-5 mb-2">商品價格</label>
                    <input type="text" name="price" id="goodsPrice" class="mb-2">

                    <label for="goodsNum" class="fs-5 mb-2">商品數量</label>
                    <input type="number" name="quantity" id="goodsNum" class="mb-2">

                    <label for="goodsIntro" class="fs-5 mb-2">商品介紹</label>
                    <input type="text" name="introduction" id="goodsIntro" class="mb-2 text-secondary">
                </form>
            </div>
                    <div class="d-flex justify-content-center">
                        <button type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消</button>
                        <button type="submit" id="btnSend" class="btn btn-primary btn-lg fs-6 ms-1">新增</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
@endsection
