<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 11 - 30 April 2021
php
*/
?><?php

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
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
  }

  function hapus($id)
  {
    $conn = koneksi();
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
    $gambar = htmlspecialchars($data['gambar']);

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


  ?>