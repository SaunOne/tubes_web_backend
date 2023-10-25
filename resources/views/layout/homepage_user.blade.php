<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage_utama</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {

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


            /* padding: 0px; */
        }

        .bg-2 {
            margin-top: 100px;
            height: 300px;
            border-top-left-radius: 150px;
            border-top-right-radius: 150px;
            background-color: #A2D5F2;
        }

        .profile-hp {
            height: 35px;
            width: 35px;
            overflow: hidden;
            border-radius: 100%;

            margin: auto 12px auto 0px;
        }

        .profile-hp img {
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
            /* padding: 0px;
            height: auto; */
        }

        .bg-2 {
            margin-top: 100px;
            height: 300px;
            border-top-left-radius: 150px;
            border-top-right-radius: 150px;
            background-color: #A2D5F2;
        }

        .profile-hp {
            height: 35px;
            width: 35px;
            overflow: hidden;
            border-radius: 100%;
            margin: auto 12px auto 10px;
        }

        .profile-hp img {
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
    </style>
</head>

<body>
    <div class="container-fluid ut">
        <header class="app-bar" style="padding: 0px; margin: 0px;">
            <div class="container-fluid" style="position: fixed; z-index: 1000; background-color: #A2D5F2;">
                <nav class=" navbar navbar-expand-lg " aria-label="Offcanvas navbar large">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img class="img-appbar-logo" src="{{asset('assets/images/logo_horisontal.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                            <div class="offcanvas-header ">
                                <div class="row" style="margin-left: 5px;">
                                    <div class="col-3" style="display: flex; align-items: center;">
                                        <div class="profile-hp"><img style="margin-left: -8px;" src="{{asset('assets/images/profile1.jpg')}}" alt=""></div>
                                    </div>
                                    <div class="col-7">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Pandu Prakyasa Yoga</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="email col">
                                                pandupandunet@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 " style="display: flex; align-items: center; justify-content: center;">
                                        <a style="margin-right: -5px;" class="hllang nav-link" href="#"><i class="fas fa-bell text-blue3"></i></a>

                                    </div>
                                </div>


                            </div>
                            <div class="offcanvas-body">
                                <ul style="padding-top: 7px;" class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li id="notif" style="display: none;" class="notif nav-item">
                                        <a class=" nav-link" aria-current="page" href="#">Notifikasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{url('owner')}}">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('owner/customize_layanan')}}">Customize Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">History</a>
                                    </li>
                                    <li style="margin: 2px 10px 0px 10px;" class="hilang">
                                        <a style="margin-top: 4px;" class="hllang nav-link" href="#"><i class="fas fa-bell text-blue3"></i></a>
                                    </li>

                                    <li class="hilang">
                                        <a style="margin-top: 0 px;" class="nav-link" href="{{url('/profile')}}">
                                            <div class="profile-hp" style="background-color: aliceblue;"> <img style="margin-top:0px; margin-right: 5px; object-fit: cover;" src="{{asset('assets/images/profile2.png')}}" alt="">
                                            </div>
                                        </a>
                                    </li>

                                </ul>



                            </div>
                        </div>
                    </div>
                </nav>
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
                    <p>© 2023 Laundry Space, Tinar Gideon Yeriko.</p>
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


    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>

</html>