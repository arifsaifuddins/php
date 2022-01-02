<?php

// setter & getter

class product {

  private $judul, $penulis, $penerbit, $harga, $diskon = 0;

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
echo '<hr>';

// setter
$product1->setHarga( 20000000000 );
$product1->setDiskon( 20 );

// getter
echo $product1->getHarga();
echo $product1->getJudul();

?>