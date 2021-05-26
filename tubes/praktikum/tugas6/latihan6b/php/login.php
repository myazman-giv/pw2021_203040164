<?php 
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login ke  halaman admin
if (isset($_SESSION['username'])) {
    header("Location:admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(),"SELECT *FROM user WHERE username = '$username'");
    // mencocokan username dan password
    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST ['username'];
            $_SESSION['hash'] = hash('sha256', $row ['id'], false);
        }
        if (hash ('sha256',$row ['id']) == $_SESSION['hash']) {
            header("Location:admin.php");
            die;
        }
        header("Location:admin.php");
        die;
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h3 style="text-align: center;">Login</h3><hr>
    <form action="" method="post" style="align-content: center;">
    <?php if (isset($error)): ?>
        <p style="color: red; font-style:italic">Username / Password salah !!!</p>
    <?php endif; ?>
        <ul align="center">
        <table align="center">
        <tr>
            <td><label for="username">username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
         </table>
          <div class="remember">
             <input type="checkbox" name="remember">
             <label for="remember">Remember me</label>
          </div>
         <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </ul>
        <div class="registrasi" align="center">
            <p>Belum punya akun ? Registrasi disini<a href="registrasi.php"><button class="btn btn-primary">Registrasi</button></a></p>   
        </div>
    </form>
</body>
</html>