<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage_owner</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&family=Montserrat:wght@600;700&family=Poppins:ital,wght@0,100;0,200;0,400;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
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
            background-color: white;
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
            font-weight: bold;
            color: #07689F;
        }

        .navbar-nav {
            display: flex;
        }

        .menu {
            text-decoration: none;
            text-transform: uppercase;
            position: relative;
            color: #262626;
        }

        .menu:before {
            top: 25px;
            content: '';
            width: 0;
            height: 5px;
            background: #00bcd4;
            position: absolute;
            left: 0;
            transition: .5s;
        }

        .navbar-nav li:hover a:before {
            width: 70%;
            transform: translateX(0%);
            transform: translateY(100%);
        }

        






        @media (max-width:998px) {
            .hilang {
                display: none;
            }

            .offcanvas-bo-dy ul {
                margin-left: 15px;
            }

            #notif a {
                display: inline;
            }

        }
    </style>

</head>

<body>
    <div class="container-fluid ut">
        <header class="app-bar" style="padding: 0px; margin: 0px;">
            <!-- Fixed navbar -->
            <!-- <nav class="navbar app-bar navbar-expand-md  fixed-top mb-4" style="display: block;">
                <div style="line-height: 60px;" class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img class="img-appbar-logo" src="{{asset('assets/images/logo_horisontal.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li>
                                <div style="width: 100px;"></div>
                            </li>


                        </ul>
                        <div class="d-flex">
                            <div class="nav-content text-blue3"> Order</div>
                            <div class="nav-content text-blue3"> Customize Layanan</div>
                            <div class="nav-content text-blue3"> History</div>
                            <div style="margin-right: 30px;" class="notif"><i class="fas fa-bell text-blue3"></i></div>
                            <div class="profile"><img style="margin-left: -8px;" src="{{asset('assets/images/profile1.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </nav> -->
            <div class="container-fluid" style="position: fixed;">
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
                                        <div class="profile"><img style="margin-left: -8px;" src="{{asset('assets/images/profile1.jpg')}}" alt=""></div>
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
                                        <a class="menu nav-link" aria-current="page" href="{{url('owner')}}">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu nav-link" href="{{url('owner/customize_layanan')}}">Customize Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu nav-link" href="#">History</a>
                                    </li>
                                    <li style="margin: 2px 10px 0px 10px;" class="hilang">
                                        <a style="margin-top: 4px;" class="notif hllang nav-link" href="#"><i class="fas fa-bell text-blue3"></i></a>
                                    </li>

                                    <li class="hilang">
                                        <a style=" margin-top: 0 px;" class="menu-profile nav-link" href="#">
                                            <div id="pf" class="hilang profile" style="display: block;"> <img style="  margin-left: -8px;" src="{{asset('assets/images/profile1.jpg')}}" alt=""></div>
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
            @yield('content')
        </main>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>