<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
tugas Besar
php
*/
?><?php
  session_start();

  if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
  }
  require 'functions.php';

  // ketika login ditekan
  if (isset($_POST['login'])) {
    $login = login($_POST);
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
  <title>Login</title>
</head>

<body style="background-image:url(../img/5.png);">
  <div class="container">
    <h1 style="text-align: center; color: aqua;">Selamat Datang di Halaman Login</h1>
    <hr style="color: aqua;">
    <br><br>
    <?php if (isset($login['error'])) : ?>
      <p style="color: red; font-style:italic"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <div class="card" style="background-image:url(../img/50.png);">
          <img src="../img/log.jpg" class="card-img-top" alt="..." width="50px">
          <div class="card-body">
            <h5 class="card-title" align="center">Login</h5>
            <div class="container">
              <div class="row" align="center">
                <form action="" method="POST">
                  <ul>
                    <div class="container">
                      <label>
                        Username : <br>
                        <input type="text" name="username" autofocus autocomplete="off" required>
                      </label>
                    </div>
                    <label>
                      Password : <br>
                      <input type="password" name="password" required>
                    </label>
                    <br>
                    <br>
                    <button type="submit" name="login" class="btn btn-success"><i class="bi bi-box-arrow-right"> login</i></button>
                    <a href="registrasi.php" class="btn btn-warning" style="color: whitesmoke;"><i class="bi bi-person-plus-fill"> registrasi</i></a><br><br>
                    <a href="../index.php" class="btn btn-info" style="color: whitesmoke;"><i class="bi bi-arrow-90deg-left"> Back</i></a>
                    <br><br>
                  </ul>
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