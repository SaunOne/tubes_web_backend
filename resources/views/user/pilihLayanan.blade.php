@extends('../layout/homepage_user')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Layanan</title>
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
            background-color: rgb(250, 250, 250)
        }

        .cont-input {
            padding: 20px 20px 20px 20px;
            max-width: 60%;
        }

        .cont-nav {
            max-width: 60%;
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

        @media only screen and (max-width: 600px) {
            .cont-input {
                padding: 20px 20px 20px 20px;
                max-width: 95%;
            }

            .cont-nav {
                max-width: 95%;
            }
        }

        @media only screen and (max-width: 1400px) {
            .cont-input-layanan {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body class="main">
    <div class="container-xxl cont-nav mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('laundryPage') }}"
                        class="link-underline link-underline-opacity-0">Laundry Page</a></li>
                <li class="breadcrumb-item active" aria-current="page"><strong>Pilih Layanan</strong></li>
            </ol>
        </nav>
    </div>

    <div class="container-xxl cont-input mt-5"
        style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);">
        <div style="text-align: center">
            <h3 style="color: #014E87"><strong>Pilih Layanan</strong></h3>
        </div>
        <div class="form-floating mt-3">
            <textarea required class="form-control" id="alamat" style="height: 100px"></textarea>
            <label for="alamat">Alamat</label>
        </div>
        <div class="row mt-3">
            <div class="col-xxl-6">
                <select class="form-select" id="jenis" required>
                    <option selected disabled value="">Pilih Jenis</option>
                    <option>Cuci Komplit
                    <option>Cuci
                    <option>Seterika
                </select>
            </div>
            <div class="col-xxl-6 cont-input-layanan">
                <select class="form-select" id="layanan" required>
                    <option selected disabled value="">Pilih Layanan</option>
                    <option>Reguler
                    <option>Express
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-xxl-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="berat">
                    <label for="berat">Berat Laundry (Kg)</label>
                </div>
            </div>
            <div class="col-xxl-6">
                <p><strong>Pilih Layanan Lainnya:</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="jaket">
                    <label class="form-check-label" for="jaket">
                        Jaket
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="selimut">
                    <label class="form-check-label" for="selimut">
                        Selimut
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-end">
            <a href="{{ url('laundryPage') }}" type="button" class="btn btn-back">Kembali</a>
            <a href="{{ url('payment') }}" type="button" class="btn btn-next">Berikutnya</a>
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