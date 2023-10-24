<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
          height: auto;
          background-color: rgba(255, 255, 255, 0.95);
          border-radius: 15px;
          max-width: 700px;
          margin-top: 50px;
          box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
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
            max-width: 50vw;
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
    <div class="container p-3">
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
            } else if(username.trim()==="user" && password.trim()==="user"){
                alert("Login user!");
            }else if(username.trim()==="owner" && password.trim()==="owner"){
                window.location.href = "{{ url('/owner') }}";
                return false;
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