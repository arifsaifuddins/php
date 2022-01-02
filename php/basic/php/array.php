<?php 

  // 1. Array(numeric)
  // sebuah variable yang memiliki banyak nilai
  // boleh berbeda tipe datanya
  // index dimulai dari 0 (manggil dengan index nomer)

  // // penulisan array
  // // - lama
  // $hari = array("jum'at", "sabtu", "ahad", "senin");
  // // - modern
  // $mhs = ["arief", "wildan", "sinin"];
  // $arr1 = [123, "text", false];
  
  // // show to window
  // // echo (harus dengan index -satu element-)
  // echo $mhs[2];
  // echo "<br>";
  // // print_r(), var_dump()
  // print_r($hari);
  // echo "<br>";
  // var_dump($hari);
  // echo "<br>";
  
  // // adding a element to array (dengan index kosong [])
  // var_dump($hari);
  // $hari[] = "selasa";
  // $hari[] = "rabu";
  // echo "<br>";
  // print_r($hari);


  // example showing
  // single array
  $angka = [1, 9, 6, 12, 2, 5, 10, 3, 67];

  // multiple array (,)
  $angka1 = [
    [2, 9, 76], 
    [42, 2, 52], 
    [18, 13, 7]
  ];

  $mahasiswa = [
    [
      "arief saifuddien", 
      "084673", 
      "islamic studies", 
      "khartoum"
    ],
    [
      "wildan al khoir", 
      "453678", 
      "arabic language", 
      "bandung"
    ],
    [
      "muchsinin", 
      "563287", 
      "hadits", 
      "jepara"
    ]
  ];
  
  
  // 2. Array(assosiative)
  // mirip object di js
  // key dan value (key-nya berupa string yang dibuat manual)
  // dengan karakter ( => ) antara key dan value-nya
  // manggilnya dengan index string
  
  $mahasiswa1 = [
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
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array</title>
  <style>
  .array {
    background-color: salmon;
    height: 30px;
    width: 30px;
    margin: 5px;
    line-height: 30px;
    text-align: center;
    display: inline-block;
    transition: 1s;
    cursor: pointer;
  }

  .array:hover {
    transform: rotate(360deg);
    border-radius: 50%;
  }

  .mhs {
    text-transform: uppercase;
    font-family: arial;
  }

  li img {
    width: 100px;
    background-color: grey;
  }
  </style>
</head>

<body>

  <!-- array numeric -->

  <!-- for (count($) = .length) -->
  <?php for($i = 0; $i < count($angka); $i++) { ?>
  <div class="array">
    <?= $angka[$i]; ?>
  </div>
  <?php } ?>
  <br>

  <!-- foreach /as/ -->
  <?php foreach( $angka as $agk ) { ?>
  <div class="array">
    <?= $agk; ?>
  </div>
  <?php } ?>
  <br>

  <!-- templating -->
  <?php foreach( $angka1 as $agk ) : ?>
  <?php foreach( $agk as $a ) : ?>
  <div class="array">
    <?= $a; ?>
  </div>
  <?php endforeach; ?>
  <?php endforeach; ?>

  <!-- mhs -->
  <h1>Daftar Mahasiswa</h1>

  <?php foreach( $mahasiswa as $mhs) : ?>
  <ul class="mhs">
    <li>nama : <?= $mhs[0]; ?></li>
    <li>nrp : <?= $mhs[1]; ?></li>
    <li>kuliah : <?= $mhs[2]; ?></li>
    <li>kota : <?= $mhs[3]; ?></li>
  </ul>
  <?php endforeach; ?>


  <!-- array assosiative -->

  <?php foreach( $mahasiswa1 as $mhs ) : ?>
  <ul class="mhs">
    <li>
      <img src="img/<?= $mhs["gambar"] ?>">
    </li>
    <li>nama : <?= $mhs["nama"]; ?></li>
    <li>nrp : <?= $mhs["nrp"]; ?></li>
    <li>kuliah : <?= $mhs["kuliah"]; ?></li>
    <li>kota : <?= $mhs["kota"]; ?></li>
  </ul>
  <?php endforeach; ?>

</body>

</html>