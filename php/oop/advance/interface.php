<?php

// interface class

interface info {

  // (tanpa implementasi)
  public function info();
}

abstract class product {

  protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

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

  public function setDiskon( $diskon ) {
    return $this->diskon = $diskon;
  }

  // harga
  public function setHarga( $harga ) {
    $this->harga = $harga;
  }

  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100 );
  }

  // judul
  public function setJudul( $judul ) {
    $this->judul = $judul;
  }

  public function getJudul() {
    return $this->judul;
  }

  // penulis
  public function setPenulis( $penulis ) {
    $this->penulis = $penulis;
  }

  public function getPenulis() {
    return $this->penulis;
  }

  // penerbit
  public function setPenerbit( $penerbit ) {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit() {
    return $this->penerbit;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  // abstraction
  abstract public function infoProduct();
}

// inheritance (extends)
class komik extends product implements info {

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

  // implementasi interface
  public function info() {
    return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  }

  public function infoProduct() {
    return "komik : " . $this->info() . " - {$this->jmlHalaman} halaman.";
  }
}

// inheritance (extends)
class game extends product implements info {

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

  // implementasi interface
  public function info() {
    return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  }

  public function infoProduct() {
    return "komik :  " . $this->info() . "- {$this->jam} jam.";
  }
}

class cetakInfoProduct {

  public $dataProduct = [];

  public function tambahProduct( product $product ) {
    $this->dataProduct[] = $product;
  }

  public function cetak() {
    $str = "DAFTAR PRODUCT : <hr>";

    foreach ( $this->dataProduct as $p ) {
      $str .= "- {$p->infoProduct()} <hr>";
    }

    return $str;
  }
}

//pemanggilan construct
$product1 = new komik( 'naruto', 'masashi kishimoto', 'shonen jump', 20000, 100 );
$product2 = new game( 'uncharter', 'neil druckman', 'sony computer', 15000, 5 );

$cetakProduct = new cetakInfoProduct();
$cetakProduct->tambahProduct( $product1 );
$cetakProduct->tambahProduct( $product2 );

echo $cetakProduct->cetak();

?>