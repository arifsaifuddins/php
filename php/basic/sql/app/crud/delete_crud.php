<?php

// set session
session_start(); //wajib

// cek apakah udah ada data session yang masuk
if ( !isset( $_SESSION["login"] ) ) {
  header( "Location: ../sign/sign_in.php" );
  exit;
}

require "../functions.php";

$id = $_GET["id"];

if ( hapusMenu( $id ) > 0 ) {
  echo /*html*/"
  <script>
    document.location.href = '../index.php';
  </script>";
} else {
  echo /*html*/"
  <script>
    alert('tidak berhasil');
  </script>";
}

?>