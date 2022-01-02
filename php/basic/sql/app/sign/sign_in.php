<?php

// set session
session_start(); // wajib sebelum buat session

// cek apakah udah ada data session yang masuk
if ( isset( $_SESSION["login"] ) ) {
  header( "Location: ../index.php" );
  exit;
}

if ( isset( $_COOKIE["id"] ) && isset( $_COOKIE["key"] ) ) {

  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  //  ambil username sesuai id
  $result = mysqli_query( $db, "SELECT * FROM user WHERE id = '$id'" );
  // ambil jadi array
  $user = mysqli_fetct_assoc( $result );

  if ( $key === hash( 'sha256', $user["username"] ) ) {
    $_SESSION["login"] = true;
  }

}

require '../functions.php';

if ( isset( $_POST["login"] ) ) {

  if ( login( $_POST ) > 0 ) {
    echo /*html*/"
      <script>alert('berhasil sign in')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="../style.css">
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
      <h1>Sign In as User</h1>

      <form action="" method="post">

        <table cellspacing="20">
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
        </table>
        <div class="btn remember">
          <label for="remember">Remember Me :</label>
          <input type="checkbox" id="remember" name="remember">
        </div>
        <button class="btn" type="submit" name="login">Sign In Now</button>
        <button class="btn remember">
          <a href="sign_up.php">Sign Up Before</a>
        </button>
      </form>
    </div>

  </body>

</html>