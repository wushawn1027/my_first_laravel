@extends('template.template')

@section('title')
    Shopping-Comment
@endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 1100px;
    }
    #shopping-comment {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 1000px;
    }
    .article {
        height: 150px;
        border: 1px solid grey;
    }
    .a-content {
        height: 60px;
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
            <h1 class="w-100 mb-3">留言區</h1>
            <div class="article w-100 d-flex flex-column p-2 mb-3">
                <div class="a-box w-100 d-flex just-content-between align-items-center">
                    <div class="a-innerbox d-flex w-50 align-items-center">
                        <h2 class="a-title">XXXXX</h2>
                        <span class="a-name ms-2">XXX</span>
                    </div>
                    <span class="a-time w-50 d-flex justify-content-end align-items-center">2022/04/19</span>
                </div>
                <div class="a-content">
                    12345678911111111111111111111111111111111
                </div>
            </div>
            <div class="article w-100 d-flex flex-column p-2 mb-3">
                <div class="a-box w-100 d-flex just-content-between align-items-center">
                    <div class="a-innerbox d-flex w-50 align-items-center">
                        <h2 class="a-title">AAAAA</h2>
                        <span class="a-name ms-2">XXX</span>
                    </div>
                    <span class="a-time w-50 d-flex justify-content-end align-items-center">2022/04/19</span>
                </div>
                <div class="a-content">
                    abcdabcdabcdaaaaaaaaaaaaaaaaaaaaaaaaaa
                </div>
            </div>
            <div class="article w-100 d-flex flex-column p-2 mb-3">
                <div class="a-box w-100 d-flex justify-content-between align-items-center">
                    <div class="a-innerbox d-flex w-50 align-items-center">
                        <h2 class="a-title">BBBBB</h2>
                        <span class="a-name ms-2">XXX</span>
                    </div>
                    <span class="a-time w-50 d-flex justify-content-end align-items-center">2022/04/19</span>
                </div>
                <div class="a-content">
                    dvvsvdjwucimehiskxsmendhbndfcmcxhusfj
                </div>
            </div>
            <div class="form">
                <h1>歡迎留言</h1>
                <form action="/comment/save" method="GET" class="d-flex flex-column">
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
                        <textarea type="text" class="p-2 form-control mb-3" id="inputContent" name="content"  placeholder="" rows="4"></textarea>
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
