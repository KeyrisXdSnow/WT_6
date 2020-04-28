<?php
session_start();
if ($_SESSION['user']|| ($_COOKIE['user'])) {
    $location = "Location: ../generalTask/site/index.php";
    header($location);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<section>
    <form action="login.php" method="post">
        <p>Логин</p>
        <input type="text" value="" placeholder="введите логин или почту" name="login_to_acc[login]">
        <br><br>
        <p>Пароль</p>
        <input type="password" value="" placeholder="введите пароль" name="login_to_acc[password]">
        <br><br>
        <input type="submit" value="войти" name="register">
        <p>Запомнить меня <input type="checkbox" name="remember_me" checked="checked"> </p>
        <p> У вас нет аккаунта? <a href="registerForm.php"> Зарегестрируйтесь </a></p>
        <p> <?php echo $_SESSION['message'] ; unset($_SESSION['message']) ?></p>
    </form>
</section>

</body>
</html>