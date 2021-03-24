<?php 
/*
Mochamad Yazman Yazid
203040164
UTS PW - 24 Maret 2021
php
*/ 
?>
<?php 
function cetak_bintang ($angka) {

    for( $i = 1; $i <= $angka; $i++ ){
        for( $j = 1; $j <= $i; $j++ ){
            echo "*";
        }
        echo "<br>";
    }
}
echo cetak_bintang(7);

?>