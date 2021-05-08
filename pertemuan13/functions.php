<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 13 - 8 Mei 2021
php
*/
?>

<?php

function koneksi()
{
  // koneksi ke database
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar terpilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu!');
    //     </script>";
    return 'np.jpg';
  }

  // cek extensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('jangan upload selain gambar!');
          </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('jangan upload selain gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  //max 5mb = 5000000

  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran terlalu besar(max 5MB)!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $jersey = htmlspecialchars($data['jersey']);
  $ukuran = htmlspecialchars($data['ukuran']);
  $asal = htmlspecialchars($data['asal']);
  $harga = htmlspecialchars($data['harga']);
  //$gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO
              jersey
            VALUES
              (null, '$jersey','$ukuran', '$asal','$harga','$gambar');
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $jrs = query("SELECT * FROM jersey WHERE id = $id");
  if ($jrs['gambar'] != 'np.jpg') {
    unlink('img/' . $jrs['gambar']);
  }

  mysqli_query($conn, "DELETE FROM jersey WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $jersey = htmlspecialchars($data['jersey']);
  $ukuran = htmlspecialchars($data['ukuran']);
  $asal = htmlspecialchars($data['asal']);
  $harga = htmlspecialchars($data['harga']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'np.jpg') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE jersey SET 
              jersey = '$jersey',
              ukuran = '$ukuran',
              asal = '$asal',
              harga = '$harga',
              gambar = '$gambar'
              WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM jersey
              WHERE jersey LIKE '%$keyword%' OR
              asal LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika usernmae / password koseong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document,location.href='registrasi.php';
          </script>";

    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document,location.href='registrasi.php';
          </script>";

    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sama!');
            document,location.href='registrasi.php';
          </script>";

    return false;
  }

  //jika ingin membatasi password
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document,location.href='registrasi.php';
          </script>";

    return false;
  }

  //jika username dan password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke table user
  $query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

?>