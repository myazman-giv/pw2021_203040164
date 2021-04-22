<?php 
// menghubungkan dengan file php lainya
require 'php/functions.php';
// melakukan query
$sapi = query("SELECT * FROM sapi")
?>
<?php
if (isset($_GET['cari'])) {
    $keyword = $_GET ['keyword'];
    $sapi = query("SELECT *FROM sapi WHERE
            jenis LIKE '%$keyword%' ");
} else {
    $sapi = query("SELECT * FROM sapi");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jual beli sapi kurban</title>
</head>
<body>
<h1 align="center">JUAL BELI SAPI KURBAN TAHUN 1442 HIJRIAH</h1>
<div>
    <a href="php/login.php"><button style="background-color:#00FFFF; border-color:Azure; color:white">Admin</button></a>
</div>
<form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" style="background-color:#7FFF00; border-color:Azure; color:white">Cari!</button>
    </form>
<?php if (empty($sapi)) : ?>
        <tr>
            <td colspan="?">
                <h1>Data Tidak Ditemukan</h1>
            </td>
        </tr>
<?php else : ?>
  <div class="container">
      <?php foreach ($sapi as $cow) : ?>
        <p class="jenis">
            <a href="php/detail.php?id=<?= $cow['id'] ?>">
              <?= $cow ["jenis"] ?>
            </a>
        </p>
      <?php endforeach; ?>
  </div>
<?php endif; ?>
</body>
</html>