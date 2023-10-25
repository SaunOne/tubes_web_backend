@extends('../layout/homepage_user')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
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
        /* .main {
            background-color: rgb(240, 240, 240);
        } */

        .cont {
            padding: 20px 20px 20px 20px;
            /* width: 80%; */
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
        }

        .img-profile {
            height: 200px;
            width: 200px;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
        }

        .cont-wallet {
            padding: 20px 20px 20px 20px;
            /* width: 80%; */
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
        }

        .btn-isi {
            background-color: #014E87;
            color: white;
        }

        .btn-back {
            color: red;
            background-color: white;
        }

        .mob {
            padding-left: 5vh;
            padding-right: 5vh;
        }

        .test {
            background-color: #014E87;
            justify-content: end;
            padding: 0;
        }

        .table-info {
            padding: 0;
        }

        @media only screen and (max-width: 600px) {
            .cont-wallet {
                padding: 20px 20px 20px 20px;
                width: 100%;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
            }
        }

        @media only screen and (max-width: 600px) {
            .cont-input {
                margin-top: 10px;
            }

            .cont {
                padding: 20px 20px 20px 20px;
                width: 100%;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0px 0px 6px 1px rgb(200, 200, 200);
            }

            .mob {
                padding: 1vh;
            }

            .cont-wallet {
                margin-bottom: 5vh;
                margin-top: 3vh;
            }
        }
    </style>
    <div class="modal fade" id="isiSaldo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #014E87; text-align: center;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white; "><strong>Isi
                            Saldo</strong></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="isi" class="form-label"><strong>Jumlah Top-Up</strong></label>
                    <input type="text" class="form-control" id="isi" name="isi"
                        placeholder="Masukkan Jumlah Uang">
                    <div class="row d-none d-sm-flex">
                        <p class="mt-3"><strong>Pilih Layanan Lainnya:</strong></p>
                        <div class="container">
                            <div class="row" style="padding-left: 10px;">
                                <div class="col-xxl-3 col-sm-3 form-check mt-0">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="bca">
                                    <label class="form-check-label" for="bca">
                                        BCA
                                    </label>
                                </div>
                                <div class="col-xxl-3 col-sm-3 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="mandiri">
                                    <label class="form-check-label" for="mandiri">
                                        Mandiri
                                    </label>
                                </div>
                                <div class="col-xxl-3 col-sm-3 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="bni">
                                    <label class="form-check-label" for="bni">
                                        BNI
                                    </label>
                                </div>
                                <div class="col-xxl-3 col-sm-3 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="bri">
                                    <label class="form-check-label" for="bri">
                                        BRI
                                    </label>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 10px;">
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
                        </div>
                    </div>

                    <div class="row d-flex d-sm-none">
                        <p class="mt-3"><strong>Pilih Layanan Lainnya:</strong></p>
                        <div class="container">
                            <div class="row" style="padding-left: 10px;">
                                <div class="col-6 form-check mt-0">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="bca">
                                    <label class="form-check-label" for="bca">
                                        BCA
                                    </label>
                                </div>
                                <div class="col-6 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="mandiri">
                                    <label class="form-check-label" for="mandiri">
                                        Mandiri
                                    </label>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 10px;">
                                <div class="col-6 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="bni">
                                    <label class="form-check-label" for="bni">
                                        BNI
                                    </label>
                                </div>
                                <div class="col-6 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="bri">
                                    <label class="form-check-label" for="bri">
                                        BRI
                                    </label>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 10px;">
                                <div class="col-6 form-check mt-0">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="gopay">
                                    <label class="form-check-label" for="gopay">
                                        GOPAY
                                    </label>
                                </div>
                                <div class="col-6 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="shopeepay">
                                    <label class="form-check-label" for="shopeepay">
                                        Shopee Pay
                                    </label>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 10px;">
                                <div class="col-6 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="ovo">
                                    <label class="form-check-label" for="ovo">
                                        OVO
                                    </label>
                                </div>
                                <div class="col-6 form-check">
                                    <input class="form-check-input" name="metodeBayar" type="radio" value=""
                                        id="dana">
                                    <label class="form-check-label" for="dana">
                                        DANA
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-end">
                        <button type="button" class="btn"
                            style="color: red; background-color: white; width: 80px" data-bs-dismiss="modal"
                            aria-label="Close">Batal</button>
                        <button type="button" class="btn btn-success">Isi Saldo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>

<body class="main">
    <div class="row mob mt-3">
        <!-- <h3 class="mt-3"><strong>My Profile</strong></h3> -->
        <div class="col-xxl-8">
            <div class="container cont" style="background-color: white; border-radius: 10px">
                <div id="ubahAlert"></div>
                <div id="simpanAlert"></div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <form id="readOnlyPic">
                            <img class="rounded-circle img-profile"
                                src="{{asset('assets/images/profile2.png')}}">
                        </form>
                        <form id="editPic" style="display: none;">
                            <input type="file" id="imageInput" style="display: none" accept="image/*">
                            <label for="imageInput" style="cursor: pointer;">
                                <img class="rounded-circle img-profile"
                                    src="{{asset('assets/images/profile2.png')}}"
                                    id="profileImage">
                            </label>
                        </form>
                    </div>
                </div>
                <form id="readOnlyForm">
                    <div class="row d-none d-sm-flex">
                        <div class="col-6">
                            <label for="nama" class="form-label mt-3"><strong>Nama</strong></label>
                            <input type="text" class="form-control" id="nama"
                                name="nama"value="Nama Orang" readonly>
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label mt-3"><strong>Email</strong></label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="orang@gmail.com" readonly>
                        </div>
                    </div>
                    <div class="row d-none d-sm-flex">
                        <div class="col-6">
                            <label for="telepon" class="form-label mt-3"><strong>Nomor Telepon</strong></label>
                            <input type="text" class="form-control" id="telepon" name="telepon"
                                value="081123123123" readonly>
                        </div>
                        <div class="col-6">
                            <label for="username" class="form-label mt-3"><strong>Username</strong></label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="OrangBaik" readonly>
                        </div>
                    </div>

                    <div class="row d-flex d-sm-none">
                        <label for="nama" class="form-label mt-3"><strong>Nama</strong></label>
                        <input type="text" class="form-control" id="nama" name="nama"value="Nama Orang"
                            readonly>

                        <label for="email" class="form-label mt-3"><strong>Email</strong></label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="orang@gmail.com" readonly>

                        <label for="telepon" class="form-label mt-3"><strong>Nomor Telepon</strong></label>
                        <input type="text" class="form-control" id="telepon" name="telepon"
                            value="081123123123" readonly>

                        <label for="username" class="form-label mt-3"><strong>Username</strong></label>
                        <input type="text" class="form-control" id="username" name="username" value="OrangBaik"
                            readonly>
                    </div>

                    <label for="alamat" class="form-label mt-3"><strong>Alamat</strong></label>
                    <textarea class="form-control" id="alamat" name="alamat" style="width: 100%;" rows="3" readonly>Jl. Babarsari 00</textarea>
                    <div class="row mt-3">
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-success" id="editButton">Ubah</button>
                        </div>
                    </div>
                </form>

                <form id="editForm" style="display: none;">
                    <div class="row">
                        <div class="col-6">
                            <label for="nama" class="form-label mt-3"><strong>Nama</strong></label>
                            <input type="text" class="form-control" id="nama"
                                name="nama"value="Nama Orang">
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label mt-3"><strong>Email</strong></label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="orang@gmail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="telepon" class="form-label mt-3"><strong>Nomor Telepon</strong></label>
                            <input type="text" class="form-control" id="telepon" name="telepon"
                                value="081123123123">
                        </div>
                        <div class="col-6">
                            <label for="username" class="form-label mt-3"><strong>Username</strong></label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="OrangBaik">
                        </div>
                    </div>
                    <label for="alamat" class="form-label mt-3"><strong>Alamat</strong></label>
                    <textarea class="form-control" id="alamat" name="alamat" style="width: 100%;" rows="3">Jl. Babarsari 00</textarea>
                    <div class="mt-3 d-flex justify-content-end">
                        <button type="button" class="btn"
                            style="color: red; background-color: white; width: 80px" id="cancelButton">Batal</button>
                        <button type="button" class="btn btn-success" id="saveButton">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="container cont-wallet" style="background-color: white; border-radius: 10px;">
                <div class="row">
                    <div class="col-xxl-6">
                        <label for="wallet" class="form-label"><strong>Jumlah Saldo</strong></label>
                        <input type="text" class="form-control" id="wallet" name="wallet"
                            value="Rp1.000.000,00" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 mt-3">
                        <button type="button" class="btn btn-isi" id="isi" data-bs-toggle="modal"
                            data-bs-target="#isiSaldo">Isi Saldo</button>
                    </div>
                </div>
                <h5 class="mt-3"><strong>Riwayat Transaksi</strong></h5>
                <div class="row">
                    <div class="col-xxl-12 mt-3">
                        <div class="table-responsive" style="overflow-x: auto;">
                            <table class="table table-info" style="min-width: 100%;">
                                <thead>
                                    <tr class="header-row" style="background-color: #014E87">
                                        <th>ID</th>
                                        <th>Metode</th>
                                        <th>Jumlah</th>
                                        <th>Tipe</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>101</th>
                                        <td>Bank Transfer</td>
                                        <td style="color: green">+Rp100.000,00</td>
                                        <td>Isi Saldo</td>
                                        <td>10-10-2023 <strong>20:59</strong></td>
                                    </tr>
                                    <tr>
                                        <th>102</th>
                                        <td>Wallet</td>
                                        <td style="color: red">-Rp56.000,00</td>
                                        <td>Pembayaran</td>
                                        <td>13-10-2023 <strong>16:32</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- @endsection --}}
    <script>
        const alertPlaceholder = document.getElementById('ubahAlert')
        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button id="closeUbah" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

        const alertTrigger = document.getElementById('editButton')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                appendAlert('Silahkan Ubah Profile Anda', 'info')
            })
        }
    </script>
    <script>
        const alertSimpan = document.getElementById('simpanAlert')
        const appendSimpan = (message, type) => {
            const wrapperSimpan = document.createElement('div')
            wrapperSimpan.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button id="closeSimpan" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertSimpan.append(wrapperSimpan)
        }

        const alertTriggerSimpan = document.getElementById('saveButton')
        if (alertTriggerSimpan) {
            alertTriggerSimpan.addEventListener('click', () => {
                appendSimpan('Profile Berhasil Disimpan', 'success')
            })
        }
    </script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <script>
        document.getElementById("editButton").addEventListener("click", function() {
            document.getElementById("readOnlyForm").style.display = "none";
            document.getElementById("editForm").style.display = "block";
            document.getElementById("readOnlyPic").style.display = "none";
            document.getElementById("editPic").style.display = "block";
            document.getElementById("closeSimpan").click();
        });

        document.getElementById("cancelButton").addEventListener("click", function() {
            document.getElementById("readOnlyForm").style.display = "block";
            document.getElementById("editForm").style.display = "none";
            document.getElementById("readOnlyPic").style.display = "block";
            document.getElementById("editPic").style.display = "none";
            document.getElementById("closeUbah").click();
        });

        document.getElementById("saveButton").addEventListener("click", function() {
            document.getElementById("readOnlyForm").style.display = "block";
            document.getElementById("editForm").style.display = "none";
            document.getElementById("readOnlyPic").style.display = "block";
            document.getElementById("editPic").style.display = "none";
            document.getElementById("closeUbah").click();
        });
    </script>
    <script>
        const profileImage = document.getElementById("profileImage");
        const imageInput = document.getElementById("imageInput");

        profileImage.addEventListener("click", function() {
            imageInput.click();
        });

        imageInput.addEventListener("change", function() {
            const selectedImage = imageInput.files[0];
            if (selectedImage) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    profileImage.src = e.target.result;
                };

                reader.readAsDataURL(selectedImage);
            }
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