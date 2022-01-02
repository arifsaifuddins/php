<?php

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

?>