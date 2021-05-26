<?php

require 'php/functions.php';
$jersey = query("SELECT * FROM jersey");

// ketika cari di klik
if (isset($_POST['cari'])) {
  $jersey = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- css-->
  <link rel="stylesheet" href="../tubes/css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../img/favicon1.png" />
  <title>Halaman Utama</title>
</head>

<body style="background-image:url(img/5.png);">
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="light-blue darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php"><img src="../img/lg.png" width="50px" style="position: absolute; top :-17px; "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger" style="text-decoration:none;"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#welcome" style="text-decoration:none;">Welcome</a></li>
            <li><a href="#partner" style="text-decoration:none;">Partner</a></li>
            <li><a href="#jersey" style="text-decoration:none;">Jersey</a></li>
            <li><a href="#tiket" style="text-decoration:none;">UCL Final Ticket</a></li>
            <li><a href="../index.html" style="text-decoration:none;">Back</a></li>
            <li><a href="php/login.php" class="btn btn-outline-info" style="color: whitesmoke;">login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- side nav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#welcome" style="text-decoration:none;">Welcome</a></li>
    <li><a href="#partner" style="text-decoration:none;">Partner</a></li>
    <li><a href="#jersey" style="text-decoration:none;">Jersey</a></li>
    <li><a href="#tiket" style="text-decoration:none;">UCL Final Ticket</a></li>
    <li><a href="php/login.php" class="btn btn-info" style="color: whitesmoke;">login</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="../img/d.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h1 class="light: yellow-text">Club and Country Jersey Available</h1>
          <hr>
          <h3 class="light: text-blue darken-3">There are jersey clubs from top European clubs and top countries that have subscribed to the world cup
          </h3>
        </div>
      </li>
      <li>
        <img src="../img/a.jpeg"> <!-- random image -->
        <div class="caption center-align">
          <h1 class="light: light-blue-text">Early Month Discount</h1>
          <hr>
          <h3 class="light grey-text text-lighten-3">There is a discount for every purchase above IDR 5,000,000,
            <br>
            which is a discount of 10 - 15%
          </h3>
        </div>
      </li>
      <li>
        <img src="../img/b.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h1 class="light:  indigo-text">Free ticket for those of you who are visiting for the first time</h1>
          <hr>
          <h3 class="light grey-text text-lighten-3">There is a free UCL final ticket for those of you who are
            visiting our website for the first time, please claim the ticket below</h3>
        </div>
      </li>
      <li>
        <img src="../img/c.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h1 class="light: lime-text">Proud to wear the original jersey</h1>
          <hr>
          <h3 class="light grey-text text-lighten-3">By buying the original club and country jersey you will
            help the club financially directly</h3>
        </div>
      </li>
    </ul>
  </div>
  <br><br><br>

  <!-- welcome -->

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="center light: light-blue-text text-darken-3" id="welcome">Welcome</h1>
        <hr style="color: aqua;">
      </div>
    </div>
    <div class="row">
      <div class="col light-blue-text">
        <h3>Welcome to our website</h3><br>
        <p>welcome to the trusted online jersey shopping website, here there are various kinds of original
          jersey from the world's top clubs and countries which are presented with full of attractive discounts
          and promo promos that can drain your wallet, don't visit our website if your domoet is thin because we
          provide international quality jersey</p>
      </div>
      <div class="col text-center">
        <img src="../img/logo.png" style="width: 200px;">
      </div>
    </div>
  </div>

  <br><br><br>


  <!-- paralax -->
  <div id="partner" class="parallax-container">
    <div class="parallax"><img src="../img/prlx.jpg"></div>

    <div class="container partner scrollspy"><br>
      <h1 class="center light: light-blue-text text-darken-3">Our Partner</h1>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="../img/ad.png">
        </div>
        <div class=" col m4 s12 center">
          <img src="../img/pm.png">
        </div>
        <div class=" col m4 s12 center">
          <img src="../img/nk.png">
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="center light: light-blue-text text-darken-3" id="jersey">Jersey List</h1>
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
          <h3 style="color: red; font-style:italic;">Jersey tidak ditemukan</h3>
        </td>
      </tr>
    <?php endif; ?>

    <!-- daftar jersey -->
    <div class="row">
      <?php foreach ($jersey as $jrs) : ?>
        <div class="col-sm-3 " align="center">
          <div class="card " style="background-image:url(img/222.png);">
            <img src="img/<?= $jrs['gambar']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $jrs['harga']; ?></h5>
              <h5 class="card-text"><?= $jrs['jersey']; ?></h5>
              <a href="php/detail1.php?id=<?= $jrs['id']; ?>" class="btn btn-outline-info">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <br><br><br>

  <!-- paralax -->
  <div id="partner" class="parallax-container" style="height: 400px;">
    <div class="parallax"><img src="../img/11.jpg"></div>
    <div class="container partner scrollspy"><br>
      <div class="row">
        <div class="col m4 s12 center"><br><br><br><br><br>
          <img src="../img/12.png" style="width: 750px;">
        </div>
      </div>


    </div>
  </div><br><br><br>

  <!-- ticket final UCL -->
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="center light: light-blue-text text-darken-3" id="tiket">UCL Final Ticket</h1>
        <hr style="color: aqua;">
        <br><br>
      </div>
      <img src="../img/tiket.jpg">
      <a href="php/tiket.html" class="btn btn-primary"><i class="bi bi-download"> Get Ticket </i></a>
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
  <script src="js/script1.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
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