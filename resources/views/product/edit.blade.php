@extends('template.template')

@section('title')
    商品編輯
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
            <h1 class="w-100 mb-3 text-primary fw-bolder">商品編輯</h1>
            <div class="mb-4">

                <form class="d-flex flex-column" action="/product/update/{{$edit->id}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div>原始主要圖片</div>
                    <img src="{{$edit->img_path}}" alt="" class="w-25">
                    <label for="productImg" class="fs-5 mb-2">商品圖片上傳</label>
                    <input type="file" name="product_img" id="productImg" class="mb-2 text-secondary">

                    <div>原始次要圖片</div>

                    <div class="d-flex flex-warp">
                        @foreach ($edit->imgs as $item)
                        <img src="{{$item->img_path}}" alt="" style="height:60px;" class="me-2">
                        @endforeach
                    </div>

                    <label for="productImg" class="fs-5 mb-2">商品次要圖片上傳 (可選擇多張圖片)</label>
                    <input type="file" name="second_img[]" id="secondImg" class="mb-2 text-secondary" multiple accept="image/*">

                    <label for="productName" class="fs-5 mb-2">商品名稱</label>
                    <input type="text" name="name" id="productName" class="mb-2" value="{{$edit->name}}">

                    <label for="productPrice" class="fs-5 mb-2">商品價格</label>
                    <input type="text" name="price" id="productPrice" class="mb-2" value="{{$edit->price}}">

                    <label for="productNum" class="fs-5 mb-2">商品數量</label>
                    <input type="number" name="quantity" id="productNum" class="mb-2" value="{{$edit->quantity}}">

                    <label for="productIntro" class="fs-5 mb-2">商品介紹</label>
                    <input type="text" name="introduction" id="productIntro" class="mb-2" value="{{$edit->introduction}}">

                    <div class="d-flex justify-content-center">
                        <button type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消</button>
                        <button type="submit" id="btnSend" class="btn btn-primary btn-lg fs-6 ms-1">送出</button>
                    </div>
                </form>

        </section>
    </main>
@endsection
