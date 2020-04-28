<?php
session_start();
unset($_SESSION['user']);

setcookie("user[name]", "", time()-3600, "/Laba6/", "localhost" );
setcookie("user[email]", '', time()-3600, "/Laba6/", "localhost" );
setcookie("user[password]", '', time()-3600, "/Laba6/", "localhost" );

header ("Location: index.php");