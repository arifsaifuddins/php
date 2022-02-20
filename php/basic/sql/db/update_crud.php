<?php

// set session
session_start(); //wajib

// cek apakah udah ada data session yang masuk
if (!isset($_SESSION["login"])) {
  header("Location: sign_in.php");
  exit;
}

require "functions.php";

// ambil data id dari URL
$id = $_GET["id"];

// ambil semua data  sesuai id yang di pilih
$data = query("SELECT * FROM indonesian_foods WHERE id = $id")[0]; //index default ketika id diklik

// cek update
if (isset($_POST["submit"])) {

  if (editMenu($_POST) > 0) {
    echo /*html*/ "
    <script>
      document.location.href = 'read_crud.php';
    </script>";
  } else {
    echo /*html*/ "
    <script>alert('tidak ada perubahan')</script>";

    header("Location: read_crud.php");
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit a Food</title>
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

      <!-- input indentifire id, gambar lama -->
      <input type="hidden" name="id" value="<?= $data["id"]; ?>">
      <input type="hidden" name="gambarLama" value="<?= $data["gambar"]; ?>">

      <table cellspacing="20">
        <tr>
          <td>
            <label for="gambar">Gambar :</label>
          </td>
          <td>
            <input type="file" class="file" id="gambar" name="gambar">
          </td>
        </tr>
        <tr>
          <td>
            <label for="makanan">Makanan :</label>
          </td>
          <td>
            <input type="text" id="makanan" required value="<?= $data["nama"]; ?>" name="nama">
          </td>
        </tr>
        <tr>
          <td>
            <label for="khas">Khas :</label>
          </td>
          <td>
            <input type="text" id="khas" required value="<?= $data["khas"]; ?>" name="khas">
          </td>
        </tr>
        <tr>
          <td>
            <label for="bahan">Bahan :</label>
          </td>
          <td>
            <input type="text" id="bahan" required value="<?= $data["bahan"]; ?>" name="bahan">
          </td>
        </tr>
        <tr>
          <td>
            <label for="jenis">Jenis :</label>
          </td>
          <td>
            <input type="text" id="jenis" required value="<?= $data["jenis"]; ?>" name="jenis">
          </td>
        </tr>
        <tr>
          <td>
            <label for="harga">Harga :</label>
          </td>
          <td>
            <input type="text" id="harga" required value="<?= $data["harga"]; ?>" name="harga">
          </td>
        </tr>
      </table>
      <button class="btn" type="submit" name="submit">Ubah Menu</button>
    </form>
  </div>

</body>

</html>