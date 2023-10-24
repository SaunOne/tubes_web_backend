@extends('../layout/homepage_user')
@section('contents')
<!DOCTYPE html>
<html lang="en">
//eeeeeee
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
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
        * {
            font-family: 'Poppins', sans-serif;
        }

        .main {}

        .container {}

        .cont-table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
        }

        .cont-payment {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
            padding: 5vh 5vh 5vh 5vh;
            margin-top: 5vh;
        }

        .cont-nav {
            max-width: 70%;
        }

        .btn-next {
            background-color: #014E87;
            color: white;
        }

        .btn-back {
            color: red;
            background-color: white;
            width: 80px;
        }

        .icon {
            font-size: 8vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .col a {
            text-decoration: none;
            color: #000;
        }

        .active-wallet .fa-solid.fa-wallet {
            color: #014E87;
        }

        .active-card .fa-regular.fa-credit-card {
            color: #014E87;
        }

        .active-coins .fa-solid.fa-coins {
            color: #014E87;
        }

        #walletIcon:hover .fa-solid.fa-wallet {
            color: #0469b6;
        }

        #cardIcon:hover .fa-regular.fa-credit-card {
            color: #0469b6;
        }

        #coinIcon:hover .fa-solid.fa-coins {
            color: #0469b6;
        }

        @media only screen and (max-width: 1200px) {
            .cont-2 {
                order: 1;
            }

            .cont-1 {
                order: 2;
            }

            .icon {
                font-size: 6vh;
            }

        }

        @media only screen and (max-width: 778px) {
            .cont-2 {
                order: 1;
                width: 95vh;
            }

            .cont-1 {
                order: 2;
                width: 95vh;
            }

            .icon {
                font-size: 4vh;
            }
        }

        @media only screen and (max-width: 400px) {
            .icon {
                font-size: 3vh;
            }

            .cont-payment {
                margin-top: 1vh;
            }
        }
    </style>
</head>

<div class="modal fade" id="notifikasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Notifikasi</h1>
            </div>
            <div class="modal-body">
                Pembayaran Behasil Dilakukan
            </div>
            <div class="modal-footer">
                <a href="{{ url('pilihLaundry') }}" type="button" class="btn btn-secondary">Close</a>
            </div>
        </div>
    </div>
</div>


<body class="main">
    <div class="container-xxl cont-nav mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('laundryPage') }}"
                        class="link-underline link-underline-opacity-0">Laundry Page</a></li>
                <li class="breadcrumb-item"><a href="{{ url('pilihLayanan') }}"
                        class="link-underline link-underline-opacity-0">Pilih Layanan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><strong>Payment</strong></li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 cont-1">
                <div class="container-xxl cont-payment mb-5">
                    <div class="row">
                        <h4 style="color: #014E87; margin: 0vh 0 3vh 2vh;"><strong>DETAIL PEMBAYARAN</strong></h4>
                        <div class="col d-flex justify-content-around">
                            <a style="cursor: pointer" class="text-center active-wallet" id="walletIcon">
                                <i class="fa-solid fa-wallet icon"></i>
                                <span>Wallet</span>
                            </a>
                            <a style="cursor: pointer" class="text-center" id="cardIcon">
                                <i class="fa-regular fa-credit-card icon"></i>
                                <span>Debit/Credit Card</span>
                            </a>
                            <a style="cursor: pointer" class="text-center" id="coinIcon">
                                <i class="fa-solid fa-coins icon"></i>
                                <span>E-Money</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <form id="walletForm">
                            <label for="wallet" class="form-label"><strong>Jumlah Saldo</strong></label>
                            <input type="text" class="form-control form-control-lg" id="wallet" name="wallet"
                                value="Rp1.000.000,00" readonly>
                        </form>
                        <form id="debitForm" style="display: none;">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <label for="nama" class="form-label"><strong>Nama</strong></label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Pemegang Kartu">
                                </div>
                                <div class="col-xxl-6">
                                    <label for="nomor" class="form-label"><strong>Nomor Kartu</strong></label>
                                    <input type="text" class="form-control" id="nomor" name="nomor"
                                        placeholder="Nomor Kartu">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xxl-4">
                                    <label for="bulan" class="form-label"><strong>Exp Month</strong></label>
                                    <input type="text" class="form-control" id="bulan" name="bulan"
                                        placeholder="Bulan">
                                </div>
                                <div class="col-xxl-4">
                                    <label for="tahun" class="form-label"><strong>Exp Year</strong></label>
                                    <input type="text" class="form-control" id="tahun" name="tahun"
                                        placeholder="Tahun">
                                </div>
                                <div class="col-xxl-4">
                                    <label for="cvv" class="form-label"><strong>CVV</strong></label>
                                    <input type="text" class="form-control" id="cvv" name="cvv"
                                        placeholder="CVV">
                                </div>
                            </div>
                        </form>
                        <form id="emoneyForm" style="display: none;">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <label for="nama" class="form-label"><strong>Nama</strong></label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama">
                                </div>
                                <div class="col-xxl-6">
                                    <label for="nomor" class="form-label"><strong>Nomor Telepon</strong></label>
                                    <input type="text" class="form-control" id="nomor" name="nomor"
                                        placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <div class="row mt-3" style="padding-left: 10px;">
                                <div class="col-xxl-3 col-sm-3 form-check mt-0">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="gopay">
                                    <label class="form-check-label" for="gopay">
                                        GOPAY
                                    </label>
                                </div>
                                <div class="col-xxl-3 col-sm-3 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="shopeepay">
                                    <label class="form-check-label" for="shopeepay">
                                        Shopee Pay
                                    </label>
                                </div>
                                <div class="col-xxl-3 col-sm-3 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="ovo">
                                    <label class="form-check-label" for="ovo">
                                        OVO
                                    </label>
                                </div>
                                <div class="col-xxl-3 col-sm-3 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="dana">
                                    <label class="form-check-label" for="dana">
                                        DANA
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 d-flex justify-content-end">
                        <a href="{{ url('pilihLayanan') }}" type="button" class="btn btn-back">Kembali</a>
                        <a data-bs-toggle="modal" data-bs-target="#notifikasi" type="button" class="btn btn-next">Bayar</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 cont-2">
                <div class="container-xxl cont-table mt-5" >
                    <table class="table">
                        <thead>
                            <tr class="table-info">
                                <th colspan="2">Detail Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Nama Laundry</th>
                                <td>Laundry yrdnuaL</td>
                            </tr>
                            <tr>
                                <th>Paket Layanan</th>
                                <td>Cuci Komplit Express + Antar Jemput</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>Jl. Babarsari 098</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>081123123123123</td>
                            </tr>
                            <tr>
                                <th>Berat Cucian (Kg)</th>
                                <td>3 Kg</td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <td>Rp20.000,00</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td style="color: rgb(200, 0, 0)">Belum Dibayar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <script>
        document.getElementById("walletIcon").addEventListener("click", function() {
            this.classList.toggle("active-wallet");
            document.getElementById("cardIcon").classList.remove("active-card");
            document.getElementById("coinIcon").classList.remove("active-coins");
        });

        document.getElementById("cardIcon").addEventListener("click", function() {
            this.classList.toggle("active-card");
            document.getElementById("walletIcon").classList.remove("active-wallet");
            document.getElementById("coinIcon").classList.remove("active-coins");
        });

        document.getElementById("coinIcon").addEventListener("click", function() {
            this.classList.toggle("active-coins");
            document.getElementById("walletIcon").classList.remove("active-wallet");
            document.getElementById("cardIcon").classList.remove("active-card");
        });
    </script>
    <script>
        document.getElementById("cardIcon").addEventListener("click", function() {
            document.getElementById("walletForm").style.display = "none";
            document.getElementById("debitForm").style.display = "block";
            document.getElementById("emoneyForm").style.display = "none";
        });

        document.getElementById("walletIcon").addEventListener("click", function() {
            document.getElementById("walletForm").style.display = "block";
            document.getElementById("debitForm").style.display = "none";
            document.getElementById("emoneyForm").style.display = "none";
        });

        document.getElementById("coinIcon").addEventListener("click", function() {
            document.getElementById("walletForm").style.display = "none";
            document.getElementById("debitForm").style.display = "none";
            document.getElementById("emoneyForm").style.display = "block";
        });
    </script>
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