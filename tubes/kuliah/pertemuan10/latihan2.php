<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 10 - 23 April 2021
php
*/
?><?php
  require 'functions.php';
  $jersey = query("SELECT * FROM jersey");
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>

<body>
  <h3>Koleksi Jersey</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Jersey</th>
      <th>Ukuran</th>
      <th>Asal Pengiriman</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($jersey as $jrs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $jrs['gambar']; ?>" width="60"></td>
        <td><?= $jrs['jersey']; ?></td>
        <td><?= $jrs['ukuran']; ?></td>
        <td><?= $jrs['asal']; ?></td>
        <td><?= $jrs['harga']; ?></td>
        <td>
          <a href="">ubah</a> |<a href="">hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>