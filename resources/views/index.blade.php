@extends('template.template')

    @section('link')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    @endsection


    @section('title')
    數位方塊Bootstrap作業
    @endsection

    @section('css')
    <style>

    /* ------------------------------------banner--------------------------------------- */
    #banner .container-fluid {
        height: 870px;
    }
    /* ------------------------------------intro--------------------------------------- */
    #intro img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
    .imgNull {
        width: 80px;
        height: 80px;
        background-color:lightgoldenrodyellow;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        font-weight: bolder;
    }
    #intro .btn {
        width: 120px;
    }
    #span-1 {
        width: 80px;
        height: 3px;
        border-radius: 50px;
    }
    /* ------------------------------------gallery--------------------------------------- */
    #gallery .container {
        height: 800px;
    }
    #gallery #smallImg {
        height: 188px;
    }
    #gallery #bigImg {
        height: 382px;
    }
    /* ------------------------------------special--------------------------------------- */
    #special .container {
        height: 1000px;
    }
    #special img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
     }
    /* ------------------------------------merch--------------------------------------- */
    #merch .container {
        height: 750px!important;
    }
    #merch .swiper-slide img {
        width: 100%;
        height: 488px!important;
    }
    #merch .stars svg {
        width: 16px;
        height: 16px;
    }
    #merch .ball {
        width: 20px;
        height: 20px;
    }
    /* ------------------------------------card-2--------------------------------------- */
    #card-2 .container {
        height: 800px!important;
    }
    #card-2 #card2Img {
        width: 100%;
        height: 160px;
    }
    /* ------------------------------------map--------------------------------------- */
    #map .container-fluid {
        height: 650px;
        position: relative;
    }
    #map #map-text {
        width: 30%;
        z-index: 3;
        position: absolute;
        left: 90%;
        top: 50%;
        transform: translate(-90% , -50%);
    }
    /* -----------------------------------1400-------------------------------------- */
    @media(max-width:1400px) {
        #gallery #smallImg {
            height: 162px;
        }
        #gallery #bigImg {
            height: 328px;
        }
    }
    /* -----------------------------------1200-------------------------------------- */
    @media(max-width:1200px) {
        #gallery .container {
            height: 500px;
        }
        #gallery #smallImg {
            height: 135px;
        }
        #gallery #bigImg {
            height: 275px;
        }

        #card-1 .container {
            height: 1200px;
        }
    }
    /* -----------------------------------992-------------------------------------- */
    @media(max-width:992px) {
        #gallery .container {
            height: 400px;
        }
        #gallery #smallImg {
            height: 98px;
        }
        #gallery #bigImg {
            height: 202px;
        }

        #card-2 .container {
            height: 1800px !important;
        }
        #merch .container {
            height: 1000px;
        }
        #merch .swiper-slide {
            height: 256px !important;
        }
        #merch .swiper-slide img {
            width: 100%;
            height: auto !important;
        }
        #merch .sm-height {
            height: 256px !important;
        }
    }
    /* -----------------------------------768-------------------------------------- */
    @media(max-width:768px) {
        #banner .container-fluid {
            width: 100%;
            height: 530px;
        }

        #intro .container {
            height: 1300px;
        }

        #gallery .container {
            height: 400px;
        }
        #gallery #smallImg {
            height: 72px;
        }
        #gallery #bigImg {
            height: 150px;
        }

        #card-1 .container {
            height: 2100px;
        }

        #special .container {
            height: 1400px;
        }
        #special #spe-div1 , #special #spe-div2 {
            flex-wrap: wrap ;
            justify-content: center;
        }
        #special #spe-div2 {
            flex-wrap: wrap-reverse;
        }
        #special p {
            text-align: center;
        }

        #merch .container {
            height: 500px !important;
        }

        #card-2 .container {
            height: 3600px !important;
        }
        #card-2 .container .card2ImgBox {
            height: 160px !important;
        }
        #card-2 #card2Img {
            height: 100% !important;
        }

        #map #map-text {
            width: 80%;
            height: 75%;
            left: 50%;
            top: 50%;
            transform: translate(-50% , -50%);
        }
    }

    /* -----------------------------------650-------------------------------------- */
    @media(max-width:650px) {
        #intro .container {
            height: 1300px;
        }
        #merch .container {
            height: 300px;
        }
    }
    /* -----------------------------------576-------------------------------------- */
    @media(max-width:576px) {
        #gallery #smallImg {
            height: 72px;
        }
        #gallery #bigImg {
            height: 150px;
        }
    }
    </style>
@endsection

@section('main')
    <main>
        <!------------------ banner ------------------>
        <section id="banner">
            <div class="container-fluid p-0">
                <div class="banner w-100 h-100">
                    <div class="swiper mySwiper w-100 h-100">
                        <div class="swiper-wrapper">

                            @foreach ($banners as $banner)
                            <div class="swiper-slide">
                                <img src="{{$banner->img_path}}" class="w-100 h-100" alt="" onerror="errorImg(this)">
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ intro ------------------>
        <section id="intro">
            <div class="container p-2">
                <div class="row p-5 d-flex justify-content-center">
                        <p class="h1 text-center mb-4 fw-bolder">留言區</p>
                        <p id="intro-con-row-p2" class="col-8 fs-7 text-center text-secondary">歡迎大家一起來討論與交流~~~</p>
                        <div class="mt-2 d-flex justify-content-center">
                            <span id="span-1" class="mt-1 bg-primary"></span>
                        </div>
                </div>
                <div class="row">

                    @foreach ($comments as $comment)
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center mb-4">
                        @if ($comment->img == "" || $comment->img == null)
                            <div class="imgNull">{{ mb_substr($comment->title,0,1,"utf-8")}}</div>
                        @else
                            <img src="{{$comment->img}}" alt="">
                        @endif
                        </div>
                        <p class="h3 text-center">{{$comment->title}}</p>
                        <p class="fs-6 text-center text-secondary">{{$comment->name}}</p>
                        <p class="fs-5 text-center text-secondary">{{$comment->content}}</p>
                        @auth
                        @if (Auth::user()->power == 1)
                        <p class="fs-6 text-center text-primary">編輯留言
                            <a href="/comment/edit/{{$comment->id}}"><i class="fa-solid fa-arrow-right text-primary"></i></a>
                        </p>
                        @endif
                        @endauth
                    </div>
                    @endforeach

                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-primary btn-lg fs-6"><a class="text-light" href="/comment">留言區</a></button>
                </div>
            </div>
        </section>
        <!------------------ gallery ------------------>
        <section id="gallery" class="d-flex justify-content-center align-items-center">
            <div class="container d-flex flex-column align-items-center">
                <div class="row mb-4">
                    <h2 class="col-5 col-md-12">Master Cleanse Reliac Heirloom</h2>
                    <p class="col-7 col-md-12 fs-7 text-secondary">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
                </div>
                <div id="gallery-box" class="row w-100 d-flex">
                    <div class="w-50 p-0 d-flex flex-wrap flex-row">
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/500-300.png')}}" class="w-100" id="smallImg" alt="" onerror="errorImg(this)">
                        </div>
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/501-301.png')}}" class="w-100" id="smallImg" alt="" onerror="errorImg(this)">
                        </div>
                        <div class="md:p-2 p-1 w-100">
                            <img src="{{asset('img/600-360.png')}}" class="w-100" id="bigImg" alt="" onerror="errorImg(this)">
                        </div>
                    </div>
                    <div class="w-50 p-0 d-flex flex-wrap flex-row">
                        <div class="md:p-2 p-1 w-100">
                            <img src="{{asset('img/601-361.png')}}" class="w-100" id="bigImg" alt="" onerror="errorImg(this)">
                        </div>
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/503-303.png')}}" class="w-100" id="smallImg" alt="" onerror="errorImg(this)">
                        </div>
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/502-302.png')}}" class="w-100" id="smallImg" alt="" onerror="errorImg(this)">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ pricing ------------------>
        <section id="pricing">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row w-75 d-flex flex-column align-items-center">
                    <h1 class="col text-center fw-bolder">訂單列表</h1>
                    <p class="col text-center text-secondary">檢視最新的 5 張訂單的簡單資訊</p>
                    <div class="mt-5">
                        <table class="table">
                            <thead class="thead">
                            <tr class="table-light">
                                <th scope="col" class="text-secondary">訂單編號</th>
                                <th scope="col" class="text-secondary">購買人</th>
                                <th scope="col" class="text-secondary">總金額</th>
                                <th scope="col" class="text-secondary">訂單狀態</th>
                                <th scope="col" class="text-secondary">明細</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <th scope="row" class="text-dark">{{$order->id}}</th>
                                    <td class="text-secondary fw-bolder">{{$order->name}}</td>
                                    <td class="text-secondary">${{$order->total}}</td>
                                    <td class="fw-bolder text-danger">
                                        @if ($order->status == 1)
                                            未付款
                                        @elseif ($order->status == 2)
                                            已付款
                                        @elseif ($order->status == 3)
                                            已出貨
                                        @elseif ($order->status == 4)
                                            已結單
                                        @elseif ($order->status == 5)
                                            已取消
                                        @endif
                                    </td>
                                    <td><a role="button" class="text-light bg-primary" href="/order_list/{{$order->id}}">明細查詢</a></td>
                                    {{-- <td class=""><input class="float-end" type="radio" name="A" value="1"></td> --}}
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-7 text-primary">所有訂單
                            <a href="/order_list"><i class="fa-solid fa-arrow-right text-primary"></i></a>
                        </p>
                        <div class="">
                            <button type="button" class="btn btn-primary btn-lg fs-6">下一步</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ card-1 ------------------>
        <section id="card-1">
            <div class="container">
                <div class="row mb-4">
                    <h2 class="col-5 col-xl-5 col-lg-5 d-flex flex-column">Pitchfork Kickstarter Taxidermy
                        <span id="span-1" class="mt-2 bg-primary"></span>
                    </h2>
                    <p class="col-7 col-xl-7 col-lg-7 fs-7 text-secondary">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/720-400.png')}}" class="card-img-top" alt="" onerror="errorImg(this)">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">Chichen Itza</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/721-401.png')}}" class="card-img-top" alt="" onerror="errorImg(this)">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">Colosseum Roma</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/722-402.png')}}" class="card-img-top" alt="" onerror="errorImg(this)">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">Great Pyramid of Giza</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/723-403.png')}}" class="card-img-top" alt="" onerror="errorImg(this)">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">San Francisco</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ special ------------------>
        <section id="special">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row w-75 d-flex flex-column justify-content-center align-items-center">
                    <div id="spe-div1" class="col p-3 d-flex border-bottom">
                        <div class="d-flex justify-content-center m-4">
                            <img src="{{asset('img/wave.png')}}" class="imgCircle" alt="" onerror="errorImg(this)">
                        </div>
                        <div class="">
                            <p class="h5 ">Shooting Stars</p>
                            <p class="fs-7 text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                            <p class="fs-7 text-primary">Learn More
                                <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                            </p>
                        </div>
                    </div>
                    <div id="spe-div2" class="col p-3 d-flex border-bottom">
                        <div class="">
                            <p class="h5 ">The Catalyzer</p>
                            <p class="fs-7 text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                            <p class="fs-7 text-primary">Learn More
                                <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                            </p>
                        </div>
                        <div class="d-flex justify-content-center m-4">
                            <img src="{{asset('img/scisser.png')}}" class="imgCircle" alt="" onerror="errorImg(this)">
                        </div>
                    </div>
                    <div id="spe-div1" class="col p-3 d-flex ">
                        <div class="d-flex justify-content-center m-4">
                            <img src="{{asset('img/user-1.png')}}" class="imgCircle" alt="" onerror="errorImg(this)">
                        </div>
                        <div class="">
                            <p class="h5 ">Neptune</p>
                            <p class="fs-7 text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                            <p class="fs-7 text-primary">Learn More
                                <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-2">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary fs-6">Button</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!------------------ merch ------------------>
        <section id="merch">
            <div class="container">
                <div class="row d-flex flex-column flex-lg-row">
                    @foreach ($merchs as $merch)

                    <div class="swiper mySwiper col-12 col-lg-6 h-auto sm-height">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img src="{{$merch->img_path}}" class="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/rick-roll.gif" class="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/cat1.png" class="" alt="">
                            </div>
                            {{-- @foreach ($merchs->imgs as $merch)
                            <div class="swiper-slide">
                              <img src="{{$merch->img_path}}" class="" alt="">
                            </div>
                            @endforeach --}}

                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-12 col-lg-6 pt-4 pb-4 pe-0 ps-5">
                        <h2 class="">{{$merch->name}}</h2>
                        <p class="text-secondary">商品數量:{{$merch->quantity}}</p>
                        <div class="d-flex">
                            <div class="d-flex border-end pe-1">
                                <div class="stars">
                                    <svg fill="#0d6efd" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="#0d6efd" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="#0d6efd" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="#0d6efd" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                </div>
                                <p class="text-secondary border-right border-secondary mx-lg-2">4 Reviews</p>
                            </div>
                            <div class="mx-lg-2 ms-1">
                                <i class="fa-brands fa-facebook-f text-secondary"></i>
                                <i class="fa-brands fa-twitter text-secondary"></i>
                                <i class="fa-solid fa-comment text-secondary"></i>
                            </div>
                        </div>
                        <p class="text-secondary">{{$merch->introduction}}</p>
                        <div class="d-flex border-bottom">
                            <div class="d-flex align-items-center text-secondary">
                                <span class="m-xl-2">Color</span>
                                <button class="rounded-circle ball me-3 border-2 border-gray-300 focus:outline-none"></button>
                                <button class="rounded-circle ball me-3 border-2 border-gray-300 bg-black focus:outline-none"></button>
                                <button class="rounded-circle ball me-3 border-2 border-gray-300 bg-primary focus:outline-none"></button>
                            </div>
                            <div class="text-secondary pb-1 ">
                                <span class="m-xl-4">Size</span>
                                <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                    <option>SM</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2 d-flex justify-content-between align-items-center">
                            <p class="fs-4">{{$merch->price}} 元</p>
                            <div class="d-flex p-2 align-items-center">
                                <button type="button" class="btn btn-primary btn-lg fs-6 m-2"><a class="text-light" href="/detail/{{$merch->id}}">商品內頁</a></button>
                                <button class="rounded-circle h-50 bg-gray-200 p-3 border-0 d-flex align-items-center justify-content-center text-secondary">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!------------------ card-2 ------------------>
        <section id="card-2">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row d-flex flex-wrap justify-content-center">

                    @foreach ($cards as $card)

                    <div class="col-sm-10 col-md-6 col-lg-3 p-1">
                        <a href="/detail/{{$card->id}}">
                            <div class="card p-3 border-0">
                                <div class="card2ImgBox">
                                    <img src="{{$card->img_path}}" id="card2Img" class="card-img-top " alt="" onerror="errorImg(this)">
                                </div>
                                <div class="card-body">
                                <p class="fs-9 text-secondary">商品數量:{{$card->quantity}}</p>
                                <h5 class="card-title">{{$card->name}}</h5>
                                <p class="card-text text-secondary">{{$card->introduction}}</p>
                                <p class="card-text text-secondary">{{$card->price}} 元</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
            </div>
        </section>
        <!------------------ map ------------------>
        <section id="map">
            <div class="container-fluid">
                <div class="banner w-100 h-100">
                    <div class="embed-responsive w-100 h-100">
                        <iframe style="filter: grayscale(1) opacity(0.4);" class="embed-responsive-item w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.3725323144845!2d120.67313731482287!3d24.123551984406777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693cfcecffe9d9%3A0xe28afadc0dad203a!2z5ZyL56uL5Lit6IiI5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1649596932208!5m2!1szh-TW!2stw"></iframe>
                    </div>
                </div>
                <div id="map-text" class="row p-3 bg-white rounded">
                    <form>
                        <div class="form-group mb-2">
                          <h5 class="mb-2">Feedback</h5>
                          <p class="mb-5 text-secondary">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                          <label class="text-secondary mb-2" for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control mb-2" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group mb-2">
                            <label class="text-secondary mb-2" for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" style="resize:none;width:100%;height:100px;"></textarea>
                        </div>
                        <button type="button" class="btn w-100 btn-primary mb-2">button</button>
                        <small id="" class="form-text text-muted">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</small>
                      </form>
                </div>
            </div>
        </section>
    </main>
@endsection



<!------------------ script ------------------>
@section('script')

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            pagination: {
            el: ".swiper-pagination",
            },
        });
    </script>

@endsection

