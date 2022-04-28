@extends('template.template')

@section('title')
    Comment-Edit
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
        height: 100%;
    }
    #shopping-comment {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #inputContent {
        resize: none;
        width: 100%;
        height: 100px;
    }
    #btnClear , #btnSend {
        width: 150px;
        border: 1px solid black;
    }
    @media(max-width:992px) {
        #shopping-comment {
            width: 500px;
        }

    }
    </style>
@endsection

@section('main')

    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="shopping-comment" class="container-xxl rounded-3 p-5 d-flex flex-column">
            <div class="form">
                <h1 class="text-primary fw-bolder">編輯留言</h1>
                <form action="/comment/update/{{$edit->id}}" method="GET" class="d-flex flex-column p-1">
                        <span class="mb-1 fs-5">留言者姓名</span>
                        <div class="form-group ">
                            <input type="text" class="p-2 form-control mb-3" id="inputName" name="name" value="{{$edit->name}}">
                        </div>
                        <span class="mb-1 fs-5">文章標題</span>
                        <div class="form-group w-100">
                            <input type="text" class="p-2 form-control mb-3" id="inputTitle" name="title"  value="{{$edit->title}}">
                        </div>
                        <span class="mb-1 fs-5">文章內容</span>
                        <div class="form-group w-100">
                            <textarea type="text" class="p-2 form-control mb-3" id="inputContent" name="content">{{$edit->content}}
                            </textarea>
                        </div>
                    <div class="d-flex justify-content-center">
                        <button onclick="location.href='/comment'" type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">取消編輯</button>
                        <button type="submit" id="btnSend" class="text-black btn btn-primary btn-lg fs-6 ms-1">送出文章</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
@endsection
