<?php
session_start();
if ($_SESSION['user'] || ($_COOKIE['user'])) {
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
    <form action="register.php" method="post">
        <p>Логин</p>
        <input type="text" value="" placeholder="введите логин" name="login_to_acc[login]">
        <br><br>
        <p>Почта</p>
        <input type="text" value="" placeholder="введите почту" name="login_to_acc[email]">
        <br><br>
        <p>Пароль</p>
        <input type="password" value="" placeholder="введите пароль" name="login_to_acc[password]">
        <br><br>
        <p>Пароль ещё раз</p>
        <input type="password" value="" placeholder="пароль" name="password_again">
        <br><br>
        <input type="submit" value="Зарегестрироваться" name="register">
        <p> <?php echo $_SESSION['message'] ; unset($_SESSION['message']) ?></p>
    </form>
</section>

</body>
</html>
