@extends('template.template')

@section('title')
    Comment
@endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%
    }
    #shopping-comment {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    .commentZone {
        height: 100%;
        border-bottom: 1px solid rgb(167, 167, 167);
    }
    .article {
        height: 150px;
        border: 1px solid darkblue;
        border-radius: 10px;
    }
    .a-box {
        border-bottom: 1px solid rgb(2, 2, 112);
    }
    .a-content {
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
        <section id="shopping-comment" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <h1 class="w-100 mb-3 text-primary fw-bolder">留言區</h1>
            <div class="w-100 commentZone">
                @foreach ($data1 as $comments)
                <div class="article w-100 d-flex flex-column p-2 mb-3">
                    <div class="a-box w-100 d-flex just-content-between align-items-center mb-2">
                        <div class="a-innerbox d-flex w-50 align-items-center">
                            <h2 class="a-title">{{$comments->title}}</h2>
                            <span class="a-name ms-2">{{$comments->name}}</span>
                        </div>
                        <span class="a-time w-50 d-flex justify-content-end align-items-center">{{substr($comments->created_at,5,2).'月'.substr($comments->created_at,8,2).'號'}}</span>
                    </div>
                    <div class="a-content">
                        {{$comments->content}}
                    </div>
                    <div class="">
                        <a href="/comment/delete/{{$comments->id}}" class="me-1 text-secondary"><i class="fa-solid fa-trash-can"></i> 刪除</a>
                        <a href="/comment/edit/{{$comments->id}}" class="ms-1 text-secondary"><i class="fa-solid fa-pen-to-square"></i> 編輯</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="form mt-2">
                <h1 class="text-primary fw-bolder">歡迎留言</h1>
                <form action="/comment/save" method="GET" class="d-flex flex-column p-1">
                    <span class="mb-1 fs-5">留言者姓名</span>
                    <div class="form-group ">
                        <input type="text" class="p-2 form-control mb-3" id="inputName" name="name" placeholder="">
                    </div>
                    <span class="mb-1 fs-5">文章標題</span>
                    <div class="form-group w-100">
                        <input type="text" class="p-2 form-control mb-3" id="inputTitle" name="title"  placeholder="">
                    </div>
                    <span class="mb-1 fs-5">文章內容</span>
                    <div class="form-group w-100">
                        <textarea type="text" class="p-2 form-control mb-3" id="inputContent" name="content"  placeholder=""></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="reset" id="btnClear" class="btn btn-light btn-lg fs-6 text-black me-1">清除內容</button>
                        <button type="submit" id="btnSend" class="btn btn-primary btn-lg fs-6 ms-1">送出文章</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
@endsection
