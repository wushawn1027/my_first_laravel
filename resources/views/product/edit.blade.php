@extends('layouts.app')

@section('title')
    商品編輯
@endsection

@section('link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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
                    <label for="productImg" class="fs-5 mb-2">商品主要圖片上傳</label>
                    <input type="file" name="product_img" id="productImg" class="mb-2 text-secondary">

                    <div class="mt-3">原始次要圖片</div>

                    <div class="d-flex flex-wrap">
                        @foreach ($edit->imgs as $item)
                        <div class="d-flex flex-column me-3 w-25" id="sup_img{{$item->id}}">
                            <img src="{{$item->img_path}}" alt="" style="height:100px;" class="w-100 me-2 mb-1">
                            <button type="button" onclick="delete_img({{$item->id}})" class="text-black btn btn-danger w-100 mb-1">刪除圖片</button>
                        </div>
                        @endforeach
                    </div>

                    <label for="productImg" class="fs-5 mb-2">商品次要圖片上傳 (可選擇多張圖片)</label>
                    <input type="file" name="second_img[]" id="secondImg" class="mb-4 text-secondary" multiple accept="image/*">

                    <label for="productName" class="fs-5 mb-2">商品名稱</label>
                    <input type="text" name="name" id="productName" class="mb-2" value="{{$edit->name}}">

                    <label for="productPrice" class="fs-5 mb-2">商品價格</label>
                    <input type="text" name="price" id="productPrice" class="mb-2" value="{{$edit->price}}">

                    <label for="productNum" class="fs-5 mb-2">商品數量</label>
                    <input type="number" name="quantity" id="productNum" class="mb-2" value="{{$edit->quantity}}">

                    <label for="productIntro" class="fs-5 mb-2">商品介紹</label>
                    <input type="text" name="introduction" id="productIntro" class="mb-2" value="{{$edit->introduction}}">

                    <div class="d-flex justify-content-center mt-5">
                        <button onclick="location.href='/product'" type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消編輯</button>
                        <button type="submit" id="btnSend" class="text-black btn btn-primary btn-lg fs-6 ms-1">編輯完成</button>
                    </div>
                </form>
                {{-- @foreach ($edit->imgs as $item)
                    <form action="/product/delete_img/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                        @method('DELETE')
                        @csrf
                    </form>
                @endforeach --}}

        </section>
    </main>
@endsection

@section('script')
    <script>
        function delete_img(id){
            // 準備表單及內部的資料
            let formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', '{{ csrf_token() }}');

            // 將準備好的表單藉由fetch送到後台
            fetch("/product/delete_img/"+id, {
                method: "POST",
                body : formData
            }).then(function(response) {
                // 成功從資料庫刪除資料後, 將自己的html元素消除
                let element = document.querySelector('#sup_img'+id);
                element.parentNode.removeChild(element);
            })
        }
    </script>

@endsection
