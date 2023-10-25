@extends('admin/sidebar')

@section('content')

<div class="container px-4 py-2">
    <h1 class="mt-3 mb-2" id="accountTitle" style="color: white;">Data Account</h1>
    <div class=row>
        <div class="col-12 col-xl-4">
            <select class="py-1 w-75 form-control" name="yourDropdown" id="yourDropdown" laundry="laundry" user="user">
                <option value="option1">User</option>
                <option value="option2">Laundry</option>
            </select>            
        </div>
        <div class="col-12 col-xl-8">
            <div class="input-group">
                <input class="form-control rounded border-1 py-1" type="text" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                <div class="input-group-append">
                  <span class="input-group-text" id="search-addon"><i class="fas fa-search"></i></span>
                </div>
              </div>
        </div>
    </div>

    <div class="table-responsive mt-3">
        <table class="table table-hover table-warning">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Andi</td>
                    <td>andi12@yahoo.com</td>
                    <td>081312345678</td>
                    <td>Laki-laki</td>
                    <td><a href="#" class="text-primary link-opacity-100-hover cursor-pointer">Edit</a></td>
                    <td><a href="#" class="text-danger link-opacity-100-hover cursor-pointer">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Yanto</td>
                    <td>yanto66i@gmail.com</td>
                    <td>0858123456789</td>
                    <td>Laki-laki</td>
                    <td><a href="#" class="text-primary link-opacity-100-hover cursor-pointer">Edit</a></td>
                    <td><a href="#" class="text-danger link-opacity-100-hover cursor-pointer">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tini</td>
                    <td>tinit@facebook.com</td>
                    <td>081517237127</td>
                    <td>Perempuan</td>
                    <td><a href="#" class="text-primary link-opacity-100-hover cursor-pointer">Edit</a></td>
                    <td><a href="#" class="text-danger link-opacity-100-hover cursor-pointer">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Rini</td>
                    <td>rinii23@yahoo.com</td>
                    <td>0878182389453</td>
                    <td>Perempuan</td>
                    <td><a href="#" class="text-primary link-opacity-100-hover cursor-pointer">Edit</a></td>
                    <td><a href="#" class="text-danger link-opacity-100-hover cursor-pointer">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get a reference to the dropdown element
            var dropdown = document.getElementById('yourDropdown');

            // Get a reference to the h1 element
            var h1 = document.getElementById('accountTitle');

            // Add an event listener to the dropdown to update the h1 text
            dropdown.addEventListener('change', function() {
                if (dropdown.value === 'option1') {
                    h1.textContent = 'User Account';
                } else if (dropdown.value === 'option2') {
                    h1.textContent = 'Laundry Account';
                }
            });
        });
    </script>
@endsection