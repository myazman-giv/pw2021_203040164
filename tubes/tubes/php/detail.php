<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// query jersey berdasarkan id
$jrs = query("SELECT * FROM jersey WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="../img/favicon1.png" />
  <title>Detail Jersey</title>
</head>

<body style="background-image:url(../img/5.png);">

  <div class="container">
    <div class="row">
      <div class="col text-center"><br>
        <h3 style="text-align: center; color: aqua;">Selamat Datang di Halaman Detai Jersey Untuk Admin
        </h3>
        <hr style="color: aqua;"><br><br>
      </div>
    </div>
    <div class=" row">
      <div class="col">
        <div class="card mb-3" style="background-image:url(../img/223.png);">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="../img/<?= $jrs["gambar"]; ?>" width="457">
            </div>
            <div class="col-md-6 ">
              <div class="card-body">
                <h1 class="card-title"><?= $jrs["jersey"]; ?></h1>
                <hr style="width: 480px;"><br><br><br>
                <h6> <small class="text-muted">Detail Jersey : </small></h6>
                <h4>Ukuran : <?= $jrs["ukuran"]; ?></h4>
                <h4>Asal : <?= $jrs["asal"]; ?></h4>
                <h4>Harga : <?= $jrs["harga"]; ?></h4><br>
                <a href="ubah.php?id=<?= $jrs['id']; ?>" class="btn btn-info"><i class="bi bi-arrow-left-right"> </i>ubah</a>
                <a href="hapus.php?id=<?= $jrs['id']; ?>" onclick="return confirm ('apakah anda yakin');" class="btn btn-danger"><i class="bi bi-trash"> </i>hapus</a>
                <br><br><br><br><img src="../img/21.png" width="400"><br><br><br>
                <a href="index.php" class="btn btn-warning"><i class="bi bi-arrow-90deg-left"> Kembali ke Halaman sebelumnya</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</body>

</html>