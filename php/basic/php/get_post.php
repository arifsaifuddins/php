<?php

  // // variable scope / lingkup
  // $x = 10;
  // echo $x;
  // echo "<br>";
  
  // function showX() {
  //   $x = 20;
  //   echo $x;
  //   echo "<br>";
  // }

  // // global variable
  // $y = 30;
  
  // function showY() {
  //   // tambah keyword "global"
  //   global $y;
  //   echo $y;
  //   echo "<br>";
  // }

  // showX();
  // showY();

  // super global variable
  // merupakan array assosiative
  
  // $_GET
  // $_POST
  // $_REQUEST
  // $_SESSION
  // $_COOKIE
  // $_SERVER
  // $_ENV

  // var_dump($_SERVER);

  // $_GET
  // nambah value di $_GET
  // datanya hanya dikirim lewat URL
  // get_post.php?nrp=2314637268&kuliah=IUA //nambah di URL
  // $_GET ["nama"] = ["arief saifuddien"];
  // var_dump($_GET);

  $mahasiswa = [
    [
      "nama" => "arief saifuddien",
      "nrp" => "084673",
      "kuliah" => "islamic studies",
      "kota" => "khartoum",
      "gambar" => "paper.png"
    ],
    [
      "nama" => "wildan al khoir",
      "nrp" => "453678",
      "kuliah" => "arabic language",
      "kota" => "bandung",
      "gambar" => "rock.png"
    ],
    [
      "nama" => "muchsinin",
      "nrp" => "563287",
      "kuliah" => "hadits",
      "kota" => "jepara",
      "gambar" => "scissor.png"
    ]
  ];

  // $_POST
  // lewat tag form dengan attribute action="", method=""
  // wajib pakai attribute name=""
  // POST mengambil data sesuai isi name=""
  // <?= $_POST["isi name"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET-POST</title>
  <style>
    a {
      font-size: 20px;
      text-decoration: none;
      text-transform: uppercase;
    }
  </style>
</head>

<body>

  <!-- GET -->

  <h1>Daftar Mahasiswa</h1>
  <ol>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
      <a
        href="get.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&kuliah=<?= $mhs["kuliah"]; ?>&kota=<?= $mhs["kota"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?>
      </a>
      <br>
    </li>
    <?php endforeach; ?>
  </ol>

  <!-- POST -->

  <!-- kalo udah di submit -->
  <?php if (isset($_POST["submit"])) : ?>
  <h1>Welcome <?= $_POST["nama1"]; ?>
  </h1>
  <?php endif; ?>

  <form action="" method="post">
    <input type="text" name="nama1">
    <input type="submit" name="submit">
  </form><br><br>

  <form action="post.php" method="post">
    <input type="text" name="nama">
    <input type="submit" name="submit">
  </form>

  <!-- login simple -->
  <?php
    if (isset($_POST["submit1"])) {
        if ($_POST["username"] == "arief saifuddien" &&
        $_POST["password"] == "international") {
            exit;
        } else {
            header("Location: get_post.php");
            $error = true;
        }
    }
  ?>

  <?php if ($error) : ?>
  <p style="color: red; font-style: italic; ">username & password salah</p>
  <?php endif; ?>

  <form action="post.php" method="post">
    <h1>login exp</h1>

    <label for="username">username</label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">password</label>
    <input type="password" name="password" id="password"> <br><br>

    <input type="submit" name="submit1">
  </form>

</body>

</html>