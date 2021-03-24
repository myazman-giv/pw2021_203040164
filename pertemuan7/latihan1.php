<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 7 - 19 Maret 2021
php
*/ 
?>
<?php
// $_GET
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Jersey Sepakbola</h1>
<ul>
    <?php foreach($jersey as $jrs): ?>
            <li>
                <a href="latihan2.php?jersey=<?= $jrs["jersey"];?>
                &ukuran= <?= $jrs["ukuran"];?>
                &stok= <?= $jrs ["stok"];?>
                &asal=<?= $jrs["asal"];?>
                &aparel= <?= $jrs ["aparel"]?>
                &harga= <?= $jrs ["harga"];?>
                &gambar=<?= $jrs["gambar"]; ?>"">
                    <?= $jrs["jersey"];?>
                </a>
            </li>
    <?php endforeach; ?>
</ul> 
</body>
</html>
