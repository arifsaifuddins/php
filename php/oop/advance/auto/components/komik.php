<?php 

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

?>