<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 13 - 8 Mei 2021
php
*/
?><?php
  session_start();
  session_destroy();
  header("Location: Login.php");
  exit;
  ?>