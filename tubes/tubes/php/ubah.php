<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location:index.php");
  exit;
}


// amnbil id dari url
$id =  $_GET['id'];

$jrs = query("SELECT * FROM jersey WHERE id = $id");
// cek apakah tombol ubah sudah ditekan

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
        alert('data berhasil diubah');
        document.location.href ='index.php';
      </script>";
  } else {
    echo "data gagal diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <!-- bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="../img/favicon1.png" />
  <title>Ubah Data</title>
</head>

<body style="background-image:url(../img/5.png);">

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 style="text-align: center; color: aqua;">Form Ubah Data</h1>
      </div>
    </div>


    <div class="row">
      <div class="col text-center">
        <div class="card" style=" background-image:url(../img/5.png);">
          <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $jrs['id']; ?>">
            <li>
              <input type="hidden" name="gambar_lama" value="<?= $jrs['gambar']; ?>">
              <label>
                Gambar :
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                <img src="../img/<?= $jrs['gambar']; ?>" width="150" style="display: block;" class="img-preview">
              </label>
            </li>
            <div class="card-body card text-dark bg-light mb-3">
              <h5 class="card-title"><label>
                  Jersey :
                  <input type="text" name="jersey" autofocus required value="<?= $jrs['jersey']; ?>" style="text-align: center;">
                </label></h5>
              <h5 class="card-title"><label>
                  Ukuran :
                  <input type="text" name="ukuran" required value="<?= $jrs['ukuran']; ?>" style="text-align: center;">
                </label></h5>
              <h5 class="card-title"><label>
                  Asal Pengiriman :
                  <input type="text" name="asal" required value="<?= $jrs['asal']; ?>" style="text-align: center;">
                </label></h5>
              <h5 class="card-title"><label>
                  Harga :
                  <input type="text" name="harga" required value="<?= $jrs['harga']; ?>" style="text-align: center;">
                </label></h5>
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="index.php" class="btn btn-warning">Kembali</a>
                <button type="submit" name="ubah" class="btn btn-success">Ubah Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/script.js"></script>


</body>

</html>