<?php
if (!isset($index)) {
    $index = 1;
}
?>

@extends('../layout/homepage_owner')


<style>

</style>

<link rel="stylesheet" href="{{asset('css/customize_layanan.css')}}">

@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " style="width: 800px; margin: auto;">
        <div style=" width: 100%;" class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Harga</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col"><label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="col"><label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Set Harga</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- contetn-1 -->
    <div class="row">

        <!-- konten 1 -->
        <div id="konten1_id" class=" box-1 col-8 " style="display: inline;">
            <div class="container-fluid" style=" padding: 20px 40px 20px 40px;">
                <div class="row">
                    <div class="col">
                        <h3 style="font-weight: bold;">Daftar Daftar Layanan Laundry</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col ">
                        <button id="tambah_layanan" type="button" class=" btn btn-primary" style="margin-top: 20px; background-color: #07689F; width: 200px; border-radius: 20px; font-weight: bold;">
                            <i style="margin-right: 5px;" class="fas fa-plus">
                            </i> Tambah Layanan
                        </button>
                    </div>
                </div>



                <div class="row">
                    <div class="col">
                        <div class="box-konten-utama container-fluid ">
                            <div class="row" style="height: auto;">
                                <div class="col" style="padding-top: 30px;">
                                    <div class="card mb-3" style="max-width: 100%;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img style="object-fit: cover; height: 100%;" src="{{asset('assets/images/ilu_layanan2.jpg')}}" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 style="font-weight: bold;" class="card-title">Antar Jemput Layanan</h5>
                                                    <p class="card-text">Layanan antar-jemput laundry adalah layanan yang disediakan oleh usaha laundry atau jasa pencucian pakaian yang memungkinkan pelanggan untuk tidak perlu datang langsung ke tempat laundry untuk menjemput atau mengambil pakaian mereka yang akan dicuci dan dicuci setelah selesai. </p>

                                                    <button id="btn_edit" type="button" class="btn btn-primary" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Edit Layanan </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kontent ke2  -->

        <div id="konten2_id" class=" box-1 col-8 " style="display: none;">

            <h2 class="title-add" style="font-weight: bold;">Edit Layanan</h2>

            <div class="box-konten-utama" style="height: 85vh;">
                <div class=" container-fluid" style="width: 95%; padding: 25px 30px;">
                    <div class="row">
                        <div class="col">
                            <h3 class="title" style="font-weight: bold; margin-bottom: 24px;">Edit Layanan "Antar Jemput"</h3>
                            <div class="body-edit">
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="firstName" class="form-label">Deskripsi</label>
                                        <textarea type="text" class="form-control" id="firstName" placeholder="" value="" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="box-choose col-md-12" style="height: auto; margin-bottom: 20px; padding-left: 20px; padding-right: 20px;">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <select class="form-select" id="country" required="">
                                                    <option value="">Pilih Area Cakupan
                                                    <option>Jawa Barat</option>
                                                    <option>Bali</option>
                                                    <option>Yogyakarta</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Province.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row " style="height: 100%;">

                                            <div class="col-md-12">
                                                <div style=" padding: 20px; height: 100%;" class="">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Denpasar</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Karangasem</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Badung</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Gianyar</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Klungkung</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Denpasar Selatan</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Jimbaran</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Singaraja</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Bedugul</label>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Jam Oprasional</label>
                                    </div>



                                    <div class="col-5">
                                        <input type="time" class="form-control" id="address2" placeholder="Jam Buka">
                                    </div>
                                    <div class="col-2" style="text-align: center;">
                                        ->
                                    </div>
                                    <div class="col-5">
                                        <input type="time" class="form-control" id="address2" placeholder="Jam Tutup">
                                    </div>




                                    <div class="input-harga">
                                        <div class="row">
                                            <label for="address" class="form-label">Durasi</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Turbo
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-9">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">IDR</span>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Express
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-9">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">IDR</span>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        Reguler
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="input-group mb-3" style="display: flex; margin-top: 10px;">
                                                    <span class="input-group-text">IDR</span>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input Ongkir</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ongkir">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <button id="btn_close" style="margin-top: 40px; width: 100%; border-radius: 20px;" type="button" class="btn btn-secondary btn-sm">Close</button>
                                    </div>
                                    <div class="col-6">
                                        <button id="btn2_save" style="margin-top: 40px; width: 100%; border-radius: 20px;" type="button" class="btn btn-primary btn-sm">Save</button>

                                    </div>
                                </div>


                            </div>

                            <!-- edit -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- add-layanan -->

        <div id="konten3_id" class=" box-1 col-8 " style="display: none;">

            <div class=" container-fluid" style=" width: 95%; padding: 25px 30px;">


                <div class="row">
                    <div class="col">
                        <h3 style="font-weight: bold;">Tambahkan Layanan</h3>
                    </div>
                </div>

                <div class="box-konten-utama row" style="height: 78vh;">
                    <div class="m-konten col-md-6 col-12">
                        <div class="card-layanan card" style="width: 18rem;">
                            <img src="{{asset('assets/images/ilu_layanan2.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kiloan </h5>
                                <p class="card-text">Layanan Kiloan Laundry adalah solusi praktis untuk mencuci pakaian Anda. Kami menawarkan pelayanan cuci kiloan yang berkualitas dengan harga terjangkau. Dengan teknik cuci modern dan deterjen berkualitas, kami akan merawat pakaian Anda dengan cermat.</p>
                            </div>
                            <div class="card-body">
                                <button name="add-layanan" id="add" type="button" class=" btn btn-primary" style="margin-top: 20px; background-color: #07689F; width: 60%; border-radius: 10px; font-weight: bold; font-size: 15px;">
                                    <i style="margin-right: 5px;" class="fas fa-plus">
                                    </i> Tambahkan
                                </button>

                            </div>
                        </div>

                    </div>
                    <div class="m-konten col-md-6 col-12">
                        <div class="card-layanan card" style="width: 18rem;">
                            <img src="{{asset('assets/images/ilu_layanan2.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Self Service</h5>
                                <p class="card-text">Kami memahami kesibukan Anda, itulah mengapa kami menawarkan layanan laundry antar jemput yang nyaman. Kami akan menjemput pakaian kotor Anda tepat di depan pintu, dan setelah dicuci, kami akan mengantarkannya kembali ke Anda. Nikmati kualitas layanan laundry terbaik tanpa harus keluar rumah. </p>
                            </div>
                            <div class="card-body">
                                <button name="add-layanan" id="add" type="button" class=" btn btn-primary" style="margin-top: 20px; background-color: #07689F; width: 60%; border-radius: 10px; font-weight: bold; font-size: 15px;">
                                    <i style="margin-right: 5px;" class="fas fa-plus">
                                    </i> Tambahkan
                                </button>

                            </div>
                        </div>

                    </div>
                    <div class="m-konten col-md-6 col-12">
                        <div class="card-layanan card" style="width: 18rem;">
                            <img src="{{asset('assets/images/ilu_layanan1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Antar Jemput</h5>
                                <p class="card-text">Dengan layanan self-service laundry kami, Anda memiliki kendali penuh atas proses pencucian pakaian Anda. Anda dapat mencuci, mengeringkan, dan melipat pakaian Anda sendiri menggunakan mesin cuci dan mesin pengering yang nyaman.</p>
                            </div>
                            <div class="card-body">
                                <button name="add-layanan" id="add" type="button" class=" btn btn-primary" style="margin-top: 20px; background-color: #07689F; width: 60%; border-radius: 10px; font-weight: bold; font-size: 15px;">
                                    <i style="margin-right: 5px;" class="fas fa-plus">
                                    </i> Tambahkan
                                </button>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- add detail Layanan -->

        <div id="konten4_id" class="box-1 col-8 " style=" display: none;">
            <h3 class="title-add" style="font-size: 28px;"><strong>Form Data Add Layanan</strong></h3>
            <div class="box-konten-utama" style="height: 80vh;">
                <div class=" box-edit container-fluid" style=" width: 95%; padding: 25px 30px;">
                    <h3 class="title">Add Layanana "Antrar Jemput"</h3>
                    <div class="row  ">
                        <div class="col">
                            <div class="body-edit">
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="firstName" class="form-label">Deskripsi</label>
                                        <textarea type="text" class="form-control" id="firstName" placeholder="" value="" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="box-choose col-md-12" style="height: auto; margin-bottom: 20px; padding-left: 20px; padding-right: 20px;">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <select class="form-select" id="country" required="">
                                                    <option value="">Pilih Area Cakupan
                                                    <option>Jawa Barat</option>
                                                    <option>Bali</option>
                                                    <option>Yogyakarta</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Province.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row " style="height: 100%;">

                                            <div class="col-md-12">
                                                <div style=" padding: 20px; height: 100%;" class="">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Denpasar</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Karangasem</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Badung</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Gianyar</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Klungkung</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Denpasar Selatan</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Jimbaran</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Singaraja</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Bedugul</label>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Jam Oprasional</label>
                                    </div>



                                    <div class="col-5">
                                        <input type="time" class="form-control" id="address2" placeholder="Jam Buka">
                                    </div>
                                    <div class="col-2" style="text-align: center;">
                                        ->
                                    </div>
                                    <div class="col-5">
                                        <input type="time" class="form-control" id="address2" placeholder="Jam Tutup">
                                    </div>




                                    <div class="input-harga">
                                        <div class="row">
                                            <label for="address" class="form-label">Durasi</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Turbo
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-9">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">IDR</span>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Express
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-9">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">IDR</span>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        Reguler
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="input-group mb-3" style="display: flex; margin-top: 10px;">
                                                    <span class="input-group-text">IDR</span>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Input Ongkir</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ongkir">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <button id="btn_close" style="margin-top: 40px; width: 100%; border-radius: 20px;" type="button" class="btn btn-secondary btn-sm">Close</button>
                                    </div>
                                    <div class="col-6">
                                        <button id="btn2_save" style="margin-top: 40px; width: 100%; border-radius: 20px;" type="button" class="btn btn-primary btn-sm">Add Layanan</button>

                                    </div>
                                </div>


                            </div>

                            <!-- edit -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- end konten 2-->

        <div class="col-4">
            <div class="container-fluid" style="height: 300px;">
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="box-konten-utama row" style="height: 90vh;">
                    <div class="col">
                        <div class="box-2" style="height: auto; ">
                            <div class="col" style="display: flex; justify-content: center; height: 200px;">
                                <div class="profile" style="border: solid 2px; height: 150px; width: auto;">
                                    <img style=" object-fit: cover; height:160% ;" class="img_profileL" src="{{asset('assets/images/profile_laundry1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col" style="text-align: center; margin-top: 20px;">
                                    <h3 class="title-profile">Laundry Bang Pandu</h3>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Deskripsi</label>
                                <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="Laundry baju anda, Bersih Wangi Seperti Baru"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="Laundry baju anda, Bersih Wangi Seperti Baru">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">No Telp</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="Laundry baju anda, Bersih Wangi Seperti Baru">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Jam Oprasional</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="Laundry baju anda, Bersih Wangi Seperti Baru">
                            </div>
                            <div class="mb-3" style="display: flex; justify-content: center;">
                                <button id="saveId" type="button" class="btn-save btn-setharga btn btn-primary" style="">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const edit_btn = document.querySelectorAll('#btn_edit');
        const save_btn = document.querySelectorAll('#saveId');
        const konten1 = document.getElementById('konten1_id');
        const konten2 = document.getElementById('konten2_id');
        const konten3 = document.getElementById('konten3_id');
        const konten4 = document.getElementById('konten4_id');
        const save_btn2 = document.querySelectorAll('#btn2_save');
        const close_btn = document.querySelectorAll('#btn_close');
        const add_btn = document.querySelectorAll('#add');

        const tambah_btn = document.getElementById('tambah_layanan');


        edit_btn.forEach(function(item, index) {
            item.addEventListener('click', function() {

                konten2.style.display = 'none';
                konten1.style.display = 'none';
                konten3.style.display = 'none';
                konten4.style.display = 'none';

                konten2.style.display = 'block';
                window.scrollTo(0, 0);
            });
        });

        save_btn2.forEach(function(item, index) {
            item.addEventListener('click', function() {
                konten2.style.display = 'none';
                konten1.style.display = 'none';
                konten3.style.display = 'none';
                konten4.style.display = 'none';

                konten1.style.display = 'block';
                window.scrollTo(0, 0);

            });
        });





        tambah_btn.addEventListener('click', function() {
            konten2.style.display = 'none';
            konten1.style.display = 'none';
            konten3.style.display = 'none';
            konten4.style.display = 'none';

            konten3.style.display = 'block';
            window.scrollTo(0, 0);
        });

        add_btn.forEach(function(item, index) {
            item.addEventListener('click', function() {
                konten2.style.display = 'none';
                konten1.style.display = 'none';
                konten3.style.display = 'none';
                konten4.style.display = 'none';

                konten4.style.display = 'block';
                window.scrollTo(0, 0);
            })
        });

        close_btn.forEach(function(item, index) {
            item.addEventListener('click', function() {
                konten2.style.display = 'none';
                konten1.style.display = 'none';
                konten3.style.display = 'none';
                konten4.style.display = 'none';

                konten1.style.display = 'block';
                window.scrollTo(0, 0);

            });
        });



    });
</script>
@endsection