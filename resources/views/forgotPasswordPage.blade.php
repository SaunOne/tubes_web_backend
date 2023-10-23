<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(162, 213, 242);
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 600px;
        }

        .card {
            width: 500px;
        }

        .card-header {
            font-size: 1.25rem;
            font-weight: 500;
            background-color: #007bff;
            color: #fff;
            margin-bottom: 30px;
        }

        .card-body {
            padding: 0 2.5rem;
        }

        img {
            width: 30%;
            height: 30%;
        }

        .card-text {
            padding: 0.75rem 0;
        }

        .form-control {
            margin: 0.75rem 0;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .d-flex {
            justify-content: space-between;
            margin-top: 1rem;
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 1200px){
            .container{
                max-width: 90vh;
            }
        }

        @media only screen and (max-width: 770px){
            .container{
                max-width: 68vh;
            }
        }

        @media only screen and (max-width: 400px){
            .container{
                max-width: 43vh;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card text-center">
            <div class="card-header h5 text-white bg-primary">Forgot Password?</div>
            <div class="card-body px-5">
                <img src="{{ asset('images/padlock.png') }}">
                <p class="card-text py-2">
                    Masukan Email, Nomor Telepon, atau Username dan kami akan mengirimkan link untuk kembali ke akun anda
                </p>
                <div class="form-outline">
                    <input type="email" id="typeEmail" class="form-control my-3" placeholder="Email"/>
                </div>
                <a href="#" class="btn btn-primary w-100">Reset password</a>
                <div class="d-flex justify-content-between mt-4">
                    <a class="" href="{{ url('/') }}">Login</a>
                    <a class="" href="{{ url('/registerPage') }}">Register</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>