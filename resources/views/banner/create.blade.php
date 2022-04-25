@extends('template.template')

@section('title')
    Banner圖片新增
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
            <h1 class="w-100 mb-3 text-primary fw-bolder">Banner新增</h1>
            <div class="mb-4">
                <form class="d-flex flex-column" action="/banner/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="bannerImg" class="fs-5 mb-2">Banner圖片上傳</label>
                    <input type="file" name="banner_img" id="bannerImg" class="mb-2 text-secondary">

                    <label for="bannerOpcaity" class="fs-5 mb-2">透明度設定</label>
                    <input type="text" name="img_opacity" id="imgOpcaity" class="mb-2">

                    <label for="bannerWeight" class="fs-5 mb-2">權重設定</label>
                    <input type="number" name="weight" id="weight" class="mb-2">

                    <div class="mt-4

                     d-flex justify-content-center">
                        <button type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消</button>
                        <button type="submit" id="btnSend" class="btn btn-primary btn-lg fs-6 ms-1">新增</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
@endsection
