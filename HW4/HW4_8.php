<?php
echo '<br><br><br><b>Задача 8:</b> Работа со session<br>
Сделайте счетчик обновления страницы пользователем. Данные храните в сессии.<br>
Скрипт должен выводить на экран количество обновлений. При первом заходе на страницу он должен<br>
вывести сообщение о том,что вы еще не обновляли страницу.<br><br>';

session_start();

//if (session_id() == '') {
//    session_start();
//    $_SESSION["count"] = 0;
//    $_SESSION["count"]++;
//    echo 'Вы ешё не обновляли эту страницу';
//} else {
//    echo 'Вы обновляли эту страницу ' . $_SESSION["count"] . ' раз';
//    $_SESSION["count"]++;
//}

if (!isset($_SESSION["count"])) {
    $_POST["count"] = 0;
    $_SESSION["count"] = $_POST["count"];
    $_SESSION["count"] += 1;
    echo 'Вы ешё не обновляли эту страницу';
} else {
    echo 'Вы обновляли эту страницу ' . $_SESSION["count"] . ' раз';
    $_SESSION["count"] += 1;
}
