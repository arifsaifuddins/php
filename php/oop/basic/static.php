<?php

// static keyword

// class
class contohStatic {

  // static
  public static $angka = 1;

  public static function hello() {
    return "hello world " . self::$angka++ . " kali <hr>";
  }

  // non statis
  // public $angka = 1;

  // public function hello() {
  //   return "hello world " . $this->angka++ . " kali <hr>";
  // }
}

// // pemanggilan static
// echo contohStatic::$angka . "<hr>";

// object
$static = new contohStatic();
echo $static->hello();
echo $static->hello();
echo $static->hello();

// hitungan tetap lanju meskipun beda object
$static2 = new contohStatic();
echo $static2->hello();
echo $static2->hello();
echo $static2->hello();

?>