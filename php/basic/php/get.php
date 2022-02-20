<?php 

  // cek apakah udah ada data
  if( !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["kuliah"]) ||
    !isset($_GET["kota"]) ||
    !isset($_GET["gambar"])) {
    // redirect/kembali dengan header()
    header("Location: get_post.php");

    // stop eksekusi code dibawah
    exit;
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
  <style>
  img {
    width: 150px;
    background-color: grey;
  }

  a {
    font-size: 20px;
    text-decoration: none;
    text-transform: uppercase;
  }
  </style>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <ul class="mhs">
    <li>
      <img src="img/<?= $_GET["gambar"] ?>">
    </li>
    <li>nama : <?= $_GET["nama"]; ?></li>
    <li>nrp : <?= $_GET["nrp"]; ?></li>
    <li>kuliah : <?= $_GET["kuliah"]; ?></li>
    <li>kota : <?= $_GET["kota"]; ?></li>
  </ul>

  <a href="get_post.php">
    <<<< </a>

</body>

</html>