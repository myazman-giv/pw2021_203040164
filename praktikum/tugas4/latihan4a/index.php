<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 4
*/ 
?>

<?php 
// melakukan koneksi ke database 
$conn = mysqli_connect("localhost", "root", "");
// memilih database
mysqli_select_db($conn, "pw_tubes_203040164");
// melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM sapi");
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

<h1 class ="judul" align="center">JUAL BELI SAPI KURBAN TAHUN 1442 HIJRIAH</h1>
<table class="table" border="2" cellpadding="10" cellspacing="0" align="center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">GAMBAR</th>
      <th scope="col">JENIS</th>
      <th scope="col">KEUNGGULAN</th>
      <th scope="col">UMUR</th>
      <th scope="col">BOBOT</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <tbody>
    <?php while($cow = mysqli_fetch_assoc($result)) : ?>
        <tr>
        <td><?php echo $cow["id"]; ?></td>  
        <td><img src="img/<?= $cow ["gambar"];?>"></td>
        <td><?php echo $cow["jenis"]; ?></td>    
        <td><?php echo $cow["deskripsi"]; ?></td>  
        <td><?php echo $cow["umur"]; ?></td>  
        <td><?php echo $cow["bobot"]; ?></td>      
        <td><?php echo $cow["harga"]; ?></td>    
        </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</body>
</html>