@extends('admin/sidebar')

@section('content')
<div class="container px-4 py-2">
    <div class=row>
        <div class="col-12 col-md-4">
            <select class="py-1 w-75 form-control" name="yourDropdown" id="yourDropdown" laundry="laundry" user="user">
                <option value="option1">User</option>
                <option value="option2">Laundry</option>
            </select>            
        </div>
        <div class="col-12 col-md-8">
            <div class="input-group">
                <input class="form-control rounded border-1 py-1" type="text" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                <div class="input-group-append">
                  <span class="input-group-text" id="search-addon"><i class="fas fa-search"></i></span>
                </div>
              </div>
        </div>
    </div>

    <div class="container px-4 py-3 my-4 rounded" style="color: white; background-color: rgba(0, 0, 0, 0.4); border-radius:10px;">
        <h1>
            Create User
        </h1>
        <div class="row my-2">
            <label>
                Nama
            </label>
            <div class="col-8 col-md-8 col-lg-9">
                <input class="w-100 form-control" type="text" placeholder="First name">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
                <input class="w-100 form-control" type="text" placeholder="Last name">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12 col-md-6">
                <label for="email">Email</label>
                <input type="email" class="w-100 form-control" id="email" placeholder="user@email.com">
            </div>
            <div class="col-12 col-md-6">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <div class="d-flex align-items-center mt-2">
                    <input type="radio" id="laki" name="jk" value="Laki-laki">
                    <label class="mx-2" for="laki">Laki-laki</label>
                    <input class="mx-2" type="radio" id="perempuan" name="jk" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col">
                <label for="email">Nomor Telepon</label>
                <input type="number" class="w-100 form-control" id="nomorTelepon" placeholder="0813xxxxxxx">
            </div>
        </div>
        <div class="row my-2 mb-3">
            <div class="col">
                <label for="email">Password</label>
                <input type="password" class="w-100 form-control" id="nomorTelepon" placeholder="********">
            </div>
        </div>
        <button type="submit" class="btn btn-warning btn-block mb-4 btn-custom px-3">Add User</button>
    </div>
</div>
@endsection