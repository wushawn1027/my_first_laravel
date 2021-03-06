<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>數位方塊Bootstrap作業</title>
</head>
<style>
    * {
         box-sizing: border-box;
    }
    html {
        scroll-behavior: smooth;
    }
    body {
        padding: 0;
        margin: 0;
    }
    a {
        color: black;
        text-decoration: none !important;
    }
    /* ---------------------------------container------------------------------------ */

    .container-xxl {
        height: 700px;
    }
    #banner .container-fluid , #map .container-fluid {
        height: 650px;
    }
    /* ------------------------------------nav--------------------------------------- */
    .logo {
        height: 60px;
    }
    nav .container-xxl{
        width: 80%;
        height: 90px;
        position: relative;
    }
    .liLogin {
        position: relative;
    }
    .Login {
        width: 100px;
        height: 40px;
        position: absolute;
        top: 40px;
        left: -100%;
        transform: translateX(-50%);
        background-color: rgb(243, 242, 242);
        z-index: 4;
        display: none;
        text-align: center;
    }
    #dropLogin:checked~.Login {
        display: block!important;
    }
    nav #burger , nav .burgerImg , nav #burgerMenu , nav .imgX{
        display: none!important;
    }
    nav #burgerMenu {
        width: 100%;
        height: 250px;
        position: absolute;
        top: 90px;
        z-index: 3;
        display: flex;
        justify-content: center;
    }
    nav #burgerMenuBox {
        display: flex;
        flex-direction: column;
    }

    /* nav #burgerMenuBox button #burgerMenuBoxA {
        text-decoration: none !important;
    } */
    nav ul li {
        list-style: none;
    }
    /* ------------------------------------banner--------------------------------------- */
    #banner .container-fluid {
        height: 870px;
    }
    /* ------------------------------------intro--------------------------------------- */
    #intro img {
        width: 80px;
    }
    #intro .btn {
        width: 120px;
    }
    #span-1 {
        width: 80px;
        height: 3px;
        border-radius: 50px;
    }
    /* ------------------------------------special--------------------------------------- */
    #special .container-xxl {
        height: 1000px;
    }
    /* ------------------------------------merch--------------------------------------- */
    #merch .container-xxl {
        height: 750px;
    }
    #merch .stars svg{
            width: 16px;
            height: 16px;
        }
    #merch .ball{
        width: 20px;
        height: 20px;
    }
    /* ------------------------------------map--------------------------------------- */
    #map .container-fluid {
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
    /* ------------------------------------footer--------------------------------------- */
    #links .container-xxl {
        height: 300px;
    }
    #copyright .container-xxl {
        height: 50px;
    }
    /* ------------------------------------media--------------------------------------- */
    /* -----------------------------------1300-------------------------------------- */
    @media(max-width:1300px) {
        nav .container-xxl{
            width: 90%;
        }
    }
    /* -----------------------------------1200-------------------------------------- */
    @media(max-width:1200px) {
        #gallery .container-xxl {
            height: 500px;
        }
        #card-1 .container-xxl {
            height: 1200px;
        }
    }
    /* -----------------------------------992-------------------------------------- */
    @media(max-width:992px) {
        #gallery .container-xxl {
            height: 400px;
        }
        #card-2 .container-xxl {
            height: 1800px;
        }
        #merch .container-xxl {
        height: 1000px;
        }
        #merch #img-400-400 {
            height: 100%;
        }
        #merch .sm-height {
        height: 256px !important;
        }
        #links .container-xxl {
            height: 700px;
        }
        #copyright .container-xxl {
            height: 100px;
        }
    }
    /* -----------------------------------768-------------------------------------- */
    @media(max-width:768px) {
        nav .container-xxl #nav-ul {
            display: none!important;
        }
        nav .burgerImg {
            display: block!important;
        }
        #burger:checked~#burgerMenu {
            display: block!important;
            z-index: 3;
        }
        /* #burger:focus .burgerImg {
            display: none!important;
        }
        #burger:focus .ImgX {
            display: block!important;
        } */

        #banner .container-fluid {
            width: 100%;
            height: 530px;
        }

        #intro .container-xxl {
            height: 1100px;
        }

        #gallery .container-xxl {
            height: 300px;
        }

        #card-1 .container-xxl {
            height: 2100px;
        }

        #card-2 .container-xxl {
            height: 4400px;
        }

        #special .container-xxl {
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

        #merch .container-xxl {
            height: 500px;
        }

        #map #map-text {
            width: 80%;
            height: 75%;
            left: 50%;
            top: 50%;
            transform: translate(-50% , -50%);
        }

        #links .container-xxl {
            height: 1200px;
        }
        #links #div-logo2 {
            justify-content: center ;
        }
    }
    /* -----------------------------------650-------------------------------------- */
    @media(max-width:650px) {
        #intro .container-xxl {
            height: 1300px;
        }
        #intro .container-xxl {
            height: 1300px;
        }
        #merch .container-xxl {
            height: 300px;
        }
    }
</style>
{{-- @foreach ($data2 as $news)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="d-flex justify-content-center mb-4">
                            @if ($news->img == "" || $news->img == null)
                                <div class="d-flex justify-content-center mb-4">
                                    <div class="imgNull">{{mb_substr($news->title,0,1,"utf-8")}}</div>
                                </div>
                            @else
                                <img src="{{$news->img}}" alt="">
                            @endif
                            </div>
                            <p class="h5 text-center">{{$news->title}}</p>
                            <p class="fs-7 text-center text-secondary">{{$news->content}}</p>
                            <p class="fs-7 text-center text-primary">Learn More
                                <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                            </p>
                        </div>
                    </div>
                    @endforeach --}}
<body>
    <!----------------- nav ---------------->
    <nav>
        <div class="container-xxl">
            <div class="d-flex">
                <a href="/bootstrap" class="p-3 me-auto">
                    <img src="{{asset('img/logo.jpg')}}" class="logo" alt="">
                </a>
                <ul id="nav-ul" class="d-flex justify-content-end align-items-center p-0 m-0">
                    <li class="me-5">
                        <a href="" class="fs-7 fw-bolder hover:bg-light">Blog</a>
                    </li>
                    <li class="me-5">
                        <a href="" class="fs-7 fw-bolder">Portfolio</a>
                    </li>
                    <li class="me-5">
                        <a href="" class="fs-7 fw-bolder">About</a>
                    </li>
                    <li class="me-5">
                        <a href="" class="fs-7 fw-bolder">Contact</a>
                    </li>
                    <li class="me-3">
                        <a  href="/shoppingS1"><i class="fs-4 fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="liLogin">
                        <input type="checkbox" id="dropLogin" hidden>
                        <label for="dropLogin"><i class="fs-4 fa-solid fa-circle-user text-black"></i></label></i>
                        <div class="Login p-2 rounded">
                            <a href="/login">Login</a>
                        </div>
                    </li>

                </ul>
                <input type="checkbox" id="burger" class="" hidden>
                <label for="burger" class="d-flex justify-content-center align-items-center">
                    <div id="" class="">
                        <img src="{{asset('img/burger-menu.png')}}" style="width: 35px; height: 35px;" class="burgerImg" alt="">
                        <img src="{{asset('img/X.png')}}" style="width: 35px; height: 35px;" class="imgX" alt="">
                    </div>
                </label>
                <div id="burgerMenu">
                    <div id="burgerMenuBox" class="bg-light shadow-3 p-4">
                        <button  class="btn btn-link btn-block border-bottom m-0">
                            <a id="burgerMenuBoxA" href="" class="fs-7 fw-bolder">Blog</a>
                            </button>
                        <button class="btn btn-link btn-block border-bottom m-0">
                            <a id="burgerMenuBoxA" href="" class="fs-7 fw-bolder">Portfolio</a>
                        </button>
                        <button class="btn btn-link btn-block border-bottom m-0">
                            <a id="burgerMenuBoxA" href="" class="fs-7 fw-bolder">About</a>
                        </button>
                        <button class="btn btn-link btn-block border-bottom m-0 mb-3">
                            <a id="burgerMenuBoxA" href="" class="fs-7 fw-bolder">Contact</a>
                        </button>
                        <div class="w-100 d-flex justify-content-center align-items-center m-0">
                            <a href="/shoppingS1"><i class="fs-4 fa-solid fa-cart-shopping"></i></a>
                            <a href="/login"><i class="fs-4 fa-solid fa-circle-user text-black ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <!------------------ banner ------------------>
        <section id="banner">
            <div class="container-fluid p-0">
                <div class="banner w-100 h-100">
                    <div class="swiper mySwiper w-100 h-100">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="{{asset('img/gray-0.png')}}" class="w-100 h-100" alt="">
                          </div>
                          <div class="swiper-slide">
                            <img src="{{asset('img/gray-1.png')}}" class="w-100 h-100" alt="">
                          </div>
                          <div class="swiper-slide">
                            <img src="{{asset('img/gray-0.png')}}" class="w-100 h-100" alt="">
                          </div>
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
            <div class="container-xxl container-xl container-lg container-md p-2">
                <div class="row p-5 d-flex justify-content-center">
                        <p class="h2 text-center mb-4">Raw Denim Heirloom Man Braid</p>
                        <p id="intro-con-row-p2" class="col-8 fs-7 text-center text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
                        <div class="mt-2 d-flex justify-content-center">
                            <span id="span-1" class="mt-1 bg-primary"></span>
                        </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{asset('img/wave.png')}}" alt="">
                        </div>
                        <p class="h5 text-center">Shooting Stars</p>
                        <p class="fs-7 text-center text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                        <p class="fs-7 text-center text-primary">Learn More
                            <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{asset('img/scisser.png')}}" alt="">
                        </div>
                        <p class="h5 text-center">The Catalyzer</p>
                        <p class="fs-7 text-center text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                        <p class="fs-7 text-center text-primary">Learn More
                            <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{asset('img/user-1.png')}}" alt="">
                        </div>
                        <p class="h5 text-center">Neptune</p>
                        <p class="fs-7 text-center text-secondary">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                        <p class="fs-7 text-center text-primary">Learn More
                            <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-primary btn-lg fs-6">Button</button>
                </div>
            </div>
        </section>
        <!------------------ gallery ------------------>
        <section id="gallery" class="d-flex justify-content-center align-items-center">
            <div class="container-xxl container-xl container-lg container-md container-sm">
                <div class="row mb-4">
                    <h2 class="col-xxl-5 col-md-12">Master Cleanse Reliac Heirloom</h2>
                    <p class="col-xxl-7 col-md-12 fs-7 text-secondary">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
                </div>
                <div id="gallery-box" class="row w-100 d-flex">
                    <div class="w-50 p-0 d-flex flex-wrap flex-row">
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/500-300.png')}}" class="w-100" alt="">
                        </div>
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/501-301.png')}}" class="w-100" alt="">
                        </div>
                        <div class="md:p-2 p-1 w-100">
                            <img src="{{asset('img/600-360.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="w-50 p-0 d-flex flex-wrap flex-row">
                        <div class="md:p-2 p-1 w-100">
                            <img src="{{asset('img/601-361.png')}}" class="w-100" alt="">
                        </div>
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/503-303.png')}}" class="w-100" alt="">
                        </div>
                        <div class="md:p-2 p-1 w-50">
                            <img src="{{asset('img/502-302.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ pricing ------------------>
        <section id="pricing">
            <div class="container-xxl container-xl container-lg container-md d-flex justify-content-center align-items-center">
                <div class="row w-75 d-flex flex-column align-items-center">
                    <h2 class="col text-center">Pricing</h2>
                    <p class="col text-center text-secondary">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
                    <div class="mt-5">
                        <table class="table">
                            <thead class="thead">
                            <tr class="table-light">
                                <th scope="col" class="text-secondary">Plan</th>
                                <th scope="col" class="text-secondary">Speed</th>
                                <th scope="col" class="text-secondary">Storage</th>
                                <th scope="col" class="text-secondary">Price</th>
                                <th scope="col" class="text-secondary"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="text-secondary">Start</th>
                                <td class="text-secondary">5 Mb/s</td>
                                <td class="text-secondary">15 GB</td>
                                <td class="fw-bolder">Free</td>
                                <td><input class="float-end" type="radio" name="A" value="1"></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Pro</th>
                                <td class="text-secondary">25 Mb/s</td>
                                <td class="text-secondary">25 GB</td>
                                <td class="fw-bolder">$24</td>
                                <td><input class="float-end" type="radio" name="A" value="1"></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Business</th>
                                <td class="text-secondary">36 Mb/s</td>
                                <td class="text-secondary">40 GB</td>
                                <td class="fw-bolder">$50</td>
                                <td><input class="float-end" type="radio" name="A" value="1"></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Exclusive</th>
                                <td class="text-secondary">48 Mb/s</td>
                                <td class="text-secondary">120 GB</td>
                                <td class="fw-bolder">$72</td>
                                <td><input class="float-end" type="radio" name="A" value="1"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-7 text-primary">Learn More
                            <a href=""><i class="fa-solid fa-arrow-right text-primary"></i></a>
                        </p>
                        <div class="">
                            <button type="button" class="btn btn-primary btn-lg fs-6">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ card-1 ------------------>
        <section id="card-1">
            <div class="container-xxl container-xl container-lg container-md container-sm">
                <div class="row mb-4">
                    <h2 class="col-xxl-5 col-xl-5 col-lg-5 d-flex flex-column">Pitchfork Kickstarter Taxidermy
                        <span id="span-1" class="mt-2 bg-primary"></span>
                    </h2>
                    <p class="col-xxl-7 col-xl-7 col-lg-7 fs-7 text-secondary">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/720-400.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">Chichen Itza</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/721-401.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">Colosseum Roma</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/722-402.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-primary">SUBTITLE</p>
                              <h5 class="card-title">Great Pyramid of Giza</h5>
                              <p class="card-text text-secondary">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-4 bg-light border-0">
                            <img src="{{asset('img/723-403.png')}}" class="card-img-top" alt="">
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
            <div class="container-xxl container-xl container-lg container-md container-sm d-flex justify-content-center align-items-center">
                <div class="row w-75 d-flex flex-column justify-content-center">
                    <div id="spe-div1" class="col p-3 d-flex border-bottom">
                        <div class="d-flex justify-content-center m-4">
                            <img src="{{asset('img/wave.png')}}" class="" alt="">
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
                            <img src="{{asset('img/scisser.png')}}" alt="">
                        </div>
                    </div>
                    <div id="spe-div1" class="col p-3 d-flex ">
                        <div class="d-flex justify-content-center m-4">
                            <img src="{{asset('img/user-1.png')}}" alt="">
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
                        <div class="col-1 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg fs-6">Button</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!------------------ merch ------------------>
        <section id="merch">
            <div class="container-xxl container-xl container-lg container-md">
                <div class="row d-flex flex-column flex-lg-row">
                    <div class="col-12 col-lg-6 h-auto sm-height">
                        <img src="{{asset('img/400-400.png')}}" id="img-400-400" class="merch-img w-100 h-100 rounded " alt="">
                    </div>
                    <div class="col-12 col-lg-6 pt-4 pb-4 pe-0 ps-5">
                        <p class="text-secondary">BRAND NAME</p>
                        <h2 class="">The Catcher in the Rye</h2>
                        <div class="d-flex">
                            <div class="d-flex border-end">
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
                            <div class="mx-lg-2">
                                <i class="fa-brands fa-facebook-f text-secondary"></i>
                                <i class="fa-brands fa-twitter text-secondary"></i>
                                <i class="fa-solid fa-comment text-secondary"></i>
                            </div>
                        </div>
                        <p class="text-secondary">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
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
                            <p class="fs-4">$58.00</p>
                            <div class="d-flex p-2 align-items-center">
                                <button type="button" class="btn btn-primary btn-lg fs-6 m-2">Button</button>
                                <button class="rounded-circle h-50 bg-gray-200 p-3 border-0 d-flex align-items-center justify-content-center text-secondary">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ card-2 ------------------>
        <section id="card-2">
            <div class="container-xxl container-xl container-lg container-md d-flex justify-content-center align-items-center">
                <div class="row d-flex flex-wrap justify-content-center">
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/420-260.png')}}" class="card-img-top md:h-50" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">The Catalyzer</h5>
                              <p class="card-text text-secondary">$16.00</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/421-261.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">Shooting Stars</h5>
                              <p class="card-text text-secondary">$21.15</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/422-262.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">Neptune</h5>
                              <p class="card-text text-secondary">$12.00</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/423-263.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">The 400 Blows<h5>
                              <p class="card-text text-secondary">$18.40</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/424-264.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">The Catalyzer</h5>
                              <p class="card-text text-secondary">$16.00</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/425-265.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">Shooting Stars</h5>
                              <p class="card-text text-secondary">$21.15</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/427-267.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-9 text-secondary">CATEGORY</p>
                              <h5 class="card-title">Neptune</h5>
                              <p class="card-text text-secondary">$12.00</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg- p-1">
                        <div class="card p-3 border-0">
                            <img src="{{asset('img/428-268.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                              <p class="fs-6 text-secondary">CATEGORY</p>
                              <h5 class="card-title">The 400 Blows<h5>
                              <p class="card-text text-secondary">$18.40</p>
                            </div>
                        </div>
                    </div>
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
                            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                        <button type="button" class="btn w-100 btn-primary mb-2">button</button>
                        <small id="" class="form-text text-muted">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</small>
                      </form>
                </div>
            </div>
        </section>

    </main>
    <!------------------ footer ------------------>
    <footer>
        <!------------------ links ------------------>
        <section id="links">
            <div class="container-xxl container-xl container-lg container-md d-flex align-items-center">
                <div class="row w-100 d-flex align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-12 d-flex flex-column align-items-center">
                        <div id="div-logo2" class="w-100 d-flex xxl:justify-content-start p-1">
                            <img src="{{asset('img/logo2.png')}}" class="" alt="">
                        </div>
                        <p class="fs-6 text-muted d-flex align-items-center">Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-12 d-flex flex-row flex-wrap">
                        <div class="d-flex flex-column align-items-center col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                        <div class="d-flex flex-column align-items-center col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                        <div class="d-flex flex-column align-items-center col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                        <div class="d-flex flex-column align-items-center col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ copyright ------------------>
        <section id="copyright" class="bg-light">
            <div class="container-xxl container-xl container-lg container-md container-sm d-flex align-items-center">
                <div id="copy-row" class="row w-100 d-flex flex-row justify-content-between align-items-center">
                    <div id="" class="d-flex justify-content-center col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <p class="text-muted">© 2020 Tailblocks — </p>
                        <a href="#" class="text-secondary">@knyttneve</a>
                    </div>
                    <div id="copy-social" class="d-flex col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 justify-content-center">
                        <i class="p-2 fs-5 text-secondary fa-brands fa-facebook-f"></i>
                        <i class="p-2 fs-5 text-secondary fa-brands fa-twitter"></i>
                        <i class="p-2 fs-5 text-secondary fa-brands fa-instagram"></i>
                        <i class="p-2 fs-5 text-secondary fa-brands fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </section>

    </footer>




<!------------------ script ------------------>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>

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
</body>
</html>
