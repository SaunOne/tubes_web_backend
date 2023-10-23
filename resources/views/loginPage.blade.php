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
          background-color: white;
          border-radius: 15px;
          max-width: 700px;
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
      }

      @media only screen and (max-width: 1200px){
        .container{
            max-width: 90vh;
        }
      }

      @media only screen and (max-width: 770px){
        .container{
            width: 68vh;
        }
      }

      @media only screen and (max-width: 400px){
        .container{
            width: 30vh;
        }
      }
  </style>
</head>
<body style="background-color: rgb(162,213,242);">

    <div class="container my-5 p-3">
      <h1>LOGIN</h1>
      <form onsubmit="return checkCredentials()">
          <div class="form-outline mb-4">
              <label class="form-label" for="username">Email</label>
              <input type="text" id="username" class="form-control" placeholder="Enter Email" />
          </div>

          <div class="form-outline mb-2">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Enter Password" />
          </div>

          <div class="row mb-4 ">
            <div class="col d-flex justify-content-end">
              <div class="form-check" style="font-size:13px;">
                <label class="form-check-label" for="form2Example31"> Belum punya akun? Register <a href="{{ url('/registerPage') }}">di sini</a> </label>
              </div>
            </div>

          <div class="row mb-4 mt-4">
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>
          </div>

          <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-custom mb-2">Submit</button>
          </div>

          <div class="text-center mb-4">
              <a href="{{ url('/forgotPasswordPage') }}" onclick="forgotAlert()">Forgot password?</a>
          </div>
      </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function checkCredentials() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === "admin" && password === "admin") {
                window.location.href = "{{ url('/showDataUserPage') }}";
                return false; 
            return true;
            } else if(username.trim()==="user" || password.trim()==="user"){
                alert("Login user!");
            }else if(username.trim()==="" || password.trim()===""){
                alert("Username/password cannot be empty");
            }else{
            alert("Invalid username or password. Please try again.");
                return false;
            }
        }

        const forgotAlert = () => alert("ADMIN\nUsername: admin  \nPassword: admin \n\n USER\nUsername: user  \nPassword: user");
    </script>

  </body>
</html>