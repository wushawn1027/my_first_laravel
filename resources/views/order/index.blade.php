@extends('layouts.app')

@section('title')
    訂單管理
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
    #order {
        background-color: rgb(243, 242, 242);
        width: 900px;
        height: 100%;
    }
    .tbodyTr {
        height: 100px;
    }
    .btnED {
        width: 100%;
        height: 100%;
    }
    @media(max-width:992px) {
        #order {
            width: 600px;
        }
    }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="order" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <div class="d-flex justify-content-between mb-2">
                <h1 class="w-100 mb-3 text-primary fw-bolder">訂單管理</h1>
            </div>
            <div class="">
                <table id="orderList" class="display">
                    <thead>
                        <tr>
                          <th>訂單編號</th>
                          <th>買家姓名</th>
                          <th>買家信箱</th>
                          <th>總金額</th>
                          <th>訂單狀態</th>
                          <th>編輯</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($datas as $data)
                        <tr class="tbodyTr">
                            <td>{{$data->id}}</td>
                            <td class="fw-bolder">{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->total}}</td>                            <td>{{$data->ps}}</td>
                            <td>
                                @if ($data->status = 1)
                                    未付款
                                @elseif ($data->status = 2)
                                    已付款
                                @elseif ($data->status = 3)
                                    已出貨
                                @elseif ($data->status = 4)
                                    已結單
                                @elseif ($data->status = 5)
                                    已取消
                                @endif
                            </td>
                            <td>
                                <button onclick="location.href='/order/edit/{{$data->id}}'" class="me-2 text-white p-1 rounded btn-success"><i class="fa-solid fa-pen-to-square"></i> 修改訂單狀態</button>
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
            $('#orderList').DataTable();
        } );
    </script>
@endsection

