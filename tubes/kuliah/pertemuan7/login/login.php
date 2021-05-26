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
// cek apakah tombul submit sudah di tekan
if(isset ($_POST["submit"]) ){
    // cek username 7 password
    if($_POST["username"] == "admin" && $_POST["password"] == "qwerty"){
    // jika benar , di dirrect ke halaman admin
    header("Location: admin.php");
    exit;
    } else {
    // jika salah maka akan tampil pesan kesalahan
    $erros = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if (isset($erros)) : ?>
    <p style="color: red;">username / pasword salah</p>
<?php endif;?>


<ul>
<form action="" method="post">
<li>
    <label for="username">username :</label>
    <input type="text" name="username" id="username">
</li>
<li>
    <label for="password">password :</label>
    <input type="password" name="password" id="password">
</li>
<li>
    <button type="submit" name="submit" >Login</button>
</li>

</form>
</ul>
</body>
</html>