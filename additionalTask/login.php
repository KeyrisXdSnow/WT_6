<?php
session_start();
 if ($_SESSION['user'] || ($_COOKIE['user']) ) {
     $location = "Location: ../generalTask/site/index.php";
 } else {
     if (isset($_POST['register'])) {
         $answer = loginUser($_POST['login_to_acc']);
         if (isset($_SESSION['user']) || isset($_COOKIE['user'])) $location = "Location: ./../generalTask/site/index.php";
         else $location = "Location: index.php";
         $_SESSION['message'] = $answer;
     }
 }
header($location);

function loginUser ($data)
{

    $link = new mysqli("localhost", "root", "", "nyc_site");

    if ($link == null) return "Невозможно подключиться к mysql";
    else {
        $link->set_charset("UTF-8");

        $password = md5($data['password']);
        $login = $data['login'];

        foreach ($data as $value) {
            if (strlen(trim($value)) == 0) return "Заполните форму";
        }

//        $login = "root";
//        $password = md5("1111");

        $request = $link->query("SELECT * FROM `users` WHERE `login`='$login' and `password`='$password'");
        if ($request->num_rows > 0 ) {

            if($_REQUEST['remember_me']=='on'){
                $host = "localhost";
                setcookie("user[name]", $data['login'], time()+3600*24*10, "/Laba6/", "localhost" );
                setcookie("user[password]", $password, time()+3600*24*10, "/Laba6/", "localhost" );
                setcookie("user[email]", $data['email'], time()+3600*24*10, "/Laba6/", "localhost" );
            }else {
                $_SESSION['user']['login'] = $data['login'];
                $_SESSION['user']['email'] = $data['email'];
                $_SESSION['user']['password'] = $data['password'];
            }
            return "Вы вошли";
        } else return "Проверьте данные";

    }
}

