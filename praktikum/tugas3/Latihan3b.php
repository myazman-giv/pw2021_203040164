<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 3 
php
*/ 
?>

<?php
 $nama = ["Mohamad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Daftar Pemain Bola</h1>
    <ol>
<?php foreach ($nama as $nm) : ?>

    <li><?php echo $nm;?></li>

<?php endforeach;?>
</ol>

<?php
 $pemain = ["Cristiano Ronaldo", "Lionel Messi","", "Mohamad Salah", "Neymar Jr","", "Zlatan Ibrahimovic"];

$pemain[2] = ("Luka Modric");
$pemain[5] = ("Sadio Mane");

?>

<h1>Daftar Pemain Bola Terkenal Baru</h1>
    <ol>
<?php foreach ($pemain as $player) : ?>
    <li><?php echo $player;?></li>

<?php endforeach;?>
</ol>
</body>
</html>
