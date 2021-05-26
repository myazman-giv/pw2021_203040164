<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 6 - 12 Maret 2021
php
*/ 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width :70px;
            height :70px;
            background-color : blue;
            text-align:center;
            line-height:70px;
            margin:2px;
            float:left;
            transition :1.5s;
            color: white;
        }
        .kotak:hover{
            transform : rotate(720deg);
            border-radius:75%;
        }
        .clear{
            clear : both;
        }
    </style>
</head>
<body>

<?php
$angka = [
    [14],
    [22, 2, 32, 3], 
    [11, 8, 7], 
    [13, 17, 21]
];
?>
<?php foreach($angka as $ang) : ?>
    <?php foreach($ang as $a ):?>
        <div class="kotak"><?php echo $a ?></div>
    <?php endforeach;?>
    <div class="clear"></div>
<?php endforeach;?>

</body>
</html>