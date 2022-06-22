<?php

// constructor
class product {

  public $judul, $penulis, $penerbit, $harga;

  // __construct(value) // nilai default dimasukkan ke params
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {

    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}

// object type
class cetakInfoProduct {
  public function cetak( $product ) {
    return "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";
  }
}

//pemanggilan construct
$product1 = new product( 'naruto', 'masashi kishimoto', 'shonen jump', 20000 );
$product2 = new product( 'uncharter', 'neil druckman', 'sony computer', 15000 );

echo "Komik : " . $product1->getLabel();
echo "<hr>";
echo "Game : " . $product2->getLabel();
echo "<hr>";

// pemanggilan object type
$infoProduct = new cetakInfoProduct();
echo "Komik : " . $infoProduct->cetak( $product1 );
echo "<hr>";
echo "Game : " . $infoProduct->cetak( $product2 );
