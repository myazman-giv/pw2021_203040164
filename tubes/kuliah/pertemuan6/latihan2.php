<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 6 - 12 Maret 2021
php
*/ 
?>
<?php
// $mahasiswa = [
//     ["Yazman Yazid", "203040164", "Teknik Informatika", "myazman9b@gmail.com"],
//     ["Walter samuel", "203040999", "Pend Matematika", "wss@gmail.com"],
//     ["Akbar Dwi ", "203040889", "Teknik Sipil", "akbardn@gmail.com"]];

// array asosiatif
// definisinya sama seperti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$jersey = [
    [
        "jersey" => "Borusia Dortmund",
        "ukuran" => "L, XL", 
        "stok" =>"12",
        "asal" => "Jerman",
        "harga" => "$99",
        "aparel" => "Puma",
        "gambar" => "dortmund.jpg"
    ],
    [
        "jersey" => "Manchester City",
        "ukuran" => "L, XL", 
        "stok" =>"12",
        "asal" => "Jerman",
        "harga" => "$97",
        "aparel" => "Puma",
        "gambar" => "man city.jpg"
    ],
    [
        "jersey" => "AC Milan",
        "ukuran" => "L, XL", 
        "stok" =>"12",
        "asal" => "Jerman",
        "harga" => "$99",
        "aparel" => "Puma",
        "gambar" => "ac milan.jpg"
    ],
    [
        "jersey" => "Real Madrid",
        "ukuran" => "L, XL", 
        "stok" =>"12",
        "asal" => "Jerman",
        "harga" => "$99",
        "aparel" => "Adidas",
        "gambar" => "real madrid.jpg"
    ],
    [
        "jersey" => "Atletico Madrid",
        "ukuran" => "L, XL", 
        "stok" =>"12",
        "asal" => "Amerika",
        "aparel" => "Nike",
        "harga" => "$99",
        "gambar" => "atletico.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Jual beli jersey bola</title>
</head>
<body>
    <h1>Koleksi Jersey</h1>

    <?php foreach($jersey as $jrs) : ?>
    <ul>
        <li>
            <img src="img/<?= $jrs ["gambar"];?>">
        </li>
        <li>Jersey :<?php echo $jrs["jersey"];?></li>
        <li>Aparel : <?php echo $jrs["aparel"];?></li>
        <li>Ukuran : <?php echo $jrs["ukuran"];?></li>
        <li>Asal pengiriman : <?php echo $jrs["asal"];?></li>
        <li>Stok : <?php echo $jrs["stok"];?></li>
        <li>Harga : <?php echo $jrs["harga"];?></li>
    
    </ul>
    <?php endforeach;?>
</body>
</html>