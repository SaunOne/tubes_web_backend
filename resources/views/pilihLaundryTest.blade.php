@extends('../layout/homepage_user')
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
            border: 1px solid rgb(255, 51, 0);
            box-shadow: 0 0 6px 1px rgb(255, 51, 0);
        }

        /* .main {
            background-color: rgb(250, 250, 250)
        } */

        .cont-search {
            padding-left: 0;
            padding-right: 0;
        }

        .search-input {
            /* border-radius: 30px; */
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

@section('contents')

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
                        <input class="form-control search-input" type="search" placeholder="Search"
                            aria-label="Search" style="padding-left: 30px">
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

@endsection

