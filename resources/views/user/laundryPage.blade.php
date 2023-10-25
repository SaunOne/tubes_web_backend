@extends('../layout/homepage_user')
{{-- @section('contents') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laundry Page</title>
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
@section('contents')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .main {
            /* background-color: rgb(250, 250, 250) */
        }

        .img-laundry {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* margin-left: 0px; */
            border-radius: 10px;
        }

        .cont-img {
            padding-top: 30px;
            max-width: 400px;
            max-height: 400px;
        }

        .cont-text {
            padding-left: 100px;
            padding-right: 50px;
        }

        .cont-layanan {
            max-width: 90%;
        }

        .btn-danger {
            width: 100px;
        }

        .cont-ulasan {
            padding-left: 0;
        }

        .img-profile {
            border-radius: 50%;
            width: 65px;
            height: 65px;
            outline: solid;
            margin-left: 10px;
        }

        .star-item.rated {
            color: gold;
        }

        .home-content4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .cont-laundry {
            padding-left: 0;
            padding-right: 20px;
            transition: background-color 0.3s;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200); 
            background-color: white; 
            border-radius: 10px; 
            padding-left: 0px;
        }

        .cont-laundry:hover {
            border: 3px solid #F44331;
            box-shadow: 0px 0px 6px 1px #F44331;
        }

        .cont-laundry-link {
            text-decoration: none;
            color: inherit;
        }

        h1 {
            color: #014E87;
        }

        #star5:hover .fas.fa-star.fa-xl {
            color: gold;
        }
        #star4:hover .fas.fa-star.fa-xl {
            color: gold;
        }
        #star3:hover .fas.fa-star.fa-xl {
            color: gold;
        }
        #star2:hover .fas.fa-star.fa-xl {
            color: gold;
        }
        #star1:hover .fas.fa-star.fa-xl {
            color: gold;
        }

        @media only screen and (max-width: 600px) {
            .cont-ulasan {
                padding-left: 0;
                margin-bottom: 50px;
            }
        }
    </style>

    <div class="modal fade" id="ulasan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #014E87; text-align: center;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white; "><strong>Ulas</strong>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <h1 class="mt-3">
                        <ul class="mb-0 list-unstyled d-flex justify-content-center"
                            style="color: rgb(110, 110, 110); margin: 0; padding: 0;">
                            <li id="star1" class="star-item" style="margin-right: 10px;">
                                <i class="fas fa-star fa-xl" onclick="rateStar(1)" style="cursor: pointer"></i>
                            </li>
                            <li id="star2" class="star-item" style="margin-right: 10px;">
                                <i class="fas fa-star fa-xl" onclick="rateStar(2)" style="cursor: pointer"></i>
                            </li>
                            <li id="star3" class="star-item" style="margin-right: 10px;">
                                <i class="fas fa-star fa-xl" onclick="rateStar(3)" style="cursor: pointer"></i>
                            </li>
                            <li id="star4" class="star-item" style="margin-right: 10px;">
                                <i class="fas fa-star fa-xl" onclick="rateStar(4)" style="cursor: pointer"></i>
                            </li>
                            <li id="star5" class="star-item">
                                <i class="fas fa-star fa-xl" onclick="rateStar(5)" style="cursor: pointer"></i>
                            </li>
                        </ul>
                    </h1>
                    <div class="form-floating mt-5">
                        <textarea class="form-control" id="komentar" style="height: 100px"></textarea>
                        <label for="komentar">Komentar</label>
                    </div>
                    <div class="mt-4 d-flex justify-content-end">
                        <button onclick="resetUlasan()" type="button" class="btn" style="color: #F44331; background-color: white; width: 80px"
                            data-bs-dismiss="modal" aria-label="Close">Batal</button>
                        <button onclick="reloadPage()" type="button" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>

<body class="main">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xxl-5">
                <div class="container cont-img">
                    <img class="img-laundry"
                        src="{{asset('assets/images/photo_laundry1.jpg')}}"
                        alt="laundry" style="box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);">
                    <p class="mt-2 mb-3"><strong>Alamat: </strong>Jl. babarsari yogyakarta indonesia singapura, di sebalah
                        kampus 5 atma jaya yogykarta </p>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="container p-auto">
                    <h1 style="color: black"><strong>Nama Laundry</strong></h1>
                    <h5 class="mt-3" style="color: rgb(90, 90, 90)">Laundry Mudah dll dan terperdcaya dan juga akna
                        menjadi tempat yang nyaman untuk anda
                        semua dalam membersihkan baju.</h5>
                    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal"
                        data-bs-target="#ulasan">Ulas</button>
                    <p class="mt-3">
                    <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                        <div class="text-black me-2">(4.8)</div>
                        <li>
                            <i class="fas fa-star fa-xl"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xl"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xl"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-xl"></i>
                        </li>
                        <li>
                            <i class="fas fa-star-half fa-xl"></i>
                        </li>
                        <div style="color: black">(12.042 rating) 23.414 order</div>
                    </ul>
                    </p>
                    <div class="container cont-ulasan">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2"
                            data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
                            class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0"
                            style="box-shadow: 0px 0px 6px 1px rgb(200, 200, 200); max-height: 200px; overflow-y: auto;">
                            <div class="row">
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="col-xxl-2">
                                        <img class="img-profile"
                                            src="{{asset('assets/images/photo_laundry1.jpg')}}"
                                            alt="profile">
                                    </div>
                                    <div class="col-xxl-10">
                                        <h5 class="mt-3 mt-lg-0"><strong>Yosa Bagas</strong></h5>
                                        <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                                            <div class="text-black me-2">(5)</div>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                        </ul>
                                        <p>Pelayanan cepat, baju juga dicuci dengan bersih, strika juga sangat rapi
                                            pokoknya
                                            debst</p>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container cont-layanan">
            <div class="d-none row d-sm-flex mt-5 mb-5">
                <h1 class="d-flex justify-content-center" style="margin-bottom: 70px;"><strong>Pesan Layanan:</strong></h1>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="home-content4">
                        <a href="{{ url('paymentKiloan') }}" class="img-ly1"><img src="{{asset('assets/images/imgly1.png')}}" alt=""></a>
                        <div>
                            <h4>Kiloan</h4>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="home-content4">
                        <a href="{{ url('pilihLayanan') }}" class="img-ly3"><img src="{{asset('assets/images/imgly3.png')}}" alt=""
                                style="height: 100px;"></a>
                        <div>
                            <h4>Antar Jemput</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex row d-sm-none mb-5" style="height: 400px;">
            <h1 class="d-flex justify-content-center"><strong>Layanan</strong></h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="home-content4">
                            <a href="{{ url('paymentKiloan') }}" class="img-ly1"><img src="{{asset('assets/images/imgly1.png')}}" alt="" style="height: 150px;"></a>
                            <div>
                                <h4>Kiloan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-content4">
                            <a href="{{ url('pilihLayanan') }}" class="img-ly3"><img src="{{asset('assets/images/imgly3.png')}}" alt="" style="height: 150px;"></a>
                            <div>
                                <h4>Antar Jemput</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span style="fill: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container cont-layanan">
            <div class="d-none row d-sm-flex mt-5 mb-5">
                <h1 class="d-flex justify-content-center"><strong>Laundry Lainnya di Sekitar Anda</strong></h1>
                <div class="container cont-pilLaundry mt-3">
                    <div class="row">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="col-xxl-6 d-none d-sm-flex">
                                <a href="{{ url('laundryPage') }}" class="cont-laundry-link">
                                    <div class="container cont-laundry mt-3"
                                        style="">
                                        <div class="row">
                                            <div class="col-4">
                                                <img class="img-laundry"
                                                    src="{{asset('assets/images/photo_laundry1.jpg')}}">
                                            </div>
                                            <div class="col-8">
                                                <h3 class="mt-2"><strong>Nama Laundry</strong></h3>
                                                <p class="mb-0" style="font-size: 12px">Laundry Mudah dll dan terperdcaya dan juga akna menjadi tempat yang
                                                    nyaman
                                                    untuk anda
                                                    semua dalam membersihkan baju.</p>
                                                <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star-half fa-xs"></i>
                                                    </li>
                                                </ul>
                                                (12.042 rating) 23.414 order
                                                </p>
                                                <p class="mt-0"><strong>Alamat: </strong>Jl. Babarsari 00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="col-xxl d-flex d-sm-none">
                                <a href="{{ url('laundryPage') }}" class="cont-laundry-link">
                                    <div class="container cont-laundry mt-3"
                                        style="">
                                        <div class="row">
                                            <div class="col-4">
                                                <img class="img-laundry"
                                                    src="{{asset('assets/images/photo_laundry1.jpg')}}">
                                            </div>
                                            <div class="col-8">
                                                <h5 class="mt-2"><strong>Nama Laundry</strong></h5>
                                                <p style="font-size: 10px">Laundry Mudah dll dan terperdcaya dan juga akna menjadi tempat yang
                                                    nyaman
                                                    untuk anda
                                                    semua dalam membersihkan baju.</p>
                                                <p style="font-size: 10px">
                                                <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star fa-xs"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star-half fa-xs"></i>
                                                    </li>
                                                </ul>
                                                (12.042 rating) 23.414 order
                                                </p>
                                                <p style="font-size: 10px"><strong>Alamat: </strong>Jl. Babarsari 00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script>
        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })

        $('#ulasan').on('hidden.bs.modal', function() {
            for (let i = 1; i <= 5; i++) {
                const star = document.getElementById(`star${i}`);
                star.classList.remove('rated');
            }

            document.getElementById('komentar').value = '';
        });
    </script>
    <script>
        let currentRating = 0;

        function rateStar(rating) {
            currentRating = rating;

            for (let i = 1; i <= 5; i++) {
                const star = document.getElementById(`star${i}`);
                if (i <= rating) {
                    star.classList.add('rated');
                } else {
                    star.classList.remove('rated');
                }
            }
        }
    </script>
</body>

</html>
@endsection
