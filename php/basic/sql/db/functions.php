<?php

// connect
$db = mysqli_connect( "localhost", "root", "", "basicphp" );

// function query
function query( $query ) {

  global $db;
  $result = mysqli_query( $db, $query );
  $rows = [];

  while ( $row = mysqli_fetch_assoc( $result ) ) {
    $rows[] = $row;
  }
  return $rows;
}

// function cari
function search( $keyword ) {

  // LIKE = sql %keyword% apapun keyword yang di inputkan
  $query = "SELECT * FROM indonesian_foods WHERE
    nama LIKE '%$keyword%' OR
    khas LIKE '%$keyword%' OR
    bahan LIKE '%$keyword%' OR
    jenis LIKE '%$keyword%' OR
    harga LIKE '%$keyword%'
  ";

  return query( $query );
}

// function tambah
function tambahMenu( $data ) {

  global $db;

  // htmlspecialchars() // pengamanan dari script
  $nama = htmlspecialchars( $data["nama"] );
  $khas = htmlspecialchars( $data["khas"] );
  $bahan = htmlspecialchars( $data["bahan"] );
  $jenis = htmlspecialchars( $data["jenis"] );
  $harga = htmlspecialchars( $data["harga"] );

  // upload gambar/ file
  $gambar = upload();
  if ( !$gambar ) {
    return false;
  }

  $query = "INSERT INTO indonesian_foods VALUES(null, '$nama', '$khas', '$bahan', '$jenis', '$harga', '$gambar')";

  mysqli_query( $db, $query );

  return mysqli_affected_rows( $db ); // cek keberhasilan
}

// function edit
function editMenu( $data ) {

  global $db;

  $id = $data["id"];
  // htmlspecialchars() // pengamanan dari script
  $nama = htmlspecialchars( $data["nama"] );
  $khas = htmlspecialchars( $data["khas"] );
  $bahan = htmlspecialchars( $data["bahan"] );
  $jenis = htmlspecialchars( $data["jenis"] );
  $harga = htmlspecialchars( $data["harga"] );
  $gambarLama = htmlspecialchars( $data["gambarLama"] );

  // cek apakah ada gambar baru
  if ( $_FILES["gambar"]["error"] === 4 ) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $query = "UPDATE indonesian_foods SET
    nama = '$nama',
    khas = '$khas',
    bahan = '$bahan',
    jenis = '$jenis',
    harga = '$harga',
    gambar = '$gambar'
    WHERE id = $id";

  mysqli_query( $db, $query );

  return mysqli_affected_rows( $db ); // cek keberhasilan
}

// function upload
function upload() {

  // ambil file sesuai key
  $namaFile = $_FILES["gambar"]["name"];
  $ukuranFile = $_FILES["gambar"]["size"];
  $error = $_FILES["gambar"]["error"];
  $tempatFile = $_FILES["gambar"]["tmp_name"];

  // cek apakah ada gambar diupload
  if ( $error === 4 ) {
    echo /*html*/"
    <script>
      alert('masukan gambar!');
    </script>";

    return false;
  }

  // cek ekstensi file
  $ekstensiFile = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode( '.', $namaFile ); // memecah file & extension
  // menjadikan kecil semua hurufnya
  $ekstensiGambar = strtolower( end( $ekstensiGambar ) ); // mengambil akhir setelah titik

  // cek file sasuai
  if ( !in_array( $ekstensiGambar, $ekstensiFile ) ) {
    echo /*html*/"
    <script>
      alert('masukan gambar!');
    </script>";

    return false;
  }

  // cek ukuran file // byte
  if ( $ukuranFile > 4000000 ) {
    echo /*html*/"
    <script>
      alert('masukan gambar!');
    </script>";

    return false;
  }

  // kalo lolos semua, pindah directory penyimpanan dengan func ini
  $namaFileBaru = uniqid(); // bilangan random buat bedain nama file
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file( $tempatFile, 'food/' . $namaFileBaru );

  return $namaFileBaru; // biar masuk ke func upload
}

// function hapus
function hapusMenu( $id ) {

  global $db;
  mysqli_query( $db, "DELETE FROM indonesian_foods WHERE id = $id" );
  return mysqli_affected_rows( $db ); // cek keberhasilan
}

// function registrasi
function registrasi( $data ) {

  global $db;

  $usia = $data["usia"];
  $nama = stripslashes( $data["nama"] );
  $username = strtolower( stripslashes( $data["username"] ) );
  // menerima semua string input
  $password = mysqli_real_escape_string( $db, $data["password"] );
  $password1 = mysqli_real_escape_string( $db, $data["password1"] );

  // cek username
  $result = mysqli_query( $db, "SELECT * FROM user WHERE username = '$username'" );

  if ( mysqli_fetch_assoc( $result ) ) {
    echo /*html*/"
    <script>alert('username sudah dipakai!')</script>";

    return false;
  }

  // cek konfirmasi password
  if ( $password !== $password1 ) {
    echo /*html*/"
    <script>alert('konfirmasi salah')</script>";

    return false;
  }

  // encription password dua cara :
  // md5() = bahaya, mudah dihack
  // password_hash($password, PASSWORD_DEFAULT);
  $password = password_hash( $password, PASSWORD_DEFAULT );

  // tambahkan user ke database
  mysqli_query( $db, "INSERT INTO user VALUES (
    null,
    '$nama',
    '$usia',
    '$username',
    '$password')"
  );

  return mysqli_affected_rows( $db );
}

// login
function login( $data ) {

  global $db;

  $username = $data["username"];
  $password = $data["password"];

  $result = mysqli_query( $db, "SELECT * FROM user WHERE username = '$username'" );

  // cek baris yang sesuai di database
  if ( mysqli_num_rows( $result ) === 1 ) {

    // ambil data
    $user = mysqli_fetch_assoc( $result );

    // cocokan dengan function password_verify();
    if ( password_verify( $password, $user["password"] ) ) {

      // set session dulu
      $_SESSION["login"] = true;

      // set cookie
      if ( isset( $_POST["remember"] ) ) {
        setcookie( 'id', $user['id'], time() + 60 * 60 * 24 );
        // encrypt cookie
        setcookie( 'key', hash( 'sha256', $user["username"] ), time() + 60 * 10 );
      }

      header( "Location: read_crud.php" );
      exit;
    }
  }

  $error = true;
  if ( isset( $error ) ) {
    echo /*html*/"
    <script>alert('input dengan benar!')</script>";

    return false;
  }

  return mysqli_affected_rows( $db );
}

?>