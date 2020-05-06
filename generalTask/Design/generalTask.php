<?php
$name = 'history';
$value = basename($_SERVER['PHP_SELF']) . "_" . date('d.m.Y_H.i.s', strtotime("+3 hours")) ;
if (isset($_COOKIE[$name])) setcookie('history[' .count($_COOKIE[$name]). ']', $value, "localhost", "/Laba6/generalTask/" );
else setcookie($name.'[0]', $value,  "localhost", "/Laba6/generalTask/" );

