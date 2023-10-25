<?php
if (!isset($index)) {
    $index = 1;
}
?>

@extends('../layout/homepage_owner')


<style>
    .app-bar2 {
        margin-top: -5px;
        padding-bottom: 20px;
        height: auto;
        background-color: white;
        position: fixed;
        width: 66.7%;
        left: 0;
        z-index: 1;
    }

    .row-box {
        padding-top: 140px;
    }

    .v-center {
        display: flex;
        align-items: center;
    }

    .nav-list {
        margin-right: 20px;
        font-size: 14px;
        font-weight: 500;
    }

    .box-content2 {
        max-height: 800vh;
        overflow: hidden;
        padding: 0px;

    }



    .box-content2 {
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* Internet Explorer/Edge */
    }

    .title-order {
        font-weight: 800;

    }

    .isi-content {
        margin: 0px 5% 0px 5%;
        display: flex;
        flex-direction: column;
    }

    .card_body {
        display: flex;
        width: 100%;
        height: 150px;
        justify-content: center;
    }

    .card_img-body {
        display: flex;
        align-items: center;
        height: 100%;
        justify-content: center;

    }

    .card_img {
        height: 75%;
        border-radius: 100%;
    }

    .card {
        width: 95%;
        border-radius: 20px;
        padding: 10px;
        overflow: hidden;
        box-shadow: 0pc 0px 5px 0px rgba(0, 0, 0, 0.4);
        margin: 8px auto;
    }


    .cal-body {
        display: flex;
        flex-direction: column;
        height: 100px;
        text-align: center;
    }

    .hari {
        font-size: 16px;
        color: rgb(96, 96, 96);
        font-weight: bold;
    }

    .title h3 {
        margin-top: 30px;
    }

    .title i {
        margin-top: 40px;
    }

    .hover {
        font-size: 22px;
        font-weight: bold;
        transform: translate(0, -15px);
    }

    .tanggal {
        font-size: 20px;
        margin-top: 10px;
        font-weight: bold;
    }



    .card_title {
        font-size: 20px;
        font-weight: bold;
    }

    .card_info {
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .card_info * {
        margin-right: 10%;


    }

    .card_info p {
        margin-bottom: 5px;


    }

    .card_detail {
        padding: 10px;
        display: flex;
        flex-direction: column;
        border: solid 0.5px #6d6c6c;
        border-radius: 10px;


    }

    .card_detail p {
        margin-bottom: 5px;
    }

    .card_desc {
        font-size: 10px;

        color: #6d6c6c;

    }

    .card_size {
        display: flex;
        align-items: center;

    }

    .card_size-btn {
        font-size: 14px;
        width: 100px;
        color: white;
        border-radius: 30px;
        padding: 3px 12px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: color 0.3;
        border-color: 0.3s;
        background-color: #07689F;
        border-radius: 10px;
        text-decoration: none;
        margin-right: 20px;

    }

    .card_size-btn:hover {
        color: #00b4d1;
        border-color: #00b4d1;
    }

    .card_btn-body {
        padding: 10px;
    }

    .card_btn {
        padding: 10px 15px;
        border: 3px solid #000;
        color: #000;
        font-weight: bold;
        display: block;
        width: max-content;
    }

    .card_info i {
        display: none;
    }

    .app-bar-p {
        padding: 0px 30px;
    }




    #search button {
        border: none;
    }

    #search button,
    #search {

        align-items: center;
        background-color: #fff;
        border-radius: 30px;
        display: flex;
        margin: 0.2em 0;
        padding: 0.2em 0.2em 0.2em 0.5em;
        transition: all 0.5s;
    }

    #search input::placeholder {
        color: #929292;
    }

    #search {
        box-shadow: 0px 0px 3px #888888;
        width: 100%;
        height: 35px;
        font-size: 14px;

    }


    #search input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: transparent;
        border: 0;
        color: inherit;
        font: inherit;
        outline: 0;
        color: #929292;
    }



    .fa-search {
        color: #929292;
        margin-right: 5px;
        float: left;

    }

    .btn {
        width: 70%;
        font-weight: bold;
    }

    .isi-calender {
        border-radius: 10px;
    }

    .card2 {
        width: 95%;
        height: 90px;
        border-radius: 20px;
        padding: 10px;
        overflow: hidden;
        box-shadow: 0pc 0px 5px 0px rgba(0, 0, 0, 0.4);
        margin: 8px auto;
        text-align: center;
    }

    .card2_body {
        display: flex;
        width: 100%;
        height: 80px;
        justify-content: center;
        margin-left: 20px;
    }

    .card2-img {
        font-size: 28px;
    }

    .card2_img-body {
        display: flex;
        align-items: center;
        justify-content: center;
        border-right: solid 1px black;
    }

    .card2_img-body * {
        margin: 0px;
        font-weight: bold;

    }

    .card2_title {
        font-size: 14px;
        font-weight: bold;

    }

    .card2_info {
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: start;

    }

    .card2_info * {
        margin-right: 5%;
    }

    .card2_info p {
        margin-bottom: 5px;


    }

    .card2_detail {
        padding: 10px;
        display: flex;
        flex-direction: column;

        border-radius: 10px;

    }

    .card2_detail p {
        font-size: 10px;
        margin-bottom: 8px;
    }

    .card2_detail strong {
        font-size: 10px;
        border: solid 1px #6d6c6c;
        padding: 0px 8px;
        border-radius: 10px;
    }

    .cek-detail {
        font-size: 10px;
        font-weight: bold;
        color: white;
        background-color: royalblue;
        border-radius: 10px;
        border: none;
        width: 100px;

    }

    .card2_desc {
        font-size: 8px;

        color: #6d6c6c;

    }

    .card2_title-detail {
        font-size: 12px;
        font-weight: bold;
    }

    .cal-box {
        display: flex;
        justify-content: center;
    }

    .app-bar-p .search1 {
        display: none;
    }

    #s2 {
        margin-top: 20px;
        display: none;
    }




    .hov_nav {
        font-weight: bold;
        color: white;
        font-size: 20px;
        background-color: #F44331;
        padding: 2px 10px 2px 10px;
        border-radius: 20px;
    }

    .card-laundry:hover {
        border: solid 1px #F44331;
    }

    .hov-cal:hover div {
        color: #07689F;
    }

    .hov-cal:active div {
        color: #07689F;
    }

    .cal-box:active div {
        font-weight: bold;
    }

    #right:hover {
        color: #07689F;
        font-weight: bold;
    }

    #left:hover {
        color: #07689F;
        font-weight: bold;
    }

    .active-cal {
        color: #07689F;
        font-weight: bold;
    
    }



    .l1:hover{
        font-weight: bold;
        font-size: 20px;
        color: #07689F;
    }



    @media (max-width: 1200px) {
        .card_detail {
            display: none;
        }

        .card_info i {
            display: block;
            box-sizing: content-box;
        }

        .card2_detail strong {
            font-size: 8px;
            border: solid 1px #6d6c6c;
            padding: 0px 6px;
            border-radius: 10px;
        }

        .card_size-btn {}

        .card_img {
            height: auto;
            width: 80%;
        }

        .card_body {
            flex-direction: column;


        }

        .cek-detail {
            width: 80px;
        }

        .card2_title-detail {
            font-size: 12px;
            font-weight: bold;
        }

        .card2_desc2 {
            display: none;
        }

        .card2_desc3 {
            display: block;
        }

        .tgl-4 {
            display: none;
        }


    }

    @media (max-width:766px) {

        .card_img-body {
            display: none;
        }

        .content-right {
            display: none;
        }

        .app-bar2 {
            width: 100%;
        }
    }

    @media (max-width:500px) {
        .s1 #search {
            display: none;
        }

        #s2 {
            display: block;
        }

        .isi-content {
            margin: 0px 0px 0px 0px;
        }

    }
</style>

@section('content')


<div class="container-fluid" id="btn-search">
    <div class="row" style="height: auto;">
        <div class="col-md-8 col">
            <div class="app-bar2 ">
                <div class="app-bar-p row d-flex align-items-center" style="height: 80px;">
                    <div class="col title-body">
                        <h2 class="title-order">Transaksi Laundry Space</h2>
                    </div>
                </div>
                <div class="s1 app-bar-p row v-center" style="height: fit-content;">
                    <div class="col">
                        <div class="nav-search v-center">
                            <div id="list_1" class="l1 nav-list hov_nav" onclick="toggleActive(this)">Order</div>
                            <div id="list_2" class="l1 nav-list" onclick="toggleActive(this)">Proses</div>
                            <div id="list_3" class="l1 nav-list" onclick="toggleActive(this)">Done</div>
                            <div class="search1" id="search">
                                <button class="float-left" id="button"><i class="fa fa-search"></i></button>
                                <input id="input" class="search-btn" type="text" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="s2" class=" app-bar-p row v-center search2" style="height: 50px;">
                    <div class="col">
                        <div id="search">
                            <button class="float-left" id=""><i class="fa fa-search"></i></button>
                            <input id="input" class="search-btn" type="text" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-box" style="height: auto;">
                @yield('show_data')
            </div>
        </div>

        <div class="col-4 col content-right">
            <div style="position: fixed; width: 31.7%;height: 100vh;overflow: auto;">
                <div class="row" style="height: 180px;">
                    <div class="col-12" style=" ">
                        <div class="calender">
                            <div class="title d-flex" style="justify-content: space-between;">
                                <h3 style="font-weight: 800; margin-top: 30px;">October 2023</h3>
                                <div style="margin-right: 25px;">

                                    <i id="left" class=" fas fa-chevron-left" style="margin-right: 20px;"></i>

                                    <i id="right" class=" fas fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="isi-calender" style="margin-top: 12px; height: 100px;">
                                <div class="row ">
                                    <div class="col cal-box" style="height: 100px; display: flex; justify-content: space-around;">
                                        @for($i = 0 ;$i < 4; $i++) <div id="cal" class="hov-cal cal-body" style="width: 60px ; ">
                                            <div id="hari" style="font-size: 16px;"></div>
                                            <div id="tanggal" class="tanggal"></div>
                                            <div class="hover" style="display: none;">.</div>
                                    </div>
                                    @endfor
                                </div>



                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="row " style="height: 250px; padding: 0px;">
                <div class="col box-content1" style="">
                    <div class="isi-content2 " style="height: 100%; overflow: auto;">
                        @for ($i = 0; $i < 10 ; $i++) <div class="card-laundry card2 d-flex align-items-center" style="border:  solid1px;">
                            <div class="row card2_body">
                                <div class="col-xxl-3 col-xl-3 col-md-4 col-lg-2 col card2_img-body">
                                    <h3 class="card2-img">
                                        {{$i + 1}}
                                    </h3>

                                </div>
                                <div class="col-xxl-5 col-xl-5 col-md-8 col-lg-6 col card2_info" style="position: relative; text-align: start;">
                                    <h1 class="card2_title">
                                        Pandu
                                    </h1>
                                    <p class="card2_desc" style="">
                                        Layanan <Strong>Antar Jemput</Strong>
                                    </p>
                                    <p class="card2_desc" style="">
                                        Alamat <Strong>Babarsari , sebelah kantor camat depok</Strong>
                                    </p>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4  card2_detail" style="text-align: start; position: relative;">
                                    <h3 class="card2_title-detail">
                                        Jam : 17:00
                                    </h3>
                                    <p class="card2_desc card2_desc2" style="text-align: justify;">
                                        Status : <Strong> Done </Strong>
                                    </p>
                                    <p class="card2_desc3" style="text-align: justify; display: none;">
                                        <Strong> Done </Strong>
                                    </p>
                                    <button class="cek-detail">Cek Detail</button>

                                </div>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>

            <div class="row" style="height: 250px;">
                <div class="col">
                    <div class="grafik" style=" margin-top: 40px; margin-left: 10px   ;">
                        <img style="width: 100%;" class="grafik-konten" src="{{asset('assets/images/grafik.png')}}" alt="">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>



<script>
    let a = -1;
    let hari = document.querySelectorAll('#hari');
    let tanggal = document.querySelectorAll("#tanggal");

    function setTanggal() {
        let temp1 = a + 1;
        let temp2 = a;
        const currentDate = new Date();
        const daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        let tgl = currentDate.getDate();

        hari.forEach(function(item, index) {
            item.textContent = daysOfWeek[(currentDate.getDay() + temp1) % 7];
            temp1++;
        });

        tanggal.forEach(function(item, index) {
            item.textContent = (tgl + temp2) % 30 + 1;
            temp2++;

        });

        

    }

    document.addEventListener('DOMContentLoaded', function() {


        const btn_right = document.getElementById('right');
        const btn_left = document.getElementById('left');

        const cal = document.querySelectorAll('#cal');

        btn_right.addEventListener('click', function() {
            a++;
            setTanggal();

        });

        btn_left.addEventListener('click', function() {
            a--;
            setTanggal();
        });

        setTanggal();

        cal.forEach(function(elem, index) {
            elem.addEventListener('click', function() {
                // Hapus semua elemen yang ada di dalam elemen .cal
                const innerDivs = elem.querySelectorAll('*');
                innerDivs.forEach(function(child) {
                    elem.classList.add('active-cal');
                });

                // Tambahkan kelas 'active-color' ke elemen yang diklik
                cal.forEach(function(el) {
                    el.classList.remove('active-cal');
                });
                elem.classList.add('active-cal');
            });
        });


        function changeView(change) {
            order.style.display = 'none';
            done.style.display = 'none';
            proses.style.display = 'none';

            change.style.display = 'block';
        }

        nav1.addEventListener('click', function() {
            changeView(order);
            nav1.classList.add('hov_nav');
            nav2.classList.remove('hov_nav');
            nav3.classList.remove('hov_nav');
        });
        nav2.addEventListener('click', function() {
            changeView(proses);
            nav1.classList.remove('hov_nav');
            nav2.classList.add('hov_nav');
            nav3.classList.remove('hov_nav');
        });
        nav3.addEventListener('click', function() {
            changeView(done);
            nav1.classList.remove('hov_nav');
            nav2.classList.remove('hov_nav');
            nav3.classList.add('hov_nav');
        });
    });
</script>
@endsection