<?php

  // cek apakah udah ada data
  if (!isset($_POST[ "nama" ])) {
      // redirect/kembali dengan header()
      header("Location:  get_post.php");
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
  <title>post</title>
</head>

<body>

  <!-- <h1>Hello World!</h1>
  <h2>Welcome <?= $_POST["nama"]; ?>
  </h2> -->

  <h1>Hello World!</h1>
  <h2>Welcome <?= $_POST["username"]; ?>
  </h2>

  <a href="get_post.php">log out</a>

</body>

</html>