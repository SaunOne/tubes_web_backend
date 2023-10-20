@extends('../layout/homepage_owner')


<style>

    
    
    .col {
        /* border: solid 1px black; */
    }

    .app-bar2 {
        margin-top: -5px;
        padding-bottom: 20px;
        height: auto;
        background-color: white;
        position: fixed;
        width: 65%;
        z-index: 1;
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

    .isi-content {
        margin: 20px 5%;
        display: flex;
        flex-direction: column;
      
        overflow: auto;
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

    .card2-img {}

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

    .card2_desc {
        font-size: 8px;

        color: #6d6c6c;

    }

    @media (max-width: 1200px) {
        .card_detail {
            display: none;
        }

        .card_info i {
            display: block;
            box-sizing: content-box;
        }

        .card_size-btn {}

        .card_img {
            height: auto;
            width: 80%;
        }

        .card_body {
            flex-direction: column;


        }

    }

    @media (max-width:766px) {

        .card_img-body {
            display: none;
        }
    }
</style>

@section('content')

<div class="container-fluid">
    <div class="row" style="height: auto;">
        <div class="col-8 col">
            <div class="app-bar2">
                <div class="app-bar-p row d-flex align-items-end" style="height: 80px;">
                    <div class="col">
                        <h2>Transaksi Laundry Space</h2>
                    </div>
                </div>
                <div class="app-bar-p row v-center" style="height: 50px;">
                    <div class="col">
                        <div class="nav-search v-center" style="">
                            <div class="nav-list">Order</div>
                            <div class="nav-list">Proses</div>
                            <div class="nav-list">Done</div>
                            <div id="search">
                                <button class="float-left" id="button"><i class="fa fa-search"></i></button>
                                <input id="input" class="search-btn" type="text" placeholder="Search">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row" style="height: auto;">
                <div class="col">
                    <div class="isi-content">
                        @for ($i = 0; $i < 10 ; $i++) <div class="card d-flex align-items-center" style="border:  solid1px;">
                            <div class="row card_body">
                                <div class="col-xxl-3 col-xl-3 col-md-4 col card_img-body">
                                    <img class="card_img" src="{{asset('assets/images/profile3.png')}}" alt="">

                                </div>
                                <div class="col-xxl-5 col-xl-5 col-md-8 col card_info" style="text-align: start;">
                                    <h1 class="card_title">
                                        Moms Laundry
                                    </h1>
                                    <p class="card_desc" style="">
                                        Layanan <Strong>Antar Jemput</Strong>
                                    </p>
                                    <p class="card_desc" style="">
                                        Alamar : Jalan Babarsari, Caturtunggal Sebelaha sa das dasd as dasd asd s UPN
                                    </p>
                                    <i class="fa fa-arrow-right" style="transform: translate(105%,-25px);"></i>

                                    <div class="card_size">
                                        <a href="" class="card_size-btn">Accept</a>
                                        <a href="" class="card_size-btn">Delice</a>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4  card_detail" style="text-align: start;">
                                    <h3 class="card_title">
                                        Detail Pesanan
                                    </h3>
                                    <p class="card_desc" style="text-align: justify;">
                                        Layanan <Strong>Antar Jemput</Strong>
                                    </p>
                                    <p class="card_desc" style="text-align: justify;">
                                        Alamar : Jalan Babarsari, Caturtunggal
                                    </p>

                                </div>
                            </div>
                    </div>

                    @endfor
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col">
        <div style="position: fixed; width: 31.7%;">
            <div class="row" style="height: 200px;">
                <div class="col-12" style="background-color: #00b4d1; ">
                    <div class="calender">
                        <div class="title d-flex" style="justify-content: space-between;">
                            <h3>May 2021</h3>
                            dsf
                        </div>
                        <div class="isi-calender" style="border: 1px solid ; height: 100px;">

                        </div>
                    </div>


                </div>
            </div>
            <div class="row" style="height: 250px;">
                <div class="col" style="height: 300px;">
                    <div class="isi-content2 " style="height: 100%; overflow: auto;">
                        @for ($i = 0; $i < 10 ; $i++) <div class="card2 d-flex align-items-center" style="border:  solid1px;">
                            <div class="row card2_body">
                                <div class="col-xxl-3 col-xl-3 col-md-4 col card2_img-body">
                                    <h3 class="card2-img">
                                        05
                                    </h3>

                                </div>
                                <div class="col-xxl-5 col-xl-5 col-md-8 col card2_info" style="position: relative; text-align: start;">
                                    <h1 class="card2_title">
                                        Moms Laundry
                                    </h1>
                                    <p class="card2_desc" style="">
                                        Layanan <Strong>Antar Jemput</Strong>
                                    </p>
                                    
                                    <i class="fas fa-chevron-down"></i> 
                                </div>
                                <div class="col-xxl-4 col-xl-4  card2_detail" style="text-align: start; position: relative;">
                                    <h3 class="card2_title">
                                        Detail Pesanan
                                    </h3>
                                    <p class="card2_desc" style="text-align: justify;">
                                        Layanan <Strong>Antar Jemput</Strong>
                                        
                                    </p>
                                                               
                                    <i class="fas fa-chevron-down"></i>

                                </div>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row" style="height: 250px;">
                <div class="col">
                    1
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection