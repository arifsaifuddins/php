<?php

session_start(); // wajib

// hilangkan session
session_destroy();

// untuk menghapus total
session_unset();

// hapus cookie
setcookie( 'id', '', time() - 3600 );
setcookie( 'key', '', time() - 3600 );

header( "Location: read_crud.php" );
exit;

?>