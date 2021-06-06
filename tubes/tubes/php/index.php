<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
tugas Besar
php
*/
?><?php
  session_start();

  if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
  }

  require 'functions.php';
  $jersey = query("SELECT * FROM jersey");

  // ketika cari di klik
  if (isset($_POST['cari'])) {
    $jersey = cari($_POST['keyword']);
  }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <!-- bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- css-->
  <link rel="stylesheet" href="../tubes/css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../img/favicon1.png" />
  <title>Daftar Jersey</title>
</head>

<body style="background-image:url(../img/5.png);">


  <div class="navbar-fixed">
    <nav class="light-blue darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href=""><img src="../../img/lg.png" width="50px" style="position: absolute; top :-17px; "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger" style="text-decoration:none;"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="tambah.php" style="text-decoration:none;">Tambah Data</a></li>
            <li><a href="#jersey" style="text-decoration:none;">Jersey</a></li>
            <li><a href="logout.php" class="btn btn-outline-warning" style="color: whitesmoke;">logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- side nav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="tambah.php" style="text-decoration:none;">Tambah Data</a></li>
    <li><a href="#jersey" style="text-decoration:none;">Jersey</a></li>
    <li><a href="logout.php" class="btn btn-outline-warning" style="color:aqua; background-color:teal">logout</a></li>
  </ul>





  <div class="container" id="jersey">
    <div class="row">
      <div class="col text-center">
        <h1 style="text-align: center; color: aqua;">Daftar Jersey</h1>
        <hr style="color: aqua;">
        <form action="" method="POST" style="width: 400px;">
          <input type="text" name="keyword" size="40" placeholder="cari jersey..." autocomplete="off" autofocus class="keyword" style="color: white;">
          <button type="submit" name="cari" class="tombol-cari" style="position:absolute; left: -200px;">Cari!</button>
        </form>
      </div>
    </div>
    <?php if (empty($jersey)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style:italic;">Jersey tidak ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>
    <div class="row">
      <?php foreach ($jersey as $jrs) : ?>
        <div class="col-sm-6">
          <div class="card mb-5" style="max-width: 540px; background-image:url(../img/50.png);">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="../img/<?= $jrs['gambar']; ?>" width="200">
              </div>
              <div class="col-md-7">
                <div class="card-body"><br><br><br>
                  <h1 class="card-title"><?= $jrs['jersey']; ?></h1>
                  <a href="detail.php?id=<?= $jrs['id']; ?>" class="btn btn-info">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- footer -->
  <footer class="light-blue darken-4 text-center pb-3" style="color:yellow"><br>
    <p>Copyright © 2021 Mochamad Yazman Yazid</p>
    <a href="https://web.facebook.com/hana.yazman/"><i class="bi bi-facebook" style="font-size: 2rem; color :yellow"></i></a>
    <a href="https://github.com/myazman-giv"><i class="bi bi-github" style="font-size: 2rem; color :yellow"></i></a>
    <a href="https://www.instagram.com/yazmann_/"><i class="bi bi-instagram" style="font-size: 2rem; color :yellow"></i></a>
    <a href="https://twitter.com/myazman99?s=08"><i class="bi bi-twitter" style="font-size: 2rem; color :yellow"></i></a>
    <a href="https://youtube.com/channel/UCZhKBOMBPmZe8AQlwdk7C-g"><i class="bi bi-youtube" style="font-size: 2rem; color :yellow"></i></a>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/script.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 750,
      transition: 800,
      interval: 6000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll);
  </script>
</body>

</html>