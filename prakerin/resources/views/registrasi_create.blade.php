<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register-Prakerin</title>

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

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="bg-light shadow-lg my-5">
          <div class="card-body ">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="p-3">
                  <div class="text-center">
                    <h1 class="h1 text-gray-900 mb-4">REGISTRASI</h1>
                  </div>
                 
                <form action="{{ route('registrasi.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-sm">NIK</button>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan nik...">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-sm">USERNAME</button>
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Masukkan username...">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-sm">PASSWORD</button>
                    <input type="password" size="50" class="form-control form-control-user" name="password" placeholder="Masukkan password...">
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-dark btn-sm">ROLE ID</button>
                    <input type="text" size="50" class="form-control" id="roleId" name="roleId" placeholder="Masukkan roleId...">
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-dark btn-sm">STATUS</button>
                    <input type="text" size="50" class="form-control" id="status" name="status" placeholder="Masukkan status...">
                </div>
                <input type="SUBMIT" class="btn btn-block btn-sm btn-info" value="Registrasi"/>
                <a href="http://localhost/prakerin/public/login" class="btn btn-block btn-sm btn-danger">Cancel</a>
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
