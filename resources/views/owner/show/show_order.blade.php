@extends('../owner/order')


@section('show_data')



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>Input Detail Pesanan</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="recipient-name" value="Yosa Bagas">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Durasi</label>
                            <div style="width: 100%;" class="dropdown">

                                <button  style="width: 100%; background-color: white; color: black; text-align: start;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilih
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="mb-3" style="">
                                <label for="recipient-name" class="col-form-label">Berat (gram)</label>
                                <input type="number" class="form-control" id="recipient-name">
                            </div>
                        </div>

                    </div>


                    <div class="mb-3">

                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tambahan:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button style="width: 100%; background-color: #07689F;" type="button" class="btn btn-primary">Input</button>
            </div>
        </div>
    </div>
</div>

<div class="col box-content2 " style="overflow: auto;border: #07689F; height: 80vh; display: block;" id="order_id" >
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
                @if($i % 3 == 0)
                <div class="col-xxl-4 col-xl-4  card_detail" style=" text-align: start;">
                    <h4 class="card_title">
                        Detail Pesanan
                    </h4>
                    <p class="card_desc" style="text-align: justify;">
                        Tanggal Dipesan : 17-Oct-2023 12:00:00
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Durasi <Strong>Express</Strong>
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Berat : 2 kg
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Tambahan : Selimut,Jaket
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Total Harga : Rp50.000
                    </p>

                </div>
                @else
                <div class="col-xxl-4 col-xl-4  input_detail" style="display: flex; flex-direction: column; text-align: start; justify-content: center; align-items: center;">
                    <h4 class="card_title">
                        Detail Pesanan
                    </h4>
                    <button style="background-color: #07689F;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Input Detail</button>

                </div>
                @endif
            </div>
    </div>
    @endfor
</div>
</div>

<!-- proses id -->
<div class="col box-content2 " style="overflow: auto;border: #07689F; height: 80vh; display: none;" id="proses_id" >
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
                        <a href="" class="card_size-btn">Ready</a>
                        <div style="font-size: 14px;font-weight: bold; margin-right: 0px;">Dead Line 9 Oct 2023</div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4  card_detail" style="text-align: start;">
                    <h4 class="card_title">
                        Detail Pesanan
                    </h4>
                    <p class="card_desc" style="text-align: justify;">
                        Tanggal Dipesan : 17-Oct-2023 12:00:00
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Durasi <Strong>Express</Strong>
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Berat : 2 kg
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Tambahan : Selimut,Jaket
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Total Harga : Rp50.000
                    </p>

                </div>
            </div>
    </div>
    @endfor
</div>
</div>

<!-- done_id -->

<div class="col box-content2 " style="overflow: auto;border: #07689F; height: 80vh; display: none;" id="done_id" >
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
                        <a style="background-color: green;" href="" class="card_size-btn">Finish</a>
                        <div style="margin-right: 0px; font-size: 14px; font-weight: bold ;">Due Date 21 Oct 2023</div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4  card_detail" style="text-align: start;">
                    <h4 class="card_title">
                        Detail Pesanan
                    </h4>
                    <p class="card_desc" style="text-align: justify;">
                        Tanggal Dipesan : 17-Oct-2023 12:00:00
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Durasi <Strong>Express</Strong>
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Berat : 2 kg
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Tambahan : Selimut,Jaket
                    </p>
                    <p class="card_desc" style="text-align: justify;">
                        Total Harga : Rp50.000
                    </p>

                </div>
            </div>
    </div>
    @endfor
</div>
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nav1 = document.getElementById('list_1');
        const nav2 = document.getElementById('list_2');
        const nav3 = document.getElementById('list_3');
        const order = document.getElementById('order_id');
        const proses = document.getElementById('proses_id');
        const done = document.getElementById('done_id');
     

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
