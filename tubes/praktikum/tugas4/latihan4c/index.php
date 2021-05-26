<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 4
*/ 
?>

<?php 
// menghubungkan dengan file php lainya
require 'php/functions.php';
// melakukan query
$sapi = query("SELECT * FROM sapi")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jual beli sapi kurban</title>
</head>
<body>
<h1 align="center">JUAL BELI SAPI KURBAN TAHUN 1442 HIJRIAH</h1>
  <div class="container">
      <?php foreach ($sapi as $cow) : ?>
        <p class="jenis">
            <a href="php/detail.php?id=<?= $cow['id'] ?>">
              <?= $cow ["jenis"] ?>
            </a>
        </p>
      <?php endforeach; ?>
  </div>
</body>
</html>