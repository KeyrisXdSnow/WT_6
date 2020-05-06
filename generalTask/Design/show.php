<?php

    include('generalTask.php');
    if (isset($_COOKIE['history'])) {
        foreach ($_COOKIE['history'] as $name => $value) {
            $name = htmlspecialchars($name);
            $value = htmlspecialchars($value);
            echo "$name. $value <br />";
        }
    }