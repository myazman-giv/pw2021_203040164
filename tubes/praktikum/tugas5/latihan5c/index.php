<?php 
// menghubungkan dengan file php lainya
require 'php/functions.php';
// melakukan query
$sapi = query("SELECT * FROM sapi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jual beli sapi kurban</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="add">
        <a href="php/tambah.php"><button style="background-color:#008B8B; border-color:Azure; color:white">Tambah Data</button></a>
    </div>

<h1 class ="judul" align="center">JUAL BELI SAPI KURBAN TAHUN 1442 HIJRIAH</h1>
<table class="table" border="2" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>NO</th>
      <th>OPSI</th>
      <th>GAMBAR</th>
      <th>JENIS</th>
      <th>KEUNGGULAN</th>
      <th>UMUR</th>
      <th>BOBOT</th>
      <th>HARGA</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($sapi as $cow) : ?>
        <tr>
        <td><?= $i; ?></td>
        <td>
            <a href=""><button style="background-color:green; border-color:Azure; color:white">UBAH</button></a>
            <a href="php/hapus.php?id=<?= $cow['id']?>" onclick="return confirm('Hapus Data??')"><button style="background-color:Crimson; border-color:Azure; color:white">HAPUS</button></a>
        </td>  
        <td><img src="img/<?= $cow ["gambar"];?>"></td>
        <td><?php echo $cow["jenis"]; ?></td>    
        <td><?php echo $cow["deskripsi"]; ?></td>  
        <td><?php echo $cow["umur"]; ?></td>  
        <td><?php echo $cow["bobot"]; ?></td>      
        <td><?php echo $cow["harga"]; ?></td>  
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>