@extends('../layout/homepage_owner')

<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<style>
    * {
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
    }

    .row {
        /* border: 2px solid blueviolet; */

    }

    .col {

        border: solid 1px;


    }

    .box-content1 {
        margin: 50px;

        height: auto;

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
        margin-right: 80px;
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

    #btn1,
    #btn2,
    #btn3 {
        font-size: 16px;
        width: 70%;
        border: none;
    }

    .box-content2 {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    a {
        text-decoration: none;
    }

    .container-body {

        border: solid 2px yellow;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 10px;
        flex-wrap: wrap;
    }

    .card_body {
        display: flex;
        width: 450px;
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
        border-radius: 20px;
        padding: 15px;
        overflow: hidden;
        box-shadow: 0pc 0px 5px 0px rgba(0, 0, 0, 0.4);
        margin: 0px auto;
    }



    .card_title {
        font-size: 20px;
    }

    .card_info {
        padding: 15px;
        width: 65%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;


    }

    .card_desc {
        font-size: 10px;
        letter-spacing: 1.5px;
        color: #6d6c6c;
    }

    .card_size {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card_size-btn {
        width: 30px;
        height: 30px;
        border-radius: 30px;
        font-size: 12px;
        color: #848484;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: color 0.3;
        border-color: 0.3s;

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





    @media (max-width: 992px) {

        #btn1,
        #btn2,
        #btn3 {
            font-size: 14px;
            width: 80%;
        }
    }

    @media (max-width: 778px) {

        #btn1,
        #btn2,
        #btn3 {
            font-size: 10px;
            width: 90%;
        }

        #btn1 {
            font-size: 8px;
            width: 100%;
        }
    }
</style>

@section('content')

<div class="container-fluid" >
    <div class="row d-flex align-items-center" style="height: 100px;">
        <div class="col-sm-4 col-md-3 col-lg-2 col-5">
            <div class="dropdown" style="float: right;">
                <a style="background-color: transparent; border: none; color: black;" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catagori
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-8 col-md-9 col-lg-10 col-7">
            <div id="search">
                <button class="float-left" id="button"><i class="fa fa-search"></i></button>

                <input id="input" class="search-btn" type="text" placeholder="Search">

            </div>

        </div>
    </div>
    <div class="row p-0" style="height: 150px;">
        <div class="col box-content1">
            <div class="row d-fles align-items-center" style=" height: 100px; text-align: center;">
                <div class="col"><button id="btn1" class="btn-2 btn btn-danger" style="border-radius: 15px; font-weight: bold; background-color: #07689F;" type="button">Orderan Masuk</button></div>
                <div class="col"><button id="btn2" style="border-radius: 15px; font-weight: bold; background-color: #07689F;" type="button" class=" btn btn-danger">Proses</button></div>
                <div class="col"><button id="btn3" style="border-radius: 15px; font-weight: bold; background-color: #07689F;" type="button" class=" btn btn-danger">Ready</button></div>
            </div>
        </div>
    </div>
    <div class="row p-0" style="height: auto; text-align: center;">
        <div class="col box-content2" style="margin: 0px 50px 0px 50px;">
            <div class="row">
                <div class="col-12 " style="border: solid 1px red; height: auto; display: flex; justify-content: center;">
                    <div class="row container-body" style="">
                        @for($i = 0 ; $i < 7 ; $i++) 
                        <div class="col-4 card d-flex align-items-center" style="border:  solid1px;">
                            <div class="row card_body">
                                <div class="col-4 card_img-body">
                                    <img class="card_img" src="{{asset('assets/images/profile3.png')}}" alt="">

                                </div>
                                <div class="col-8 card_info" style="text-align: start;">
                                    <h1 class="card_title">
                                        Moms Laundry
                                    </h1>
                                    <p class="card_desc" style="text-align: justify;">
                                        Layanan <Strong>Antar Jemput</Strong>
                                    </p>
                                    <p class="card_desc" style="text-align: justify;">
                                        Alamar : Jalan Babarsari, Caturtunggal 
                                    </p>
                                    <div class="card_size">
                                        <a href="" class="card_size-btn">1</a>
                                        <a href="" class="card_size-btn">2</a>
                                        <a href="" class="card_size-btn">3</a>
                                    </div>
                                    <div class="card_btn-body">
                                        <a href="#">Proses</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    let input = document.getElementById('input');
    let button = document.getElementById('button');

    function loading() {

        search.classList.add('loading');

        setTimeout(function() {
            search.classList.remove('loading');
        }, 1500);
    }



    button.addEventListener('click', loading);
 
    input.addEventListener('keydown', function(event) {
        if (event.keyCode == 13) loading();
    });
</script>