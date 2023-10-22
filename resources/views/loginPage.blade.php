<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body {
          background-color: rgb(162, 213, 242);
      }

      .container {
          height: auto;
          width: 500px;
          padding-top: 50px;
          padding-left: 30px;
          padding-right: 30px;
          margin-top: 100px;
          background-color: white;
          border-radius: 15px;
      }

      h1 {
          text-align: center;
          font-weight: bold;
          color: rgb(232, 70, 52);
          margin-bottom: 30px;
      }

      .form-outline {
          font-weight: bold;
      }

      .form-check {
          font-size: 13px;
      }

      .btn-custom {
          background-color: rgb(2, 105, 161);
          color: white;
          border: none;
          padding-left: 195px;
          padding-right: 195px;
      }

      .justify-content-center {
          text-align: center;
          margin-top: -15px;
      }
  </style>
</head>
<body style="background-color: rgb(162,213,242);">

    <div class="container">
      <h1>LOGIN</h1>
      <form onsubmit="return checkCredentials()">
          <div class="form-outline mb-4">
              <label class="form-label" for="username">Username</label>
              <input type="text" id="username" class="form-control" placeholder="Enter Username" />
          </div>

          <div class="form-outline mb-2">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Enter Password" />
          </div>

          <div class="row mb-4 ">
            <div class="col d-flex justify-content-end">
              <div class="form-check" style="font-size:13px;">
                <label class="form-check-label justify-content-end" for="form2Example31"> Belum punya akun? Register <a href="{{ url('/registerPage') }}">di sini</a> </label>
              </div>
            </div>

          <div class="row mb-4 mt-4">
            <div class="col d-flex">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center align-items-center">
              <a href="{{ url('/showDataUserPage') }}" type="submit" class="btn btn-primary btn-block mb-4 btn-custom">Submit</a>
          </div>

          <div class="justify-content-center mb-4">
              <a href="{{ url('/forgotPasswordPage') }}" onclick="forgotAlert()">Forgot password?</a>
          </div>
      </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  {{-- <script>
      function checkCredentials() {
          const username = document.getElementById("username").value;
          const password = document.getElementById("password").value;

          if (username === "yerico elwido" && password === "210711116") {
              alert("Login successful!");
              return true;
          } else if(username.trim()==="" || password.trim()===""){
              alert("Username/password cannot be empty");
          }else {
              alert("Invalid username or password. Please try again.");
              return false;
          }
      }

      const forgotAlert = () => alert("Username: yerico elwido \nPassword: 210711116");
  </script> --}}
  </body>
</html>