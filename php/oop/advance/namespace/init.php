<?php

spl_autoload_register( function ( $class ) {

  $class = explode( '\\', $class );
  $class = end( $class ); // ambil paling akhir

  require_once __DIR__ . '/setting/' . $class . '.php';
} );

spl_autoload_register( function ( $class ) {

  $class = explode( '\\', $class );
  $class = end( $class ); // ambil paling akhir

  require_once __DIR__ . '/service/' . $class . '.php';
} );

?>