<?php

require 'functions.php';

if ( isset( $_POST["register"] ) ) {

  if ( registrasi( $_POST ) > 0 ) {
    echo /*html*/"
      <script>
        alert('berhasil sign up')
      </script>";

    header( "Location: sign_in.php" );
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style1.css">
    <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
  </head>

  <body>

    <div class="container1">
      <h1>Sign Up as User</h1>

      <form action="" method="post">

        <table cellspacing="20">
          <tr>
            <td>
              <label for="nama">Nama :</label>
            </td>
            <td>
              <input type="text" id="nama" required name="nama">
            </td>
          </tr>
          <tr>
            <td>
              <label for="usia">Usia :</label>
            </td>
            <td>
              <input type="number" class="num" id="usia" required name="usia">
            </td>
          </tr>
          <tr>
            <td>
              <label for="username">Username :</label>
            </td>
            <td>
              <input type="text" id="username" required name="username">
            </td>
          </tr>
          <tr>
            <td>
              <label for="password">Password :</label>
            </td>
            <td>
              <input type="password" id="password" name="password">
            </td>
          </tr>
          <tr>
            <td>
              <label for="password1">Konfirmasi :</label>
            </td>
            <td>
              <input type="password" id="password1" name="password1">
            </td>
          </tr>
        </table>
        <button class="btn" type="submit" name="register">Sign Up Now</button>
        <button class="btn remember">
          <a href="sign_in.php">Sign In Now</a>
        </button>
      </form>
    </div>

  </body>

</html>