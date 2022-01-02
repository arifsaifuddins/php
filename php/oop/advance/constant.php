<?php

// 1. constant / constanta (nilai yang tidak bisa berubah)
// define(name, value); / const name;

// tidak bisa dipakai di class
define( 'NAMA', 'arief saifuddien' );
echo NAMA; // tanpa $
echo '<hr>';

const USIA = 22;
echo USIA; // tanpa $
echo '<hr>';

class contohConstant {
  const NAMA = 'arief saifuddien';
}

echo contohConstant::NAMA;
echo '<hr>';

// 2. magic constant
// __FILE__
// __FUNCTION__
// __CLASS__
// __LINE__
// __DIR__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo __LINE__;
echo '<hr>';
echo __FILE__;
echo '<hr>';

class magicConst {
  public $class = __CLASS__;
}

$cls = new magicConst();
echo $cls->class;
echo '<hr>';

function cobaConst() {
  return __FUNCTION__;
}

echo cobaConst();
echo '<hr>';

?>