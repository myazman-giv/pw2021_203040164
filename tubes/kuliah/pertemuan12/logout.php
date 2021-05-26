<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 12 - 7 Mei 2021
php
*/
?>

<?php
session_start();
session_destroy();
header("Location: Login.php");
exit;
?>