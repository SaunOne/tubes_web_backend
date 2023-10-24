@extends('../layout/homepage_utama')

<style>
    .bg-1 {
        height: 700px;
        border-bottom-left-radius: 150px;
        border-bottom-right-radius: 150px;
        position: absolute;
    }

    .isi-content {
        position: relative;
    }

    .row {
        height: auto;

    }

    .col {
        height: 100%;
        padding-right: 0px;
    }


    .img-home1 img {
        height: 450px;
    }

    .home-content1 {
        padding: 0px 80px 0px 100px;
        text-align: justify;
    }

    .home-content1 p {
        margin-top: 20px;

    }

    .home-content2 {
        text-align: justify;
        padding: 80px 20% 0px 20%;
        margin-bottom: 80px;
    }

    .home-content2 h3 {
        margin-top: 50px;
    }

    .home-content2 p {
        margin-top: 30px;
        text-align: center;
    }


    .home-content4 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .r-1 {
        height: 600px;
    }

    .r-1 .col {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-logo1 {
        height: 120px;
    }

    .img-home2 img {
        margin-top: 100px;
        height: 400px;
    }

    .img-home3 img {
        margin-top: 20px;
        height: 380px;
    }

    .home-content4 h4 {
        margin-top: 30px;
    }



    .r-5 .col {
        padding-top: 50px;
    }

    .r-6 .c-1 {
        padding-top: 150px;
    }

    .r-6 .c-1 p {
        margin-top: 20px;
        padding: 0px 20% 0px 20%;
        text-align: justify;
    }

    .r-5 .c-2 p {
        margin-top: 20px;
        padding: 0px 20% 0px 20%;
        text-align: justify;
    }

    .btn-start{
        padding: 0px 20% 0px 20%;
    }


    @media (max-width: 1400px) {
        .img-home1 img {
            height: 300px;
        }

        .img-home2 img {
            margin-top: 100px;
            height: 350px;
        }

        .img-home3 img {
            margin-top: 20px;
            height: 320px;
        }


    }

    @media (max-width: 1200px) {
        .img-home1 img {
            height: 250px;
        }



        .home-content2 {
            padding: 20px 15% 0px 15%;
            margin-bottom: 40px;
        }

        .home-content1 {
            padding: 0px 20px 0px 60px;
        }

        .r-1 {
            height: 700px;
        }

        .img-home2 img {
            margin-top: 100px;
            height: 300px;
        }

        .img-home3 img {
            margin-top: 120px;
            height: 260px;
        }

        .r-5 .col {
            padding-top: 50px;
        }

        .r-6 .c-1 {
            padding-top: 100px;
        }
    }



    @media (max-width: 992px) {
        .c-1 {
            padding: 50px 80px 80px 50px;
            order: 2;
        }



        .img-home1 img {
            height: 200px;
        }

        .c-1 {
            order: 1;
        }

        .c-2 {
            order: 2;
        }

        .home-content1 {
            padding: 0px 40px 0px 40px;
        }

        .p1 {
            font-size: 16px;

        }

        p {
            font-size: 14px;
        }

        .r-6 .c-1 p {
            margin-top: 20px;
            padding: 0px 10% 0px 10%;
            text-align: justify;
        }

        .r-5 .c-2 p {
            margin-top: 20px;
            padding: 0px 10% 0px 10%;
            text-align: justify;
        }

        .btn-start{
        padding: 0px 10% 0px 10%;
    }

        .img-home2 img {
            margin-top: 100px;
            height: 250px;
        }

        .img-home3 img {
            margin-top: 120px;
            height: 220px;
        }
    }

    @media (max-width: 768px) {
        .c-1 {
            padding: 50px 0px 80px 0px;
            order: 2;
        }

        .home-content1 {
            padding: 0px 40px 0px 40px;
        }

        .img-home1 img {
            height: 200px;
        }

        .c-1 {
            height: auto;
            order: 2;
        }

        .c-2 {
            padding-top: 30px;
            height: auto;
            order: 1;
        }

        .t2 {
            display: block;
        }



        .p1 {
            font-size: 16px;

        }

        .img-home2 img {
            margin-top: 100px;
            height: 200px;
        }

        .img-home3 img {
            margin-top: 120px;
            height: 160px;
        }

        .img-logo1 {
            height: 90px;
        }

    }

    @media (max-width: 576px) {
        .bg-1 {
            height: 800px;
        }

        p {
            font-size: 14px;
        }

        .img-home2 img {
            margin-top: 100px;
            display: none;
        }

        .img-home3 img {
            margin-top: 120px;
            display: none;
        }

        .home-content2 {
            padding: 100px 15% 0px 15%;
            margin-bottom: 40px;
        }

        .r-6 .c-2 {
            display: none;
        }

        .r-5 .c-1 {
            display: none;
        }
    }
</style>

@section('contents')
<div class="p-0 container-fluid" style="height: auto; position: relative;">
    <div class="p-0 container-fluid bg-1 bg-color-blue1"></div>
    <div class=" container-fluid isi-content text-center" style="width: 100%; height: auto; padding-bottom: 50px;">
        <div class="row r-1" style="">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-5 col c-1">
                <div class="home-content1">
                    <h2 style="padding-right: 15%;"><strong class="text-red1 t1">Laundry</strong> jadi lebih <strong class="text-blue3">Bersih</strong> dan <strong class="text-blue3">Wangi</strong></h2>
                    <p class="p1">Selalu mencari tempat laundry yang tidak hanya menjaga
                        pakaian bersih dan harum, tetapi juga menawarkan
                        pelayanan yang mudah? Bergabunglah dengan kami di
                        Laundry Space, di mana kebersihan adalah prioritas
                        utama. Kami berkomitmen untuk memberikan pengalaman
                        laundry yang tak tertandingi, dengan pakaian yang tetap bersih dan wangi sepanjang hari. Temukan kenyamanan dan kelembutan layanan kami, dan nikmati pakaian yang selalu siap untuk digunakan</p>
                    <div class="button"><button type="button" class="btn btn-danger btn-get-started">Get Started</button></div>
                </div>

            </div>
            <div class="col-xxl-7 col c-2">
                <h2 class="t2" style="padding-right: 15%; display: none;"><strong class="text-red1">Laundry</strong> jadi lebih <strong class="text-blue3">Bersih</strong> dan <strong class="text-blue3">Wangi</strong></h2>
                <div class="img-home1"> <img class="img1" src="{{asset('assets/images/img_home1.png')}}" alt=""> </div>
            </div>
        </div>
        <div class="row r-2">
            <div class="col">
                <div class="home-content2">
                    <h3 class="text-center">Cari Dengan Mudah</h3>
                    <p>Jika Anda mencari cara untuk menemukan layanan laundry yang tepat dengan mudah, Anda berada
                        di tempat yang tepat! Dalam dunia yang semakin sibuk, mencuci pakaian bisa menjadi tugas yang memakan waktu. Namun, dengan beberapa langkah sederhana,
                        Anda dapat dengan mudah menemukan layanan laundry yang sesuai dengan kebutuhan Anda.</p>
                </div>
            </div>
        </div>
        <div class="row" style="height: 100px;">
            <div class="col">
                <div class="home-content3" style="margin-top: 35px;">
                    <h3>Layanan Layanan</h3>
                </div>
            </div>
        </div>
        <div class="d-none row d-sm-flex" style="height: 400px;">
            <div class="col ">
                <div class=" home-content4 ">
                    <div class="img-ly1"><img src="{{asset('assets/images/imgly1.png')}}" alt=""></div>
                    <div>
                        <h4>Kiloan</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="home-content4">
                    <div class="img-ly2"><img src="{{asset('assets/images/imgly2.png')}}" alt=""></div>
                    <div>
                        <h4>Self Service</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="home-content4">
                    <div class="img-ly3"><img src="{{asset('assets/images/imgly3.png')}}" alt="" style="height: 150px;"></div>
                    <div>
                        <h4>Antar Jemput</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex row d-sm-none" style="height: 400px;">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="home-content4">
                            <div class="img-ly1"><img src="{{asset('assets/images/imgly1.png')}}" alt="" style="height: 150px;"></div>
                            <div>
                                <h4>Antar Jemput</h4>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-content4">
                            <div class="img-ly2"><img src="{{asset('assets/images/imgly2.png')}}" alt="" style="height: 150px;"></div>
                            <div>
                                <h4>Antar Jemput</h4>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-content4">
                            <div class="img-ly3"><img src="{{asset('assets/images/imgly3.png')}}" alt="" style="height: 150px;"></div>
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
        <div class="row r-5" style="height: auto;">
            <div class=" col-xxl-6 col-sm-6 c-1">
                <div class="img-home2"><img src="{{asset('assets/images/img_home2.png')}}" alt=""></div>
            </div>
            <div class="col-sm-6 col-xxl-6 col-12 c-2">
                <div><img class="img-logo1" src="{{asset('assets/images/logo_normal.png')}}" alt=""></div>
                <h4 style="margin-top: 20px;"><strong class="text-blue3">Laundry</strong> <strong class="text-red1">Space</strong></h4>
                <p class="p2">"Laundry Space, adalah lebih dari sekadar perusahaan laundry. Kami adalah mitra andal Anda dalam menjaga pakaian dan tekstil Anda tetap bersih, rapi, dan segar. Dengan komitmen kami untuk kualitas dan keamanan, kami menawarkan layanan laundry yang efisien dan praktis untuk memenuhi berbagai kebutuhan Anda.
                </p>
                <div class="btn-start" style="text-align: left; margin-top: 20px;">
                    <div style="" class="button"><button type="button" class="btn btn-danger btn-get-started">Get Started</button></div>
                </div>
            </div>
        </div>
        <div class="row r-6" style="height: auto;">
            <div class="col-sm-6 col-12 c-1" style="align-items: flex-start; border: 1px;">
                <div><img class="img-logo1" src="{{asset('assets/images/logo_normal.png')}}" alt=""></div>
                <h4 style="margin-top: 20px;"><strong class="text-blue3">Daftarkan Tempat</strong> <br><strong class="text-red1">Laundry </strong><strong class="text-blue3">Anda</strong></h4>
                <p class="">Apakah Anda memiliki bisnis laundry yang berkualitas tinggi dan ingin meningkatkan jangkauan pelanggan Anda? Bergabunglah dengan kami di Laundry Space!</p>
                <div class="btn-start" style="text-align: left; margin-top: 20px;">
                    <div style="" class="button"><button type="button" class="btn btn-danger btn-get-started">Get Started</button></div>
                </div>

            </div>
            <div class="col-sm-6 c-2" style="height: 0px;">
                <div class="img-home3"><img src="{{asset('assets/images/img_home3.png')}}" alt=""></div>
            </div>
        </div>



    </div>

</div>

@endsection
<script>
        
        const btn_start = document.getElementById('btn-start');

</script>