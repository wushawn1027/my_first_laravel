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
    #qty {
        width: 45px;
        text-align: center;
    }
    /* #minus , #plus{
        width: 18px;
        text-align: center;
    } */
    #add_product {
        border: 2px solid black;
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
            width: 750px;
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
                                <input id="minus" name="" type="button" value="-" />
                                <input id="qty" name="qty" type="number" value="1" />
                                <input id="plus" name="" type="button" value="+" />
                                <span class="">還剩<span class="text-danger fw-bolder">{{$details->quantity}}</span>件</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <a id="add_product" role="button" class="d-flex flex-row justify-content-center align-items-center w-50 bg-danger text-dark me-1 p-1 rounded"><i class="text-dark fa-solid fa-cart-plus"></i> 加入購物車</a role="button">
                            <button onclick="location.href='/'" class="w-50 bg-warning text-dark ms-1 p-1 rounded"><i class="text-dark fa-solid fa-house"></i> 返回首頁</button>
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

    <script>
        const minus = document.querySelector('#minus');
        const qty = document.querySelector('#qty');
        const plus = document.querySelector('#plus');

        minus.onclick = function(){

            if (parseInt(qty.value) >= 2){
                qty.value = parseInt(qty.value) - 1;
            }
        }

        plus.onclick = function(){

            if (parseInt(qty.value) < {!! $details->quantity !!}){
                qty.value = parseInt(qty.value) + 1;
            }
        }


        const add_product = document.querySelector('#add_product');

        add_product.onclick = function(){
            // 在JS建立一個虛擬的form表單
            var formData = new FormData();

            formData.append('add_qty', parseInt(qty.value));
            formData.append('product_id',  {{ $details->id }});
            formData.append('_token',  '{{ csrf_token() }}');

            // 利用fetch將form表單送過去
            fetch('/add_to_cart', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .catch(error => {
                alert('新增失敗, 請再嘗試一次!')
                return 'error';
            })
            .then(response => {
                if (response != 'error'){
                    if (response.result == 'success')
                        alert('新增成功!')
                    else{
                        alert('新增失敗:' + response.message)
                    }
                }
            });
        }

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
