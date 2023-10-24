@extends('../layout/homepage_user')
@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LP</title>
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
        * {
            font-family: 'Poppins', sans-serif;
        }

        .img-laundry {
            width: 100%;
            height: 100%;
            object-fit: fill;
            /* margin-left: 0px; */
            border-radius: 10px;
        }

        /* .cont-img {
            max-width: 300px;
            max-height: 220px;
        } */

        .cont-laundry-link {
            text-decoration: none;
            color: inherit;
        }

        .cont-laundry {
            padding-left: 0;
            padding-right: 20px;
            background-color: aqua;
            transition: background-color 0.3s;
        }

        .cont-laundry:hover {
            border: 1px solid aqua;
        }

        .main {
            background-color: rgb(250, 250, 250)
        }

        .cont-search {
            padding-left: 0;
            padding-right: 0;
        }

        .search-input {
            border-radius: 30px;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
            height: 40px;
            padding-left: 30px;
        }

        .input-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .cont-category {
            margin-top: 7vh;
        }

        .cont-pilih {
            padding-right: 5vh;
        }

        @media only screen and (max-width: 850px) {
            .cont-pilih {
                padding-right: 0;
            }

            .cont-search {
                padding: 0 3vh 0 3vh;
            }

            .cont-pilLaundry {
                padding: 0 3vh 0 3vh;
            }
        }
    </style>
</head>

<body>
    <div class="row mb-5">
        <div class="col-xl-2 d-none d-xl-flex" style="padding-left: 10vh">
            <div class="container cont-category">
                <h4><strong><i class="fa-solid fa-filter"></i> FILTER</strong></h4>
                <p class="mt-5"><strong>Lokasi</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="jogja">
                    <label class="form-check-label" for="jogja">
                        DI Yogyakarta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="jakarta">
                    <label class="form-check-label" for="jakarta">
                        Jakarta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="jateng">
                    <label class="form-check-label" for="jateng">
                        Jawa Tengah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="jabar">
                    <label class="form-check-label" for="jabar">
                        Jawa Barat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="jatim">
                    <label class="form-check-label" for="jatimm">
                        Jawa Timur
                    </label>
                </div>
                <div class="border-bottom border-black mt-3"></div>
                <p class="mt-3"><strong>Layanan</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kiloan">
                    <label class="form-check-label" for="kiloan">
                        Kiloan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="antar">
                    <label class="form-check-label" for="antar">
                        Antar Jemput
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="self">
                    <label class="form-check-label" for="self">
                        Self Service
                    </label>
                </div>
                <div class="border-bottom border-black mt-3"></div>
                <p class="mt-3"><strong>Penilaian</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="b-lima">
                    <label class="form-check-label" for="b-lima">
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
                                <i class="fas fa-star fa-xs"></i>
                            </li>
                        </ul>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="b-empat">
                    <label class="form-check-label" for="b-empat">
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
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <div style="color: black">ke atas</div>
                        </ul>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="b-tiga">
                    <label class="form-check-label" for="b-tiga">
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
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <div style="color: black">ke atas</div>
                        </ul>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="b-dua">
                    <label class="form-check-label" for="b-dua">
                        <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                            <li>
                                <i class="fas fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <div style="color: black">ke atas</div>
                        </ul>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="b-satu">
                    <label class="form-check-label" for="b-satu">
                        <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                            <li>
                                <i class="fas fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </li>
                            <div style="color: black">ke atas</div>
                        </ul>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-xl-10 cont-pilih">
            <div class="container cont-search mt-5">
                <form class="d-flex" role="search">
                    <div class="input-container">
                        <i class="fas fa-search search-icon"></i>
                        <input class="form-control search-input" type="text" placeholder="Search"
                            aria-label="search">
                    </div>
                </form>
            </div>
            <div class="container cont-pilLaundry mt-3" style="overflow-y: scroll; max-height: 500px;">
                <div class="row">
                    @for ($i = 0; $i < 11; $i++)
                        <div class="col-xxl-6 d-none d-sm-flex">
                            <a href="{{ url('laundryPage') }}" class="cont-laundry-link">
                                <div class="container cont-laundry mt-3"
                                    style="box-shadow: 0px 0px 6px 1px rgb(200, 200, 200); background-color: white; border-radius: 10px; padding-left: 0px;">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-laundry"
                                                src="{{ asset('images/158-1587548_transparent-fruits-and-vegetables-png-all-vegetables-in.png') }}">
                                        </div>
                                        <div class="col-8">
                                            <h3 class="mt-2"><strong>Nama Laundry</strong></h3>
                                            <p>Laundry Mudah dll dan terperdcaya dan juga akna menjadi tempat yang
                                                nyaman
                                                untuk anda
                                                semua dalam membersihkan baju.</p>
                                            <p>
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
                                            <p><strong>Alamat: </strong>Jl. Babarsari 00</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xxl d-flex d-sm-none">
                            <a href="{{ url('laundryPage') }}" class="cont-laundry-link">
                                <div class="container cont-laundry mt-3"
                                    style="box-shadow: 0px 0px 6px 1px rgb(200, 200, 200); background-color: white; border-radius: 10px; padding-left: 0px;">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="img-laundry"
                                                src="{{ asset('images/158-1587548_transparent-fruits-and-vegetables-png-all-vegetables-in.png') }}">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="mt-2"><strong>Nama Laundry</strong></h5>
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

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>

</html>
@endsection