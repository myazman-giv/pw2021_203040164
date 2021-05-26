<?php 
require 'functions.php';

if (isset($_POST["register"])) {

    if(registrasi($_POST) > 0){
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href='login.php';
             </script>";
    } else {
        echo "<script>
              alert('Registrasi Gagal');
             </script>";
    }
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
<h3 style="text-align: center;">Registrasi</h3><hr>
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
         <button type="submit" name="register" class="btn btn-primary">REGISTER</button>
        </ul>
    </form>
</body>
</html>