<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 11 - 30 April 2021
php
*/
?>

<?php
require 'functions.php';
$jersey = query("SELECT * FROM jersey");

// ketika cari di klik
if (isset($_POST['cari'])) {
  $jersey = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Jersey</title>
</head>

<body>
  <h3>Koleksi Jersey</h3>

  <a href="tambah.php">Tambah data</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keywoard pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Jersey</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($jersey)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style:italic;">Jersey tidak ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>


    <?php $i = 1; ?>
    <?php foreach ($jersey as $jrs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $jrs['gambar']; ?>" width="60"></td>
        <td><?= $jrs['jersey']; ?></td>
        <td>
          <a href="detail.php?id=<?= $jrs['id']; ?>">Lihat Detail</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>