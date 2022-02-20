<?php

// memanggil cookie
$_COOKIE["nama"]; // key

// meghapus cookie
setcookie( 'nama', '', time() - 1 );

?>