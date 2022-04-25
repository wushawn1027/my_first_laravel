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
    #product {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    #btnCreate {
        width: 100px;
        height: 100%;
    }
    .tbodyTr {
        height: 100px;
    }
    .productImg {
        width: 100px;
        height: 100px;
    }
    .btnED {
        width: 100%;
        height: 100%;
    }
    @media(max-width:992px) {
        #product {
            width: 600px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="product" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <div class="d-flex justify-content-between mb-2">
                <h1 class="w-100 mb-3 text-primary fw-bolder">商品管理</h1>
                <a id="btnCreate" href="/product/create" class="w-25 btn btn-success"><i class="fa-solid fa-cart-plus"></i> 新增商品</a>
            </div>

            <div class="">
                <table id="productList" class="display">
                    <thead>
                        <tr>
                          <th>商品圖片</th>
                          <th>商品名稱</th>
                          <th>商品價格</th>
                          <th>商品數量</th>
                          <th>商品介紹</th>
                          <th>編輯/刪除</th>
                        </tr>
                      </thead>
                      <tbody>

                          @foreach ($datas as $data)
                          <tr class="tbodyTr">
                            <td>
                                <img src="{{$data->img_path}}" alt="" class="productImg">
                            </td>
                            <td class="fw-bolder">{{$data->name}}</td>
                            <td>{{$data->price}} 元</td>
                            <td>{{$data->quantity}}</td>
                            <td>{{$data->introduction}}</td>
                            <td>
                                <div class="btnED ">
                                    <a href="/product/edit/{{$data->id}}" class="me-2 text-white p-1 rounded btn-success"><i class="fa-solid fa-pen-to-square"></i> 編輯</a>
                                    <a href="/product/delete/{{$data->id}}" class="text-white p-1 rounded btn-danger"><i class="fa-solid fa-trash-can"></i> 刪除</a>
                                </div>
                            </td>
                        </tr>
                          @endforeach

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
            $('#productList').DataTable();
        } );
    </script>
@endsection

