@extends('template.template')

@section('title')
    Product-Detail
@endsection

@section('link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    @endsection

@section('css')
<style>
    main {
        background-color: rgb(180, 181, 182);
        height: 850px;
    }
    #product-detail {
        background-color: rgb(243, 242, 242);
        width: 1500px;
        height: 100%;
    }
    .box {
        height: 600px;
    }
    .innerboxTop {
        height: 550px;
    }
    .imgBox {
        height: 550px;
    }
    .imgSwiper {
        height: 500px;
    }
    .review {
        border-right: 1px solid grey;
    }
    #quantity {
        width: 30px;
        text-align: center;
    }
    #min , #add {
        width: 25px;
        text-align: center;
    }
    .imgBtm {
        height: 200px;
    }
    .innerboxBtm {
        height: 50px;
    }
    .innerboxBtm ul li {
        display: inline;
    }
    .innerboxBtm ul {
        padding: unset;
    }
    .innerboxBtm li {
        margin-right: 15px;
    }
    .heartBtm {
        background-color: rgb(255, 158, 190);
    }
/* ------------------------------992---------------------------------- */
    @media(max-width:992px) {
        #product-detail {
            width: 700px;
        }
    }
/* ------------------------------swiper---------------------------------- */
    .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        background-size: cover;
        background-position: center;
      }

      .mySwiper2 {
        height: 80%;
        width: 100%;
      }

      .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
      }

      .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
      }

      .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
@endsection

@section('main')
    <main class="pt-5 pb-5 d-flex justify-content-center">
        <section id="product-detail" class="container-xxl rounded-3 p-5 d-flex flex-column mb-2">
            <h1 class="w-100 mb-3 text-primary fw-bolder">商品資訊</h1>
            <div class="box d-flex flex-column">
                <div class="innerboxTop row d-flex flex-row">
                    <div class="imgBox col-5 d-flex flex-column">
                        <div class="imgSwiper">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{$details->img_path}}">
                                    </div>

                                    @foreach ($details->imgs as $item)

                                    <div class="swiper-slide">
                                        <img src="{{$item->img_path}}">
                                    </div>

                                    @endforeach

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{$details->img_path}}">
                                    </div>

                                    @foreach ($details->imgs as $item)

                                    <div class="swiper-slide">
                                        <img src="{{$item->img_path}}">
                                    </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailBox col-7 d-flex flex-column">
                        <h2 class="fw-bolder mb-1">{{$details->name}}</h2>
                        <div class="d-flex flex-row mb-2">
                            <span class="review text-muted w-25 me-1">尚未有評價</span>
                            <span class="text-muted w-25 d-flex justify-content-center">已售出 0</span>
                        </div>
                        <p class="text-danger fs-4 p-2 bg-white rounded">${{$details->price}}</p>
                        <div class="d-flex flex-row mb-3">
                            <p class="col-lg-3 col-sm-6"><i class="fa-solid fa-circle-info"></i> 商品介紹：</p>
                            <p class="col-lg-3 col-sm-6">{{$details->introduction}}</p>
                        </div>
                        <div class="d-flex flex-row mb-2">
                            <span class="col-lg-3 col-sm-6"><i class="fa-solid fa-money-check-dollar"></i> 付款方式：</span>
                            <span class="col-lg-3 col-sm-6">全家取貨付款</span>
                        </div>
                        <div class="d-flex flex-row mb-2">
                            <span class="col-lg-3 col-sm-6"><i class="fa-solid fa-truck"></i> 運送方式&費用：</span>
                            <span class="col-lg-3 col-sm-6">全家取貨付款 60 元</span>
                        </div>
                        <div class="numBox d-flex flex-row mb-4">
                            <span class="col-lg-3 col-sm-6"><i class="fa-solid fa-arrow-up-9-1"></i>  數量：</span>
                            <div clsss="col-lg-3 col-sm-6">
                                <input id="min" name="" type="button" value="-" />
                                <input id="quantity" name="" type="text" value="1" />
                                <input id="add" name="" type="button" value="+" />
                                <span class="ms-2">還剩 {{$details->quantity}} 件</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <button class="w-50 bg-warning text-danger me-1 p-1 rounded"><i class="text-danger fa-solid fa-cart-plus"></i> 加入購物車</button>
                            <button class="w-50 bg-danger text-light ms-1 p-1 rounded"><i class="text-light fa-solid fa-cash-register"></i> 直接購買</button>
                        </div>
                    </div>
                </div>
                <div class="innerboxBtm d-flex flex-row">
                    <div class="w-50 d-flex">
                        <ul class="">
                            <li>
                                <span class="fs-4">分享 :</span>
                            </li>
                            <li>
                                <a class="fs-4" href=""><i class="fa-brands fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a class="fs-4" href=""><i class="fa-brands fa-instagram-square"></i></i></a>
                            </li>
                            <li>
                                <a class="fs-4" href=""><i class="fa-brands fa-line"></i></a>
                            </li>
                            <li>
                                <a class="fs-4" href=""><i class="fa-brands fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-50 d-flex justify-content-center">
                        <button class="heartBtm rounded w-50"><i class="fa-solid fa-heart"></i> 收藏</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>
    $(function(){
        var t = $("#quantity");
        $("#add").click(function(){
            t.val(parseInt(t.val())+1);
            $("#min").removeAttr("disabled");
            setTotal();
        })
        $("#min").click(function(){
                   if (parseInt(t.val())>1) {
                    t.val(parseInt(t.val())-1)
                    }else{
                    $("#min").attr("disabled","disabled")
                   }
            setTotal();
        })
        function setTotal(){
            $("#total").html((parseInt(t.val())*3.95).toFixed(2));
        }
        setTotal();
        })
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
@endsection
