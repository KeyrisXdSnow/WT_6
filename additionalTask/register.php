<?php
session_start();

if ($_SESSION['user'] || ($_COOKIE['user']) ) {
    $location = "Location: ../generalTask/site/index.php";
    header($location);
}
if (isset($_POST['register'])) {

    if (preg_match("/^[a-zA-z0-9_\-.]+@[a-zA-z0-9\-]+\.[a-zA-z0-9\-.]+$/",$_POST['login_to_acc']['email']) and
        strlen($_POST['login_to_acc']['password']) >= 4 && strlen($_POST['login_to_acc']['login']) >= 2 ) {

        if ($_POST['login_to_acc']['password'] == $_POST['password_again']) {
            $data = $_POST['login_to_acc'];
            $data['password'] = md5($_POST['login_to_acc']['password']);
            $answer = registerUser($data);
            if ($answer == "Вы успешно зарегестрировались") $location = "Location: index.php";
            else $location = "Location: registerForm.php";
        } else {
            $answer = "Пароли не совпадают";
            $location = "Location: registerForm.php";
        }
    } else {
        $answer = "Некорректные данные";
        $location = "Location: registerForm.php";
    }

    $_SESSION['message'] = $answer;
} else $location = "Location: index.php";
header($location);

    function registerUser($data)
    {
        $link = new mysqli("localhost", "root", "", "nyc_site");
        if ($link == null) return "Невозможно подключиться к mysql";
        else {

            $link->set_charset("UTF-8");

            $login = $data['login'];
            $request = $link->query("SELECT `login` FROM `users` WHERE `login`='".$login."'");

            if ($request->num_rows > 0) return 'Такой пользователь уже есть';

//            foreach ($data as $value) {
//                if (strlen(trim($value)) == 0)
//                    return "Некорректный ввод";
//            }

//            $sql = "INSERT INTO `users`(";
//            foreach ($table_columns_name as $name)
//                $sql.="`".$name."`".",";
//            $sql = preg_replace("/,$/", "", $sql) . ") VALUES (";

            $sql = "INSERT INTO `users`(`login`, `email`, `password`) VALUES (";

            foreach ($data as $value)
                $sql .= "'" . $value . "'" . ",";
            $sql = preg_replace("/,$/", "", $sql) . ")";

            $link->query($sql);
            return "Вы успешно зарегестрировались";
        }

    }




