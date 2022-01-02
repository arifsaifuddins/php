<?php

// set session
session_start(); //wajib

// cek apakah udah ada data session yang masuk
if ( !isset( $_SESSION["login"] ) ) {
  header( "Location: sign/sign_in.php" );
  exit;
}

// 2. cara dua
require 'functions.php';

// PAGINATION

// pagination logic
$dataPerPage = 2;
$allData = count( query( "SELECT * FROM indonesian_foods" ) );
$page = ceil( $allData / $dataPerPage );

// active
$activePage = ( isset( $_GET["page"] ) ) ? $_GET["page"] : 1;

// itung awldata 1 * 2 - 1
$firstData = ( $dataPerPage * $activePage ) - $dataPerPage;

$foods = query( "SELECT * FROM indonesian_foods LIMIT $firstData, $dataPerPage" ); // selection data (LIMIT);

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

      <form action="" method="post">
        <div class="search">
          <input class="key" type="text" name="keyword" autofocus placeholder="Search a Menu...">
        </div>
      </form>

      <div class="button">
        <a href="crud/create_crud.php">Tambah Menu</a>
      </div>

      <!-- modular / foreach -->

      <div class="data">
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
              <a href="crud/update_crud.php?id=<?=$food["id"];?>">Ubah</a> |
              <a href="crud/delete_crud.php?id=<?=$food["id"];?>"
                onclick="return confirm('Apakah anda yakin?')">Hapus</a>
            </li>
            <hr>
          </ul>
        </div>
        <?php endforeach;?>
      </div>

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
        <a class="page  size">Next &raquo</a>
        <?php endif;?>
      </div>

      <div class="button">
        <a href="sign/sign_out.php">Sign Out</a>
      </div>

    </div>

    <script src="jquery.js"></script>
    <script src="main.js"></script>
  </body>

</html>