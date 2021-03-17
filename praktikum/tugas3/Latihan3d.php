<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 3
php
*/ 
?>

<?php 
$pemain =[    
    ["nama" => "Crsitiano Ronaldo",
     "club" => "Juventus",
     "main" => "100",
     "gol" => "76",
     "assist" => "30",
     "no"=>"1"
    ],
    ["nama" =>"Lionel Messi",
     "club" =>"Barcelona",
     "main" =>"120",
     "gol" =>"80",
     "assist" =>"12",
     "no"=>"2"
    ],
    ["nama" =>"Luca Modric",
     "club" =>"Real Madrid",
     "main" =>"87",
     "gol" =>"12",
     "assist" =>"48",
     "no"=>"3"
    ],
    ["nama" =>"Mohammad Salah",
     "club" =>"Liverpool",
     "main" =>"90",
     "gol" =>"103",
     "assist" =>"8",
     "no"=>"4"
    ],
    ["nama" =>"Neymar Jr",
     "club" =>"Paris Saint Germain",
     "main" =>"109",
     "gol" =>"56",
     "assist" =>"15",
     "no"=>"5"
    ],
    ["nama" =>"Sadio Mane",
     "club" =>"Liverpool",
     "main" =>"63",
     "gol" =>"30",
     "assist" =>"70",
     "no"=>"6"
    ],
    ["nama" =>"Zlatan Ibrahimovic",
     "club" =>"Ac Milan",
     "main" =>"100",
     "gol" =>"10",
     "assist" =>"12",
     "no"=>"7"
    ],
];


?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <table border="2" cellpadding="10" cellspacing="0" align="center">
        <th>NO</th>
        <th>NAMA</th>
        <th>CLUB</th>
        <th>MAIN</th>
        <th>GOL</th>
        <th>ASSIST</th>
    <?php foreach ($pemain as $pmn) : ?>
        <tr>
        <td><?php echo $pmn["no"]; ?></td>
        <td><?php echo $pmn["nama"]; ?></td>
        <td><?php echo $pmn["club"]; ?></td>
        <td><?php echo $pmn["main"]; ?></td>
        <td><?php echo $pmn["gol"]; ?></td>
        <td><?php echo $pmn["assist"]; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php
    $jumlah_main =0;
    $jumlah_gol=0;
    $jumlah_assist=0;
    foreach ($pemain as $key => $value) {
    ?>
        <?php $jumlah_main += $value['main']; ?>
        <?php $jumlah_gol += $value['gol']; ?>
        <?php $jumlah_assist += $value ['assist']; ?>
    <?php }?>
    <th>#</th>
    <th colspan="2">jumlah</th>
    <td><?php echo $jumlah_main ;  ?></td>
    <td><?php echo $jumlah_gol ;  ?></td>
    <td><?php echo $jumlah_assist ;  ?></td>
    </table>
</body>
</html>
