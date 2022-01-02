<?php

require "functions.php";

$keyword = $_GET["keyword"];
$query = "SELECT * FROM indonesian_foods WHERE
  nama LIKE '%$keyword%' OR
  khas LIKE '%$keyword%' OR
  bahan LIKE '%$keyword%' OR
  jenis LIKE '%$keyword%' OR
  harga LIKE '%$keyword%'
";

$foods = query( $query );

?>

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
      <a href="crud/delete_crud.php?id=<?=$food["id"];?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
    </li>
    <hr>
  </ul>
</div>
<?php endforeach;?>