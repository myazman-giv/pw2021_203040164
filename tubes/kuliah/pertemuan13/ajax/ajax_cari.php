<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 13 - 8 Mei 2021
php
*/
?>

<?php
require '../functions.php';
$jersey = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Jersey</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($jersey)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style:italic;">Jersey tidak ditemukan</p>
      </td>
    </tr>
  <?php endif; ?>


  <?php $i = 1; ?>
  <?php foreach ($jersey as $jrs) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><img src="img/<?= $jrs['gambar']; ?>" width="60"></td>
      <td><?= $jrs['jersey']; ?></td>
      <td>
        <button><a href="detail.php?id=<?= $jrs['id']; ?>">Lihat Detail</a></button>
      </td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
</table>