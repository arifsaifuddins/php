<?php

require_once 'init.php';

use service\User as userService;
use setting\User as setUser;

new setUser();
echo '<hr>';
new userService();

?>