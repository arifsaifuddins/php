<?php

// // 1. class & method

// // class (penyimpan data object : property & method)
// class product {

// }

// // object
// $a = new product();
// $b = new product();

// var_dump( $a );

//  2. property & method

class product {

  // property (variable di object) // didahului dengan visibility
  public
  $judul = "judul",
  $penulis = "penulis",
  $penerbit = "penerbit",
  $harga = 0;

  // method (function di object) // boleh dengan visibility
  // public function sayHello() {
  //   return "Hello World";
  // }

  public function getLabel() {
    // $this untuk membuat global var
    return "$this->penulis, $this->penerbit";
  }

}

// // memanggil property
// $produk1 = new product();
// // menimpa value
// $produk1->judul = "naruto";
// var_dump( $produk1 );

// $produk2 = new product();
// // menimpa value
// $produk2->judul = "dragon";
// var_dump( $produk2 );

$product3 = new product();
$product3->judul = 'naruto';
$product3->penulis = 'masashi kishimoto';
$product3->penerbit = 'shonen jump';
$product3->harga = 20000;
// var_dump( $product3 );

$product4 = new product();
$product4->judul = 'uncharter';
$product4->penulis = 'neil druckman';
$product4->penerbit = 'sony computer';
$product4->harga = 15000;
// var_dump( $product4 );

// echo "Komik : $product3->penulis, $product3->penerbit";
// echo "<br>";

// // memanggil method (function di oop)
// echo $product3->sayHello();

echo "Komik : " . $product3->getLabel();
echo "<hr>";
echo "Game : " . $product4->getLabel();

?>