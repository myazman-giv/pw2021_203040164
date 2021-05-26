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

// cek apakah tombol tambah sudah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href ='index.php';
      </script>";
  } else {
    echo "<script>
    alert('data gagal ditambahkan');
    document.location.href ='index.php';
  </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>

  <h3>Form Tambah Data</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Jersey :
          <input type="text" name="jersey" autofocusb required>
        </label>
      </li>
      <li>
        <label>
          Ukuran :
          <input type="text" name="ukuran" required>
        </label>
      </li>
      <li>
        <label>
          Asal Pengiriman :
          <input type="text" name="asal" required>
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li><button type="submit" name="tambah">Tambah Data</button></li>
    </ul>

  </form>



</body>

</html>