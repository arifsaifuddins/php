<?php

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

?>