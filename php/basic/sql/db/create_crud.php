<?php

// set session
session_start(); //wajib

// cek apakah udah ada data session yang masuk
if ( !isset( $_SESSION["login"] ) ) {
  header( "Location: sign_in.php" );
  exit;
}

require "functions.php";

if ( isset( $_POST["submit"] ) ) {

  if ( tambahMenu( $_POST ) > 0 ) {
    echo /*html*/"
    <script>
      document.location.href = 'read_crud.php';
    </script>";
  } else {
    echo /*html*/"
    <script>alert('tidak berhasil')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input a Food</title>
    <link rel="stylesheet" href="style1.css">
    <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
  </head>

  <body>

    <div class="container1">
      <h1>Masukan Menu Baru</h1>
      <form action="" method="post" enctype="multipart/form-data">
        <table cellspacing="20">
          <tr>
            <td>
              <label for="gambar">Gambar :</label>
            </td>
            <td>
              <input type="file" class="file" id="gambar" required name="gambar">
            </td>
          </tr>
          <tr>
            <td>
              <label for="makanan">Makanan :</label>
            </td>
            <td>
              <input type="text" id="makanan" required name="nama">
            </td>
          </tr>
          <tr>
            <td>
              <label for="khas">Khas :</label>
            </td>
            <td>
              <input type="text" id="khas" required name="khas">
            </td>
          </tr>
          <tr>
            <td>
              <label for="bahan">Bahan :</label>
            </td>
            <td>
              <input type="text" id="bahan" required name="bahan">
            </td>
          </tr>
          <tr>
            <td>
              <label for="jenis">Jenis :</label>
            </td>
            <td>
              <input type="text" id="jenis" required name="jenis">
            </td>
          </tr>
          <tr>
            <td>
              <label for="harga">Harga :</label>
            </td>
            <td>
              <input type="text" id="harga" required name="harga">
            </td>
          </tr>
        </table>
        <button class="btn" type="submit" name="submit">Tambahkan</button>
      </form>
    </div>

  </body>

</html>