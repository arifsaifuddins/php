<?php

// // constructor
// class product {

//   public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $jam, $tipe;

//   // __construct(value) // nilai default dimasukkan ke params
//   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jam = 0, $tipe ) {

//     $this->judul = $judul;
//     $this->penulis = $penulis;
//     $this->penerbit = $penerbit;
//     $this->harga = $harga;
//     $this->jmlHalaman = $jmlHalaman;
//     $this->jam = $jam;
//     $this->tipe = $tipe;
//   }

//   public function getLabel() {
//     return "$this->penulis, $this->penerbit";
//   }

//   public function infoProduct() {
//     $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

//     if ( $this->tipe == 'komik' ) {
//       $str .= " - {$this->jmlHalaman} halaman.";
//     } else if ( $this->tipe == 'game' ) {
//       $str .= " - {$this->jam} jam.";
//     }

//     return $str;
//   }
// }

// //pemanggilan construct
// $product1 = new product( 'naruto', 'masashi kishimoto', 'shonen jump', 20000, 100, 0, 'komik' );
// $product2 = new product( 'uncharter', 'neil druckman', 'sony computer', 15000, 0, 5, 'game' );

// echo $product1->infoProduct();
// echo $product2->infoProduct();

// inheritance(pewarisan)

// constructor
class product {

  public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $jam;

  // __construct(value) // nilai default dimasukkan ke params
  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0,
    $jam = 0 ) {

    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->jam = $jam;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function infoProduct() {
    return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  }
}

// inheritance (extends)
class komik extends product {
  public function infoProduct() {
    return "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
  }
}

// inheritance (extends)
class game extends product {
  public function infoProduct() {
    return "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jam} jam.";
  }
}

//pemanggilan construct
$product1 = new komik( 'naruto', 'masashi kishimoto', 'shonen jump', 20000, 100, 0 );
$product2 = new game( 'uncharter', 'neil druckman', 'sony computer', 15000, 0, 5 );

echo $product1->infoProduct();
echo '<hr>';
echo $product2->infoProduct();

?>