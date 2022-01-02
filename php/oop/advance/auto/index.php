<?php

require_once "init.php";

$product1 = new komik( 'naruto', 'masashi kishimoto', 'shonen jump', 20000, 100 );
$product2 = new game( 'uncharter', 'neil druckman', 'sony computer', 15000, 5 );

$cetakProduct = new cetakInfoProduct();
$cetakProduct->tambahProduct( $product1 );
$cetakProduct->tambahProduct( $product2 );

echo $cetakProduct->cetak();

?>