<?php

// mysql_ , mysqli_ , PDO

// 1. cara satu

// //connet to mysql database
// $db = mysqli_connect("localhost", "root", "international", "basicphp");

// // query database/ memanggil from table
// $result = mysqli_query($db, "SELECT * FROM indonesian_foods");

// // convert ke array / object
// // mysqli_fetch_row(); $data[1]
// // mysqli_fetch_assoc(); $data["nama"]
// // mysqli_fetch_array(); $data[1], $data["nama"]
// // mysqli_fetch_object(); $data->jenis

// set session
session_start(); //wajib

// cek apakah udah ada data session yang masuk
if ( !isset( $_SESSION["login"] ) ) {
  header( "Location: sign_in.php" );
  exit;
}

// 2. cara dua
require 'functions.php';

// PAGINATION

// pagination logic
$dataPerPage = 1;
$allData = count( query( "SELECT * FROM indonesian_foods" ) );
$page = ceil( $allData / $dataPerPage );

// active
$activePage = ( isset( $_GET["page"] ) ) ? $_GET["page"] : 1;

// itung awldata 1 * 2 - 1
$firstData = ( $dataPerPage * $activePage ) - $dataPerPage;

// $foods = query( "SELECT * FROM indonesian_foods" ); // semua data
$foods = query( "SELECT * FROM indonesian_foods LIMIT $firstData, $dataPerPage" ); // selection data (LIMIT);

if ( isset( $_POST["search"] ) ) {
  $foods = search( $_POST["keyword"] );
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="stylesheet" href="style1.css">
  </head>

  <body>

    <nav>
      <h1>INDONESIAN FOODS</h1>
    </nav>

    <div class="container">

      <form action="" method="post">
        <div class="search">
          <input type="text" name="keyword" autofocus>
          <button type="submit" name="search">Cari Menu</button>
        </div>
      </form>

      <div class="button">
        <a href="create_crud.php">Tambah Menu</a>
      </div>

      <!-- modular / foreach -->

      <?php foreach ( $foods as $food ): ?>
      <div class="list">
        <img src="food/<?=$food["gambar"];?>">
        <ul>
          <hr>
          <li>Nama : <?=$food["nama"];?>
          </li>
          <hr>
          <li>Khas : <?=$food["khas"];?>
          </li>
          <hr>
          <li>Bahan : <?=$food["bahan"];?>
          </li>
          <hr>
          <li>Jenis : <?=$food["jenis"];?>
          </li>
          <hr>
          <li>Harga : <?=$food["harga"];?>
          </li>
          <hr>
          <li>
            <a href="update_crud.php?id=<?=$food["id"];?>">Ubah</a> |
            <a href="delete_crud.php?id=<?=$food["id"];?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
          </li>
          <hr>
        </ul>
      </div>
      <?php endforeach;?>

      <div class="pages">
        <?php if ( $activePage > 1 ): ?>
        <a href="?page=<?=$activePage - 1;?>" class="page size">&laquo Prev</a>
        <?php else: ?>
        <a class="page size">&laquo Prev</a>
        <?php endif;?>
        <div class="page-num">
          <?php if ( $activePage > 1 ): ?>
          <a href="?page=<?=$activePage - 1;?>" class="page small"><?=$activePage - 1;?></a>
          <?php else: ?>
          <a class="page small">...</a>
          <?php endif;?>
          <a class="page"><?=$activePage;?></a>
          <?php if ( $activePage < $page ): ?>
          <a href="?page=<?=$activePage + 1;?>" class="page small"><?=$activePage + 1;?></a>
          <?php else: ?>
          <a class="page small">...</a>
          <?php endif;?>
        </div>
        <?php if ( $activePage < $page ): ?>
        <a href="?page=<?=$activePage + 1;?>" class="page size">Next &raquo</a>
        <?php else: ?>
        <a class="page size">Next &raquo</a>
        <?php endif;?>
      </div>

      <div class="button">
        <a href="sign_out.php">Sign Out</a>
      </div>

    </div>

    <!-- while / cara pertama -->

    <!-- <?php while ( $food = mysqli_fetch_assoc( $result ) ): ?>
    <div class="list">
      <img src="food/<?=$food["gambar"];?>">
      <ul>
        <li>Nama : <?=$food["nama"];?>
        </li>
        <hr>
        <li>Khas : <?=$food["khas"];?>
        </li>
        <hr>
        <li>Bahan : <?=$food["bahan"];?>
        </li>
        <hr>
        <li>Jenis : <?=$food["jenis"];?>
        </li>
        <hr>
        <li>Harga : <?=$food["harga"];?>
        </li>
        <hr>
        <li>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </li>
        <hr>
      </ul>
    </div>
    <?php endwhile;?> -->

  </body>

</html>