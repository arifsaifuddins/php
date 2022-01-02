<?php

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

?>