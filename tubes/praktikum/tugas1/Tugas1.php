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
    <title>Tugas 1</title>

</head>
<body>

<table width="260px" cellspacing="10px" cellpadding="0px" border="1px">

<?php for( $i = 1; $i <= 6; $i++ ) : ?>
    <tr>
        <?php for( $j = 1; $j <= 6; $j++ ) : ?>
            <?php $k = $i + $j; ?>
            <?php if( $k % 2 == 1 ) : ?>
                <td height=30px width=30px bgcolor=salmon></td>
            <?php else : ?>
                <td height=30px width=30px bgcolor=lightblue></td>
            <?php endif; ?>
        <?php endfor; ?> 
    </tr>
<?php endfor; ?>

</table>

</body>
</html>