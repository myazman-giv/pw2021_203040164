<?php 
// menghubungkan dengan file php lainya
require 'php/functions.php';


if (isset($_GET['cari'])) {
    $keyword = $_GET ['keyword'];
    $sapiv = query("SELECT *FROM sapi WHERE
            jenis LIKE '%keyword%' ");
} else {
    $sapi = query("SELECT * FROM sapi");
}


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
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>

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
    <?php if (empty($sapi)) : ?>
        <tr>
            <td colspan="?">
                <h1>Data Tidak Ditenukan</h1>
            </td>
        </tr>
    <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($sapi as $cow) : ?>
        <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="php/ubah.php?id=<?= $cow['id'];?>"><button type="submit" name="tambah" type="button" class="btn btn-success" style="background-color:green; border-color:Azure; color:white">UBAH</button>
            <a href="php/hapus.php?id=<?= $cow['id'];?>" onclick="return confirm('Hapus Data??')"><button style="background-color:Crimson; border-color:Azure; color:white">HAPUS</button></a>
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
<?php endif; ?>
</table>
</body>
</html>