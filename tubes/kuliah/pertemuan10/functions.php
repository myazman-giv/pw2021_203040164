<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 10 - 23 April 2021
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

function tambah($data)
{
  $conn = koneksi();

  $jersey = htmlspecialchars($data['jersey']);
  $ukuran = htmlspecialchars($data['ukuran']);
  $asal = htmlspecialchars($data['asal']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              jersey
            VALUES
              (null, '$jersey','$ukuran', '$asal','$harga','$gambar');
              ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>