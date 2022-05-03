<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>


@yield('css')
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

    .container {
        height: 700px;
    }

    /* ------------------------------------nav--------------------------------------- */
    .logo {
        height: 60px;
    }
    nav .container{
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
    /* nav .liLogin:hover .burgerImg {
        display: none!important;
    }
    nav .liLogin:hover .ImgX {
        display: block!important;
    } */
    /* nav #burgerMenuBox button #burgerMenuBoxA {
        text-decoration: none !important;
    } */
    nav ul li {
        list-style: none;
    }

    /* ------------------------------------footer--------------------------------------- */
    #links .container {
        height: 300px;
    }
    #copyright .container {
        height: 50px;
    }
    /* ------------------------------------media--------------------------------------- */
    /* -----------------------------------1300-------------------------------------- */
    @media(max-width:1300px) {
        nav .container{
            width: 90%;
        }
    }
    /* -----------------------------------992-------------------------------------- */
    @media(max-width:992px) {

        #links .container {
            height: 700px;
        }
        #copyright .container {
            height: 100px;
        }
    }
    /* -----------------------------------768-------------------------------------- */
    @media(max-width:768px) {
        nav .container #nav-ul {
            display: none!important;
        }
        nav .burgerImg {
            display: block!important;
        }
        #burger:checked~#burgerMenu {
            display: block!important;
            z-index: 3;
        }
        /* nav .liLogin:hover .burgerImg {
            display: none!important;
        }
        nav .liLogin:hover .ImgX {
            display: block!important;
        } */

        #links .container {
            height: 1200px;
        }
        #links #div-logo2 {
            justify-content: center ;
        }
    }
</style>

<body>
    <!----------------- nav ---------------->
    <nav>
        <div class="container">
            <div class="d-flex">
                <a href="/" class="p-3 me-auto">
                    <img src="{{asset('img/logo.jpg')}}" class="logo" alt="" onerror="errorImg(this)">
                </a>
                <ul id="nav-ul" class="ms-auto d-flex justify-content-end align-items-center p-0 m-0">
                    {{-- <li class="me-5">
                        <a href="/product" class="fs-7 fw-bolder hover:bg-light">商品管理</a>
                    </li>
                    <li class="me-5">
                        <a href="/banner" class="fs-7 fw-bolder">Banner</a>
                    </li> --}}
                    <li class="me-5">
                        <a href="/comment" class="fs-7 fw-bolder">Comment</a>
                    </li>
                    {{-- <li class="me-5">
                        <a href="" class="fs-7 fw-bolder">other</a>
                    </li> --}}
                    <li class="me-3">
                        <a  href="/shoppingS1"><i class="fs-4 fa-solid fa-cart-shopping"></i></a>
                    </li>

                    @auth

                    {{-- 如果是帳號管理者 要顯示後台的連結 --}}
                    @if (Auth::user()->power == 1)
                    <li class="me-3">
                        <a  href="/dashboard" class="fs-7 fw-bolder">後台</a>
                    </li>
                    @endif

                    <li class="liLogin me-3">
                        <a class="">{{Auth::user()->name}}, 您好~</a>
                    </li>
                    <li class="liLogin">
                        <a href="" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</a>
                        <form method="POST" action="{{ route('logout') }}" hidden id="logout_form" >
                            @csrf
                        </form>
                    </li>
                    @endauth

                    @guest
                    <li class="liLogin">
                        <input type="checkbox" id="dropLogin" hidden>
                        <label for="dropLogin"><i class="fs-4 fa-solid fa-circle-user text-black"></i></label></i>
                        <div class="Login p-2 rounded">
                            <a href="/login">Login</a>
                        </div>
                    </li>
                    @endguest
                </ul>
                <input type="checkbox" id="burger" class="" hidden>
                <label for="burger" class="d-flex justify-content-center align-items-center">
                    <div id="" class="">
                        <img src="{{asset('img/burger-menu.png')}}" style="width: 35px; height: 35px;" class="burgerImg" alt="" onerror="errorImg(this)">
                        <img src="{{asset('img/X.png')}}" style="width: 35px; height: 35px;" class="imgX" alt="" onerror="errorImg(this)">
                    </div>
                </label>
                <div id="burgerMenu">
                    <div id="burgerMenuBox" class="w-100 bg-light p-4">
                        <button  class="btn btn-link btn-block border-bottom m-0">
                            <a id="burgerMenuBoxA" href="/product" class="fs-7 fw-bolder">商品管理</a>
                            </button>
                        <button class="btn btn-link btn-block border-bottom m-0">
                            <a id="burgerMenuBoxA" href="/banner" class="fs-7 fw-bolder">Banner</a>
                        </button>
                        <button class="btn btn-link btn-block border-bottom m-0">
                            <a id="burgerMenuBoxA" href="/comment" class="fs-7 fw-bolder">Comment</a>
                        </button>
                        <button class="btn btn-link btn-block border-bottom m-0 mb-3">
                            <a id="burgerMenuBoxA" href="" class="fs-7 fw-bolder">other</a>
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

    @yield('x-slot')

    @yield('main')

    <!------------------ footer ------------------>
    <footer>
        <!------------------ links ------------------>
        <section id="links">
            <div class="container d-flex align-items-center">
                <div class="row w-100 d-flex align-items-center">
                    <div class="col-lg-3 col-md-5 col-sm-12 d-flex flex-column align-items-center">
                        <div id="div-logo2" class="w-100 d-flex xxl:justify-content-start p-1">
                            <img src="{{asset('img/logo2.png')}}" class="" alt="" onerror="errorImg(this)">
                        </div>
                        <p class="fs-6 text-muted d-flex align-items-center">Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12 d-flex flex-row flex-wrap">
                        <div class="d-flex flex-column align-items-center col-lg-3 col-md-6 col-sm-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                        <div class="d-flex flex-column align-items-center col-lg-3 col-md-6 col-sm-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                        <div class="d-flex flex-column align-items-center col-lg-3 col-md-6 col-sm-12 p-4">
                            <p class="text-black">CATEGORIES</p>
                            <p class="text-black">First Link</p>
                            <p class="text-black">Second Link</p>
                            <p class="text-black">Third Link</p>
                            <p class="text-black">Fourth Link</p>
                        </div>
                        <div class="d-flex flex-column align-items-center col-lg-3 col-md-6 col-sm-12 p-4">
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
            <div class="container d-flex align-items-center">
                <div id="copy-row" class="row w-100 d-flex flex-row justify-content-between align-items-center">
                    <div id="" class="d-flex justify-content-center col-lg-5 col-sm-12">
                        <p class="text-muted">© 2020 Tailblocks — </p>
                        <a href="#" class="text-secondary">@knyttneve</a>
                    </div>
                    <div id="copy-social" class="d-flex col-lg-3 col-sm-12 justify-content-center">
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

    @yield('script')

    <script>
        function errorImg(img) {
            img.src = "{{asset('img/ImgError.png')}}";
            img.onerror = null;
        }
    </script>

</body>
</html>
