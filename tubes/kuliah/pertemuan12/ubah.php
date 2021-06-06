<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 12 - 7 Mei 2021
php
*/
?><?php
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
  <title>Ubah Data</title>
</head>

<body>

  <h3>Form Ubah Data</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $jrs['id']; ?>">
    <ul>
      <li>
        <label>
          Jersey :
          <input type="text" name="jersey" autofocus required value="<?= $jrs['jersey']; ?>">
        </label>
      </li>
      <li>
        <label>
          Ukuran :
          <input type="text" name="ukuran" required value="<?= $jrs['ukuran']; ?>">
        </label>
      </li>
      <li>
        <label>
          Asal Pengiriman :
          <input type="text" name="asal" required value="<?= $jrs['asal']; ?>">
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required value="<?= $jrs['harga']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $jrs['gambar']; ?>">
        </label>
      </li>
      <li><button type="submit" name="ubah">Ubah Data</button></li>
    </ul>

  </form>



</body>

</html>