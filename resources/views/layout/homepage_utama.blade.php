<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage_utama</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <style>
        body {
            padding: 0px;
            margin: 0px;
            font-family: 'Poppins', sans-serif;

            font-size: 18px;
        }

        .ut {

            padding: 0px;
        }

        .app-bar {
            width: 100%;
            height: 80px;
            background-color: #A2D5F2;
            align-items: center;
            margin: 0px;
        }

        .footer {
            width: 100%;
            height: auto;

        }

        .app-left {
            text-align: start;
            padding-left: 30px;
        }

        .img-appbar-logo {
            margin-left: 30px;
            height: 40px;
        }

        .history {
            font-size: 14px;
            margin: auto 20px auto 0px;
            font-weight: bold;
        }

        .sign-in,
        .notif {
            margin: auto 20px auto 0px;
        }

        .main {


            padding: 0px;
        }

        .bg-2 {
            margin-top: 100px;
            height: 300px;
            border-top-left-radius: 150px;
            border-top-right-radius: 150px;
            background-color: #A2D5F2;
        }

        .profile {
            height: 35px;
            width: 35px;
            overflow: hidden;
            border-radius: 100%;

            margin: auto 12px auto 0px;
        }

        .profile img {
            height: 100%;
            object-fit: cover;
            margin-top: -16px;
        }

        .nav-content {
            font-size: 14px;
            margin: auto 20px auto 0px;
            font-weight: bold;
        }

        .sign-in,
        .notif {
            margin: auto 20px auto 10px;
        }

        .main {

            /* border: solid 2px red; */
            padding: 0px;
            height: auto;
        }

        .bg-2 {
            margin-top: 100px;
            height: 300px;
            border-top-left-radius: 150px;
            border-top-right-radius: 150px;
            background-color: #A2D5F2;
        }

        .profile {
            height: 35px;
            width: 35px;
            overflow: hidden;
            border-radius: 100%;
            margin: auto 12px auto 10px;
        }

        .profile img {
            height: 100%;
            object-fit: cover;

        }

        .email {
            font-size: 14px;
            color: grey;
        }

        #pf {
            display: none;
        }

        .navbar-nav a,
        .nav-item a {
            font-size: 16px;
            font-weight: 500;
            color: #07689F;
        }

        @media (max-width: 500px){
            .sign-in{
                font-size: 13px;
            }
            
        }
    </style>

</head>

<body>
    <div class="container-fluid ut">
        <header class="app-bar" style="padding: 0px; margin: 0px;">
            <!-- Fixed navbar -->
            <!-- <nav class="navbar app-bar navbar-expand-md  fixed-top ">
                <div style="line-height: 50px;" class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img class="img-appbar-logo" src="{{asset('assets/images/logo_horisontal.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="text-blue3 nav-link active " aria-current="page" href="#">Learn More</a>
                            </li>

                        </ul>
                        <div class="d-flex">

                            <div class="sign-in">Sign In</div>
                            <div id="btn-start" class="button" style="margin-right: 20px;"><button type="submit" class="btn btn-danger btn-get-started">Get Started</button></div>

                        </div>
                    </div>
                </div>
            </nav> -->

            <div class="container-fluid d-flex" style="justify-content: space-between; align-items: center; height: 80px; position: fixed; z-index: 1000; background-color: #A2D5F2;">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="img-appbar-logo" src="{{asset('assets/images/logo_horisontal.png')}}" alt="">
                </a>
                <div class="d-flex">
                    <a style="font-size: 16px; text-decoration: none; font-weight: bold; color: #07689F;" href="{{ url('/registerPage') }}" class="sign-in">Sign In</a>
                    <a style="margin-right: 20px;" type="submit" href="{{ url('/login') }}" class="btn-start btn btn-danger btn-get-started">
                        Get Started
                    </a>

                </div>

            </div>

        </header>
        <main class="main">

            @yield('contents')
        </main>



        <div class="container" style="margin-top: 60px;">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3" style="display: flex; justify-content: center; align-items: center;">
                        <img style="height: 80px;" src="{{asset('assets/images/logo_horisontal.png')}}" alt="">
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2023 Laundry Space, Tinar Gideon Yerico.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>