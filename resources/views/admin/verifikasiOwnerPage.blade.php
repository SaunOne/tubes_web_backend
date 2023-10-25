@extends('admin/sidebar')

@section('content')
<div class="container px-4 py-2">
    <h1 style="color: white;">
        Verifikasi Laundry
    </h1>
    <div class="container px-4 py-2 rounded" style="color: white; background-color: rgba(0, 0, 0, 0.4); border-radius:10px;">
        <div class="row row-cols-1 row-cols-md-2 gx-3 gx-md-5 p-3">
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="row">
                        <div class="img-fluid col-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/profileLaundry.jpeg') }}" class="img-fluid rounded-circle" alt="Profile Picture" style="margin-right: -30px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body" style="max-width: auto;">
                                <h5 class="card-title my-0">Laundry A</h5>
                                <p class="card-text my-0"><small class="text-body-secondary">Owner A</small></p>
                                <p class="card-text my-1">Alamat: gang mawar no 7A Kledokan</p>
                                <p class="card-text my-1">No telp: 0813123456789</p>
                                <a class="btn btn-primary" onclick="verificationAlert()">Verifikasi</a>
                              </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <div class="row">
                        <div class="img-fluid col-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/profileLaundry.jpeg') }}" class="img-fluid rounded-circle" alt="Profile Picture" style="margin-right: -30px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body" style="max-width: auto;">
                                <h5 class="card-title my-0">Laundry B</h5>
                                <p class="card-text my-0"><small class="text-body-secondary">Owner B</small></p>
                                <p class="card-text my-1">Alamat: gang mawar no 7A Kledokan</p>
                                <p class="card-text my-1">No telp: 0813123456789</p>
                                <a class="btn btn-primary" onclick="verificationAlert()">Verifikasi</a>
                              </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <div class="row">
                        <div class="img-fluid col-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/profileLaundry.jpeg') }}" class="img-fluid rounded-circle" alt="Profile Picture" style="margin-right: -30px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body" style="max-width: auto;">
                                <h5 class="card-title my-0">Laundry C</h5>
                                <p class="card-text my-0"><small class="text-body-secondary">Owner C</small></p>
                                <p class="card-text my-1">Alamat: gang mawar no 7A Kledokan</p>
                                <p class="card-text my-1">No telp: 0813123456789</p>
                                <a class="btn btn-primary" onclick="verificationAlert()">Verifikasi</a>
                              </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <div class="row">
                        <div class="img-fluid col-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/profileLaundry.jpeg') }}" class="img-fluid rounded-circle" alt="Profile Picture" style="margin-right: -30px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body" style="max-width: auto;">
                                <h5 class="card-title my-0">Laundry D</h5>
                                <p class="card-text my-0"><small class="text-body-secondary">Owner D</small></p>
                                <p class="card-text my-1">Alamat: gang mawar no 7A Kledokan</p>
                                <p class="card-text my-1">No telp: 0813123456789</p>
                                <a class="btn btn-primary" onclick="verificationAlert()">Verifikasi</a>
                              </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <div class="row">
                        <div class="img-fluid col-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/profileLaundry.jpeg') }}" class="img-fluid rounded-circle" alt="Profile Picture" style="margin-right: -30px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body" style="max-width: auto;">
                                <h5 class="card-title my-0">Laundry E</h5>
                                <p class="card-text my-0"><small class="text-body-secondary">Owner E</small></p>
                                <p class="card-text my-1">Alamat: gang mawar no 7A Kledokan</p>
                                <p class="card-text my-1">No telp: 0813123456789</p>
                                <a class="btn btn-primary" onclick="verificationAlert()">Verifikasi</a>
                              </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <div class="row">
                        <div class="img-fluid col-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/profileLaundry.jpeg') }}" class="img-fluid rounded-circle" alt="Profile Picture" style="margin-right: -30px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body" style="max-width: auto;">
                                <h5 class="card-title my-0">Laundry F</h5>
                                <p class="card-text my-0"><small class="text-body-secondary">Owner F</small></p>
                                <p class="card-text my-1">Alamat: gang mawar no 7A Kledokan</p>
                                <p class="card-text my-1">No telp: 0813123456789</p>
                                <a class="btn btn-primary" onclick="verificationAlert()">Verifikasi</a>
                              </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<script>
    const verificationAlert = () => alert("Laundry terverifikasi!");
</script>

@endsection