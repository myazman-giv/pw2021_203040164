<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 4 - 1 Maret 2021
Belajar Mengenai Function
*/
?><?php
    function salam($waktu = "Datang", $nama = "Admin")
    {
        return "Selamat $waktu, $nama";
    }

    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam(); ?></h1>
</body>

</html>