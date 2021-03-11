<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 5 - 11 Maret 2021
php
*/ 
?>

<?php
// array
// variabel yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipedata yang berbeda
// pasangan antara key dan value
// key nya adalah index yang dimulai dari 0

// membuat array 
// cara lama
$hari = array ("senin","selasa", "rabu","kamis", "jumat","sabtu","minggu");

// cara baru
$bulan = ["januari", "februari","maret"];
$arr1 = [123, "string", true];

// menampilkan array
// avr_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($hari);

// menampilkan 1 elemen pada array

// echo "<br>";
// echo $hari[4];
// echo "<br>";
// echo $bulan[2];

// menambahkan elemen baru pada array 

var_dump($bulan);
$bulan[] = "april";
$bulan[] = "mei";
$bulan[] = "juni";
$bulan[] = "juli";
$bulan[] = "agustus";
$bulan[] = "september";
$bulan[] = "oktober";
$bulan[] = "november";
$bulan[] = "desember";
echo "<br>";
var_dump($bulan);


?>