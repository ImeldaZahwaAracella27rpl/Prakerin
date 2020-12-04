<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login-Prakerin</title>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <style type="text/css">

        body {
        background: url(img/template3.png) no-repeat fixed;
          -webkit-background-size: 100% 100%;
          -moz-background-size: 100% 100%;
          -o-background-size: 100% 100%;
          background-size: 100% 100%;
        }

        </style>

</head>

<body>
  <?php if (Session:: has("message")): ?>
      <div class="alert alert-dismissible alert-danger">
          {{ Session::get("message") }}
          <span class="close" data-dismiss="alert">&times;</span>
      </div>
  <?php endif; ?>

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="bg-light shadow-lg my-5">
          <div class="card-body ">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="p-3">
                  <div class="text-center">
                    <h1 class="h1 text-gray-900 mb-4">PRAKERIN</h1>
                  </div>
              
                  <form id="sign_in" action="{{ url('login/cek') }}" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="user_name" placeholder="Username"> 
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                  </div>
                  <input type="SUBMIT" class="btn btn-block btn-sm btn-dark" value="Login"/>
                  <br>
                  don't have an account yet?
                  <a href="http://localhost/prakerin/public/registrasi" class="btn btn-link btn-sm ">Register!</a>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
