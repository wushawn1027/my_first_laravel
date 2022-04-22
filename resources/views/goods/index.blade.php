@extends('template.template')

@section('title')
    商品管理
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
    #goods {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #btnCreate {
        width: 100px;
        height: 100%;
    }
    @media(max-width:992px) {
        #goods {
            width: 500px;
        }

    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="goods" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <div class="d-flex justify-content-between mb-2">
                <h1 class="w-100 mb-3 text-primary fw-bolder">商品管理</h1>
                <a id="btnCreate" href="/goods/create" class="w-25 btn btn-success"><i class="fa-solid fa-cart-plus"></i> 新增商品</a>
            </div>

            <div class="">
                <table id="goodsList" class="display">
                    <thead>
                        <tr>
                          <th>商品名稱</th>
                          <th>商品價格</th>
                          <th>商品數量</th>
                          <th>商品介紹</th>
                          <th>編輯/刪除</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $new)
                          <tr>
                            <td class="fw-bolder">SHF 鋼鐵人</td>
                            <td>2500 元</td>
                            <td>10</td>
                            <td>帥</td>
                            <td>
                                <div class="">
                                    <a href="/goods/edit/" class="me-2 text-white p-1 rounded btn-success"><i class="fa-solid fa-pen-to-square"></i> 編輯</a>
                                    <a href="/goods/delete/" class="ms-2 text-white p-1 rounded btn-danger"><i class="fa-solid fa-trash-can"></i> 刪除</a>
                                </div>
                            </td>
                        </tr>
                          @endforeach
                        <tr>
                            <td class="fw-bolder">SHF 鋼鐵人</td>
                            <td>2500 元</td>
                            <td>10</td>
                            <td>帥</td>
                            <td>
                                <div class="">
                                    <a href="/goods/edit/" class="me-2 text-white p-1 rounded btn-success"><i class="fa-solid fa-pen-to-square"></i> 編輯</a>
                                    <a href="/goods/delete/" class="ms-2 text-white p-1 rounded btn-danger"><i class="fa-solid fa-trash-can"></i> 刪除</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bolder">SHF 美國隊長</td>
                            <td>1800 元</td>
                            <td>15</td>
                            <td>酷</td>
                            <td>
                                <div class="">
                                    <a href="/goods/edit/" class="me-2 text-white p-1 rounded btn-success"><i class="fa-solid fa-pen-to-square"></i> 編輯</a>
                                    <a href="/goods/delete/" class="ms-2 text-white p-1 rounded btn-danger"><i class="fa-solid fa-trash-can"></i> 刪除</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bolder">SHF 雷神索爾</td>
                            <td>2200 元</td>
                            <td>12</td>
                            <td>讚</td>
                            <td>
                                <div class="">
                                    <a href="/goods/edit/" class="me-2 text-white p-1 rounded btn-success"><i class="fa-solid fa-pen-to-square"></i> 編輯</a>
                                    <a href="/goods/delete/" class="ms-2 text-white p-1 rounded btn-danger"><i class="fa-solid fa-trash-can"></i> 刪除</a>
                                </div>
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
            $('#goodsList').DataTable();
        } );
    </script>
@endsection

