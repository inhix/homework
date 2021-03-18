<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>
<a href="index.php?">Моя страница</a>
<h3> Форма авторизации </h3>

<?php
notify();
errors();
?>

<?php if (empty($_SESSION['auth'])) { ?>
    <form action="login.php" method="POST">
        <p><label> Введите Ваш логин</label> <input name="login" required/></p>
        <p><label> Введите Ваш пароль </label> <input name="pass" type="password" required/></p>
        <p><input type="submit" value="Отправить" name="submit"/></p>
    </form>
<?php } else { ?>
    <p><a href="1.php">Перейти на страницу 1</a></p>
    <p><a href="2.php">Перейти на страницу 2</a></p>
    <p><a href="3.php">Перейти на страницу 3</a></p>
    <p><a href="logout.php">Logout</a></p>
<?php } ?>
</body>
</html>

<?php

function notify()
{

    if (!empty($_SESSION['loginForm']['notification'])) {
        foreach ($_SESSION['loginForm']['notification'] as $key => $message) {
            echo "<p style='color: green'>$message</p>";
        }

        unset($_SESSION['loginForm']['notification']);
    }
}
function errors()
{
    if (!empty($_SESSION['loginForm']['errors'])) {
        foreach ($_SESSION['loginForm']['errors'] as $key => $message) {
            echo "<p style='color: red'>$message</p>";
        }

        unset($_SESSION['loginForm']['errors']);
    }
}