<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
tugas Besar
php
*/
?><?php
  require 'functions.php';

  if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
      echo "<script>
              alert('user telah berhasil ditambahkan, silahkan login');
              document,location.href='login.php';
            </script>";
    } else {
      echo 'user gagal ditambahkan!';
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="../img/favicon1.png" />
  <title>Registrasi</title>
</head>

<body style="background-image:url(../img/5.png);">
  <div class="container">
    <h1 style="text-align: center; color: aqua;">Selamat Datang di Halaman Registrasi</h1>
    <hr style="color: aqua;"><br>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <div class="card" style="background-image:url(../img/50.png);">
          <img src="../img/reg.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" align="center">Registrasi</h5>
            <div class="container">
              <div class="row" align="center">
                <form action="" method="POST">
                  <ul>
                    <div class="container">
                      <label>Username : <br>
                        <input type="text" name="username" autofocus autocomplete="off" required></label>
                    </div>
                    <div class="container">
                      <label>Password : <br>
                        <input type="password" name="password1" required></label>
                    </div>
                    <div class="container">
                      <label>Konfirmasi Password : <br>
                        <input type="password" name="password2" required></label>
                    </div><br><br>
                    <div class="container">
                      <button type="submit" name="registrasi" class="btn btn-success"><i class="bi bi-person-plus-fill"> Registrasi</i></button><br><br>
                      <a href="login.php" class="btn btn-warning" style="color:whitesmoke"><i class="bi bi-arrow-90deg-left"> Back</i></a>
                    </div>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>