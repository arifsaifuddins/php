<?php

// function

// // 1. php function
// // date();
// // params on php doc -harus pakai param-
// echo date("l, d-M-Y ");

// // time();
// // UNIX Timestamp (1 january 1970)
// echo time();

// // example(mix)
// echo date("l, d-M-Y,", time()+60*60*24*7*14);

// // mktime();
// // creat a second
// // mktime(0,0,0,0,0,0); -6 params-
// // jam, menit, detik, bulan, tanggal, tahun
// mktime(0, 0, 0, 5, 4, 2000);
// echo date("l", mktime(0, 0, 0, 5, 4, 2000));

// // strtotime();
// // params berupa string
// echo date("l", strtotime("4 may 2000"));

// 2. user function
// - mirip js
// - params berupa variabe, bisa diisi default value

function sapa($waktu = "datang", $nama = "admin") {
  return "selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
  </head>

  <body>

    <h1><?=sapa("malam", "arief");?></h1>

  </body>

</html>