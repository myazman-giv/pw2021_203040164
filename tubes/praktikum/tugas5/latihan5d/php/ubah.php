<?php 
require'functions.php';

$id = $_GET['id'];
$cow = query("SELECT * FROM sapi WHERE id = $id")[0];

if (isset($_POST['ubah'])){
    if(ubah($_POST) > 0) {
        echo "<script>
                alert ('Data Berhasil Diubah');
                document.location.href = '../index.php';
            </script>";
    } else {
        echo "<script>
                alert ('Data Gagal Diubah');
                document.location.href = '../index.php';
            </script>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title >Ubah Data</title>
</head>
<body >
    <h3 style="text-align: center;">Form Ubah Data</h3><hr>
    <form action="" method="post" style="align-content: center;">
        <ul align="center">
                <label for="gambar">Gambar : </label><br>
                <input type="file" name="gambar" id="gambar" required value="<?= $cow['gambar'];?>"><br><br>
                <label for="jenis">Jenis : </label><br>
                <select name="jenis" id="jenis" required>
                    <option value="">---------- Pilih Jenis ----------</option>
                    <option value="Sapi Aceh">Sapi Aceh</option>
                    <option value="Sapi Angus">Sapi Angus</option>
                    <option value="Sapi Bali">Sapi Bali</option>
                    <option value="Sapi Belgian Blue">Sapi Belgian Blue</option>
                    <option value="Sapi Brahman">Sapi Brahman</option>
                    <option value="Sapi Brangus">Sapi Brangus</option>
                    <option value="Sapi Devon">Sapi Devon</option>
                    <option value="Sapi Limosin">Sapi Limosin</option>
                    <option value="Sapi Madura">Sapi Madura</option>
                    <option value="Sapi Peranakan Ongole">Sapi Peranakan Ongole</option>
                    <option value="Sapi Simental">Sapi Simental</option>
                </select><br><br>
                <label for="deskripsi">Deskripsi : </label><br>
                <input type="textarea" name="deskripsi" id="deskripsi" required value="<?= $cow['deskripsi'];?>"><br><br>
                <label for="umur">Umur : </label><br>
                <input type="text" name="umur" id="umur" required value="<?= $cow['umur'];?>"><br><br>
                <label for="bobot">Bobot : </label><br>
                <input type="text" name="bobot" id="bobot" required value="<?= $cow['bobot'];?>"><br><br>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $cow['harga'];?>"><br><br>
            <br>
            <button type="submit" name="tambah" type="button" class="btn btn-success">Tambah Data</button>
                <a href="../index.php"><button type="button" class="btn btn-warning">Kembali</button></a>
        </ul>
    </form>
</body>
</html>