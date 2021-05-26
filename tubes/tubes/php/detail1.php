<?php
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
  <!-- icon Bootstrap-->
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
        <h1 style="text-align: center; color: aqua;">Detai Jersey
        </h1>
        <hr style="color: aqua;"><br>
      </div>
    </div>
    <div class=" row">
      <div class="col">
        <div class="card mb-3" style="background-image:url(../img/223.png);">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="../img/<?= $jrs["gambar"]; ?>" width="457"><br>

            </div>
            <div class="col-md-6 ">
              <div class="card-body">
                <h1 class="card-title"><?= $jrs["jersey"]; ?></h1>
                <hr style="width: 480px;"><br><br><br>
                <h6> <small class="text-muted">Detail Jersey : </small></h6>
                <h4>Ukuran : <button type="button" class="btn btn-outline-secondary">XL</button><button type="button" class="btn btn-outline-secondary">L</button><button type="button" class="btn btn-outline-secondary">M</button><button type="button" class="btn btn-outline-secondary">S</button></h4>
                <h4>Asal : <?= $jrs["asal"]; ?></h4>
                <h4>Harga : <?= $jrs["harga"]; ?></h4><br>
                <h6> <small class="text-muted">Opsi Pengiriman : <img src="../img/ongkir.png" width="75px"></small></h6>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 300px;">
                  <option selected><small class="text-muted">Pengiriman Ke </small></option>
                  <option value="1">Jakarta</option>
                  <option value="2">Bandung</option>
                  <option value="3">Garut</option>
                  <option value="4">Yogyakarta</option>
                  <option value="5">Bali</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 300px;">
                  <option selected> <small class="text-muted">Opsi Pengiriman</small></option>
                  <option value="1">COD</option>
                  <option value="2">JNE</option>
                  <option value="3">JNT</option>
                  <option value="4">Sicepat Exspres</option>
                  <option value="5">TIKI</option>
                </select>
                <br><img src="../img/21.png" width="400"><br><br><br>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <button type="button" class="btn btn-info"><i class="bi bi-chat-right-text"> Chat dengan Penjual </i></button>
                  <button type="button" class="btn btn-secondary"><i class="bi bi-cart-plus"> Masukan Keranjang </i></button>
                  <button type="button" class="btn btn-success"><i class="bi bi-bag"> Beli Sekarang </i></button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div><a href="../index.php" class="btn btn-warning"><i class="bi bi-arrow-90deg-left"> kembali </i></a>
  </div>



</body>

</html>