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
    </style>

</head>

<body>
    <div class="container-fluid ut">
        <header class="app-bar" style="padding: 0px; margin: 0px;">
            <!-- Fixed navbar -->
            <nav  class="navbar app-bar navbar-expand-md  fixed-top " style="display: none;">
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
            </nav>
            <nav class="navbar app-bar navbar-expand-md  fixed-top " style="display: block;">
                <div style="line-height: 50px;" class=" container-fluid" style="margin: auto 0px auto 0px">
                    <a class="navbar-brand" href="#">
                        <img class="img-appbar-logo" src="{{asset('assets/images/logo_horisontal.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <div class="history text-blue3"> Laundry in </div>
                                <div class="history text-blue3"> </div>
                            </li>

                        </ul>
                        <div class="d-flex">
                        <div class="history text-blue3"> Daftar Laundry</div>
                            <div class="history text-blue3"> Daftar Laundry</div>
                            <div class="history text-blue3"> Daftar Laundry</div>
                            <div style="margin-right: 30px;" class="notif"><i class="fas fa-bell text-blue3"></i></div>
                            <div class="profile"><img style="margin-left: -8px;" src="{{asset('assets/images/profile1.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="main">

            @yield('content')
        </main>
        <footer class="footer">
            <div class="bg-2">
                <div class="row">

                </div>
            </div>

        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>