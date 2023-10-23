<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(162, 213, 242);
        }

        .container {
            margin-top: 100px;
            background-color: white;
            border-radius: 15px;
            width: 700px;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
        }

        .btn-custom {
            background-color: rgb(27, 135, 78);
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
                max-width: 68vh;
            }
        }

        @media only screen and (max-width: 400px){
            .container{
                max-width: 30vh;
            }
        }
    </style>
</head>


<body>

<form onsubmit="return checkCredentials()">
        <div class="container py-3 px-4">
            <h1 class="mb-4 mt-4 text-center">
                Register
            </h1>
            <div class="row mb-2">
                <div class="col-md-8">
                    <label>
                        Nama
                    </label>
                    <input type="text" id="namaMahasiswa" class="form-control" placeholder="First Name" />
                </div>
                <div class="col-md-4">
                    <label style="font-weight: bold;">
                        
                    </label>
                    <input type="text" id="NIM" class="form-control" placeholder="Last Name" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <label>
                        Email
                    </label>
                    <input type="text" id="email" class="form-control" placeholder="user@email.com"/>
                </div>
                <div class="col-md-6">
                    <label>
                      <tr>
                        <td><strong>Jenis Kelamin</strong></td>
                        </br>
                        <td class="mt-5">
                            <input type="radio" id="laki" name="jk" value="Laki-laki"/>
                            <label for="laki">Laki-laki</label>
                            <input type="radio" id="perempuan" name="jk" value="Perempuan"/>
                            <label for="perempuan">Perempuan</label>
                        </td>
                      </tr>
                    </label>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label>
                        Nomor Telepon
                    </label>
                    <input type="number" id="namaMahasiswa" class="form-control" placeholder="08**********" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label style="font-weight: bold;">
                        Password
                    </label>
                    <input type="password" id="namaMahasiswa" class="form-control" placeholder="********" />
                </div>
            </div>
            
            <button type="reset" class="btn btn-danger btn-block mb-2">Reset</button>
            <a type="submit" class="btn btn-primary btn-block mb-2" href="{{ url('/') }}">Submit</a>
        </div>
    </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
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
  </script>
  </body>
</html>