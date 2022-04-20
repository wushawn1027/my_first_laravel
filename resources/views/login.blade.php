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
    <title>Login</title>
    <style>
        #login {
            height: 100vh;
            position: relative;
        }
        .text {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 0px 96px;
        }
        .text h1 {
            font-size: 3rem;
        }
        .icon {
            position: absolute;
            bottom: 10px;
            left: 25%;
            transform: translateX(-50%);
        }
        @media (max-width:992px)  {
            .text {
                display: none !important;
            }
            .icon {
                position: static;
                position: absolute;
                bottom: 80px;
                left: 50%;
                transform: translateX(-50%);
            }
            #form {
                width: 100% !important;
                background-color: rgba(0, 0, 0, 0.5) !important;
            }
        }
        #login-way {
            width: 30px;
            height: 30px;
            border: 1px solid white;
            border-radius: 50%;
            padding: 2px;
        }
        #emailHelp a{
            text-decoration: none;
        }
        #btn-signin {
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <main>
        <section id="login" class="w-100 d-flex" style="background-image: url(/img/1920x1080.png);">
            <div class="text w-50 h-100 d-flex flex-column align-items-center justify-content-center">
                    <h1 class="w-100 text-start text-white fw-bolder">Keep it special</h1>
                    <p class="w-100 text-start text-white fs-3 fw-bolder">Capture your personal memory in unique way, anywhere.</p>
            </div>
            <div class="icon">
                <i class="p-2 fs-3 text-white fa-brands fa-twitter"></i>
                <i class="p-2 fs-3 text-white fa-brands fa-facebook-f"></i>
                <i class="p-2 fs-3 text-white fa-brands fa-instagram"></i>
            </div>
            <div id="form" class="w-50 h-100 d-flex flex-column align-items-center justify-content-center" style="background-color: #162446;">
                <div class="w-50 d-flex justify-content-center mb-5">
                    <div class="d-flex justify-content-center me-2">
                        <img src="{{asset('img/rick-roll.gif')}}" width="65" height="65" alt="" onerror="errorImg(this)">
                    </div>
                    <h1 class="text-white d-flex align-items-center">數位方塊</h1>
                </div>
                <div class="d-flex mb-4">
                    <div id="login-way" class="text-white text-center me-2">f</div>
                    <div id="login-way" class="text-white text-center me-2">G+</div>
                    <div id="login-way" class="text-white text-center me-2">in</div>
                </div>
                <form class="w-50 d-flex flex-column align-items-center">
                    <span class="text-white mb-3">or use email your account</span>
                    <div class="form-group w-100">
                        <input type="email" id="form-email" class="p-3 form-control bg-black border-0 mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group w-100">
                        <input type="password" id="form-password" class="p-3 form-control bg-black border-0 mb-3" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <small id="emailHelp" class="w-100 form-text mb-3"><a href="" class="float-end text-secondary">Forgot your password?</a></small>
                    <button id="btn-signin" type="submit" class="btn btn-primary w-100 p-3">SIGN IN</button>
                    </form>
            </div>
        </section>
    </main>
    <!------------------ script ------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>

</body>
</html>