<?php

echo '<b>Задача 1:</b> Время жизни cookie<br>
Пользователь приходит на сайт. Используя cookie сделать так,<br>
что бы впервые пришедший пользователь видел фразу: "Добро пожаловать, новичек!"<br>
Если пользователь уже посещал сайт в течении последних 10-ти часов, выводить фразу: "С возвращением, дружище!"<br>
Ответ:<br><br>';

setcookie("userCookie", 'someText', time() + 36000);
if (isset($_COOKIE['userCookie'])) {
    echo 'С возвращением, дружище!';
} else
    echo "Добро пожаловать, новичек!";

echo '<br><br><br><b>Задача 2:</b> Дата и время последнего посещения<br>
Используя cookie реализовать вывод на страницу сообщения с датой и временем последнего визита.<br>
Ответ:<br><br>';

setcookie("userCookie2", $time = time());
if (isset($_COOKIE['userCookie2'])) {
    echo 'Последний раз вы заходили на сайт: ' . date('d M Y h:i:s', $time) . '.';
} else
    echo "Вы зашли на сайт первый раз.";

echo '<br><br><br><b>Задача 3:</b> Счетчик посещений<br>
Используя cookie реализовать вывод на страницу сообщения с количеством посещений страницы<br>
Ответ:<br><br>';

setcookie('userCookie3', 1);

if (isset($_COOKIE['userCookie3'])) {
    if ($_COOKIE['userCookie3'] > 1) {
        echo 'Вы посещали сайт ' . $_COOKIE['userCookie3'] . ' раз.';
        setcookie('userCookie3', $_COOKIE['userCookie3'] + 1);
    }
} elseif ($_COOKIE['userCookie3'] === 1){
    echo "Вы зашли на сайт первый раз.";
    setcookie('userCookie3', $_COOKIE['userCookie3'] + 1);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
</head>
<body>

</body>
</html>

