<?php

// overriding(modularisasi)

class product {

  public $judul, $penulis, $penerbit, $harga;

  // __construct(value) // nilai default dimasukkan ke params
  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0 ) {

    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
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

  public $jmlHalaman;

  // overriding
  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0 ) {

    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->jmlHalaman = $jmlHalaman;
  }

  public function infoProduct() {
    return "komik : " . parent::infoProduct() . " - {$this->jmlHalaman} halaman.";
  }
}

// inheritance (extends)
class game extends product {

  public $jam;

  // overriding
  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jam = 0 ) {

    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->jam = $jam;
  }

  public function infoProduct() {
    return "komik :  " . parent::infoProduct() . "- {$this->jam} jam.";
  }
}

//pemanggilan construct
$product1 = new komik( 'naruto', 'masashi kishimoto', 'shonen jump', 20000, 100 );
$product2 = new game( 'uncharter', 'neil druckman', 'sony computer', 15000, 5 );

echo $product1->infoProduct();
echo '<hr>';
echo $product2->infoProduct();

?>