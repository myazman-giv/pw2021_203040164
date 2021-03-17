<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 3
*/ 
?>
<?php
$pemain = ["Cristiano Ronaldo" => "Juventus",
            "Lionel Messi" => "Barcelona",
            "Luka Modric" => "Real Madrid",
            "Mohamad Salah" => "Liverpol",
            "Neymar Jr" => "Paris Saint Germany",
            "Sadio Mane" => "Liverpol",
            "Zlatan Ibrahimovic" => "AC Milan"];

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
            .border{
                width: 300px;
                border-style: solid;
                border-width: 1px;
            }
        </style>
</head>
<body class="border">
        <h3 >Daftar Pemain Bola Terkenal Baru</h3>
        <?php foreach($pemain as $pm =>$pmn) : ?>
        <?php echo "$pm : $pmn" ?>
        <?php echo "<br/>" ; ?>
        <?php endforeach;?>
</body>
</html>