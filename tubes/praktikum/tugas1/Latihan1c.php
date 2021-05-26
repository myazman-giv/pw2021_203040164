<?php 
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
*/ 
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>

    <style>
        .salmon {
            background-color: salmon;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="salmon"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>
    
</body>
</html>