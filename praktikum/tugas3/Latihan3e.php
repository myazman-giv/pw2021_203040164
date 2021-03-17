<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 3
*/ 
?>

<?php 
$sapi = [
    ["jenis" => "Sapi Aceh",
    "deskripsi" => "keunggulan Sapi Aceh antara lain, tahan terhadap penyakit di wilayah tropis, mempunyai adaptasi yang baik pada iklim ekstrem dan wilayah marginal, reproduksi baik dan mempunyai nilai ekonomi tinggi bagi masyarakat Aceh.",
    "umur" => "4 tahun",
    "bobot" => "600 kg",
    "harga" => "Rp 23.000.000",
    "no" => "1",
    "gambar" => "aceh.jpg"
    ],
    ["jenis" => "Sapi Angus",
    "deskripsi" => "Keunggulan sapi angus antara lain adalah bertubuh besar dan berdaging banyak, pertumbuhannya cepat, mampu beradaptasi dengan pakan yang bermutu rendah serta lingkungan tropis Indonesia",
    "umur" => "3 tahun",
    "bobot" => "980 kg",
    "harga" => "Rp 46.000.000",
    "no" => "2",
    "gambar" => "angus.jpg"
    ],
    ["jenis" => "Sapi Bali",
    "deskripsi" => "Keunggulan sapi bali dari sapi pedaging lain adalah terletak pada tulang sapi bali relatif lebih kecil dari sapi jenis lain, sehingga jumlah daging lebih tebal",
    "umur" => "2 tahun",
    "bobot" => "500 kg",
    "harga" => "19.000.000",
    "no" => "3",
    "gambar" => "bali.jpg"
    ],
    ["jenis" => "Sapi Belgian Blue",
    "deskripsi" => "Keunggulan sapi ini diantaranya mempunyai konformasi perototan yang baik dan persentase karkas yang tinggi. Kandungan lemak pada sapi Belgian Blue yang relatif lebih rendah dan memiliki efisiensi penggunaan pakan yang baik",
    "umur" => "4 tahun",
    "bobot" => "1.430 kg",
    "harga" => "Rp 65.000.000",
    "no" => "4",
    "gambar" => "belgian.jpg"
    ],
    ["jenis" => "Sapi Brahman",
    "deskripsi" => "Keunggula sapi Brahman Kemampuan adaptasi dengan suhu panas dan lingkungan lembab sangat baik. Punya ketahanan yang baik terhadap serangan parasit.",
    "umur" => "4 tahun",
    "bobot" => "900 kg",
    "harga" => "Rp 41.000.000",
    "no" => "5",
    "gambar" => "brahman.jpg"
    ],
    ["jenis" => "Sapi Brangus",
    "deskripsi" => "Keunggulan sapi Brangus yaitu pertumbuhan badannya cepat, memiliki daya tahan уаng baik terhadap panas/iklim tropis, dan produktifitas daging tinggi.",
    "umur" => "4 tahun",
    "bobot" => "989 kg",
    "harga" => "Rp 49.000.000",
    "no" => "6",
    "gambar" => "brangus.jpg"
    ],
    ["jenis" => "Sapi Devon",
    "deskripsi" => "Keunggulan Sapi Devons memiliki kekuatan yang besar, kecerdasan, kecepatan cepat dan daya tahan. Pada masa sekarang Devons masih dicari untuk digunakan sebagai lembu.",
    "umur" => "4 tahun",
    "bobot" => "1.200 kg",
    "harga" => "Rp 50.000.000",
    "no" => "7",
    "gambar" => "devon.jpg"
    ],
    ["jenis" => "Sapi Limosin",
    "deskripsi" => "Keunggulan Sapi Limosin ini mempunyai daging dengan kualitas yang baik dan cocok untuk dijadikan makanan konsumsi. Waktu untuk penggemukan sapi limousin lebih pendek dan cepat.",
    "umur" => "5 tahun",
    "bobot" => "1.250 kg",
    "harga" => "Rp 56.000.000",
    "no" => "8",
    "gambar" => "limosin.jpg"
    ],
    ["jenis" => "Sapi Madura",
    "deskripsi" => "Keunggulan Sapi Madura ialah Warna dagingnya merah cerah, empuk, berserat halus, dan rendah lemak. Keunggulan lainnya, karkas (berat daging sapi tanpa kepala, kaki, jerowan, dan kulit) daging sapi Madura mencapai 48 persen dari berat badan sapi",
    "umur" => "4 tahun",
    "bobot" => "700 kg",
    "harga" => "Rp 34.000.000",
    "no" => "9",
    "gambar" => "madura.jpg"
    ],
    ["jenis" => "Sapi Peranakan Ongole",
    "deskripsi" => "Keunggulan sapi PO ini antara lain tahan terhadap panas, terhadap ekto dan endoparasit, pertumbuhan relatif cepat walaupun adaptasi terhadap pakan kurang, serta persentase karkas dan kualitas daging baik",
    "umur" => "5 tahun",
    "bobot" => "970 kg",
    "harga" => "Rp 42.000.000",
    "no" => "10",
    "gambar" => "po.jpg"
    ],
    ["jenis" => "Sapi Simental",
    "deskripsi" => "Kelebihan sapi simental yakni sapi jenis pedaging yang mampu mencapai berat 1.400 kg untuk sapi usia dewasa. Sapi metal pedaging mamiliki metabolisme yang cepat, sehingga pertambahan bobot setiap harinya bisa mencapi 2,1 kg.",
    "umur" => "5 tahun",
    "bobot" => "1.120 kg",
    "harga" => "Rp 50.000.000",
    "no" => "11",
    "gambar" => "simental.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jual beli sapi kurban</title>
</head>
<body>

<h1 align="center">JUAL BELI SAPI KURBAN TAHUN 1442 HIJRIAH</h1>
<table class="table" border="2" cellpadding="10" cellspacing="0" align="center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">GAMBAR</th>
      <th scope="col">JENIS</th>
      <th scope="col">KEUNGGULAN</th>
      <th scope="col">UMUR</th>
      <th scope="col">BOBOT</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sapi as $cow) : ?>
        <tr>
        <td><?php echo $cow["no"]; ?></td>  
        <td><img src="img/<?= $cow ["gambar"];?>"></td>
        <td><?php echo $cow["jenis"]; ?></td>    
        <td><?php echo $cow["deskripsi"]; ?></td>  
        <td><?php echo $cow["umur"]; ?></td>  
        <td><?php echo $cow["bobot"]; ?></td>      
        <td><?php echo $cow["harga"]; ?></td>    
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>