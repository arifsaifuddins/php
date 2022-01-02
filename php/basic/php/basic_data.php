<?php 

  // syntax dasar php

  // 1. standar output
  // echo / print
  // print_r("array")
  // var_dump("variable")
  
  echo "arief";
  print "arief";
  print_r("arief saifuddien");
  var_dump("saifuddien");

  // 2. penulisan PHP
  // - php di dalam html (recommended)
  // - html di dalam php

  echo "<h1>halo</h1>";

  // 3. variable
  // diawali dengan "$"

  $nama = "Arief Saifuddien";
  $kuliah = "IUA";
  $usia = 22;

  // 4. operator

  // - aritmatika 
  // + - * / %

  $x = 10;
  $y = 20;

  echo $x * $y;

  //  - concatination / penggabung
  // .

  $first_name = "Arief";
  $last_name = "Saifuddien";

  echo $first_name . " " . $last_name;

  // - assignment / penugasan
  // =, +=, -=, *=, /=, %=, .=

  $a = 1;
  $a += 4;

  $name_mhs = "arief";
  $name_mhs .= "saifuddien";

  echo $a;
  echo $name_mhs;

  // - perbandingan
  // <, >, <=, >=, ==, !=

  var_dump(1 == "1");
  var_dump(1 == 1);

  // - identitas
  // ===, !==

  var_dump(1 === "1");

  // - logika
  // &&, ||, !

  $b = 10;

  // && (dua-duanya)
  var_dump($b < 20 && $b % 2 == 0);
  // || (salah satu)
  var_dump($b > 20 || $b % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic</title>
</head>

<body>

  <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
  <p><?= "international university of africa" ; ?></p>
  
</body>

</html>