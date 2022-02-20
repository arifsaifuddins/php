<?php

$foods = [
  [
    "nama" => "Rendang",
    "khas" => "Minang",
    "bahan" => "Daging, Pala, Santan",
    "jenis" => "Makanan Berat",
    "harga" => "20.000.00",
    "gambar" => "rendang.jpg",
  ],
  [
    "nama" => "Rawon",
    "khas" => "Jawa Timur",
    "bahan" => "Daging, Asam Jawa, Jeruk Purut",
    "jenis" => "Makanan Berat",
    "harga" => "18.000.00",
    "gambar" => "rawon.jpg",
  ],
  [
    "nama" => "Gado-Gado",
    "khas" => "Betawi",
    "bahan" => "Sayur, Kacang, Lontong",
    "jenis" => "Makanan Berat",
    "harga" => "15.000.00",
    "gambar" => "gado.jpg",
  ],
  [
    "nama" => "Pempek",
    "khas" => "Palembang",
    "bahan" => "Daging, Ikan, Tapioka",
    "jenis" => "Makanan Ringan",
    "harga" => "10.000.00",
    "gambar" => "pempek.jpg",
  ],
  [
    "nama" => "Gudeg",
    "khas" => "Yogyakarta",
    "bahan" => "Nangka Muda, Santan",
    "jenis" => "Makanan Berat",
    "harga" => "15.000.00",
    "gambar" => "gudeg.jpg",
  ],
  [
    "nama" => "Sate",
    "khas" => "Madura",
    "bahan" => "Daging, Bumbu Kacang, Arang",
    "jenis" => "Makanan Berat",
    "harga" => "10.000.00",
    "gambar" => "sate.jpg",
  ],
  [
    "nama" => "Liwet",
    "khas" => "Sunda",
    "bahan" => "Nasi, Daging, Telur, Sambel",
    "jenis" => "Makanan Berat",
    "harga" => "20.000.00",
    "gambar" => "liwet.jpg",
  ],
  [
    "nama" => "Bakso",
    "khas" => "Jawa",
    "bahan" => "Daging, Jahe, Tapioka, Seledri",
    "jenis" => "Makanan Berat",
    "harga" => "15.000.00",
    "gambar" => "bakso.jpg",
  ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav>
    <h1>INDONESIAN FOODS</h1>
  </nav>
  <div class="container">
    <?php foreach ($foods as $food) : ?>
      <div class="list">
        <img src="food/<?= $food["gambar"]; ?>">
        <ul>
          <li>Nama : <?= $food["nama"]; ?>
          </li>
          <hr>
          <li>Khas : <?= $food["khas"]; ?>
          </li>
          <hr>
          <li>Bahan : <?= $food["bahan"]; ?>
          </li>
          <hr>
          <li>Jenis : <?= $food["jenis"]; ?>
          </li>
          <hr>
          <li>Harga : <?= $food["harga"]; ?>
          </li>
          <hr>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>

</body>

</html>