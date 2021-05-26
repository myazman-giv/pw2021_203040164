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
$mahasiswa = [["Yazman Yazid", "203040164", "Teknik Informatika", "myazman9b@gmail.com"],
            ["Oding Surading", "203040999", "Teknik Informatika", "odinglove@gmail.com"],
            ["Odang Markoah", "203040889", "Teknik Informatika", "odlove@gmail.com"]];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiwa</title>
</head>
<body>
    <h1>Daftar Mahasiwa</h1>

<?php foreach ($mahasiswa as $m) : ?>
<ul>
<?php foreach($m as $mhs) { ?>
    <li><div ><?php echo $mhs;?></div></li>
<?php } ?>
</ul>
<?php endforeach;?>
</body>
</html>