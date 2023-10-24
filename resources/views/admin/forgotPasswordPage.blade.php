<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body {
            position: relative; /* Make the body a positioned container */
        }

        body::before {
            content: "";
            background-image: url('images/laundryDesignRoom.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            filter: blur(2px); /* Adjust the blur value as needed */
            position: fixed; /* Fix the pseudo-element to the viewport */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Place it behind the content */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 600px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
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
                max-width: 60vw;
            }
        }

        @media only screen and (max-width: 770px){
            .container{
                max-width: 70vw;
            }
        }

        @media only screen and (max-width: 414px){
            .container{
                max-width: 90vw;
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