@extends('template.template')

@section('title')
    Banner管理
@endsection

@section('link')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 100%;
    }
    #banner {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #btnCreate {
        width: 100px;
        height: 100%;

    }
    .bannerImg {
        width: 100px;
        height: 100px;
    }
    @media(max-width:992px) {
        #banner {
            width: 500px;
        }

    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="banner" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <div class="d-flex justify-content-between mb-2">
                <h1 class="w-100 mb-3 text-primary fw-bolder">Banner管理</h1>
                <a id="btnCreate" href="/banner/create" class="w-25 btn btn-success">新增BANNER</a>
            </div>

            <div class="">
                <table id="bannerList" class="display">
                    <thead>
                        <tr>
                          <th>圖片預覽</th>
                          <th>圖片權重</th>
                          <th>功能</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>
                                <img src="{{asset('img/400-400.png')}}" alt="" class="bannerImg">
                            </td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-success">編輯</button>
                                <button class="btn btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('img/400-400.png')}}" alt="" class="bannerImg">
                            </td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-success">編輯</button>
                                <button class="btn btn-danger">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('img/400-400.png')}}" alt="" class="bannerImg">
                            </td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-success">編輯</button>
                                <button class="btn btn-danger">刪除</button>
                            </td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#bannerList').DataTable();
        } );
    </script>
@endsection

