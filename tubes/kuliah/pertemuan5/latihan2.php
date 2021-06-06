<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 5 - 11 Maret 2021
php
*/
?><?php
    // pengulangan pada array
    // for / foreach
    $angka = [3, 4, 5, 17, 2, 6, 21, 11, 88, 12, 32];
    ?>
<!DOCTYPE html>

<html>

<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>


    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div calss="clear"></div>


    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div calss="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>




</body>

</html>