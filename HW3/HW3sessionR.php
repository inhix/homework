<?php

session_start();
if (isset($_SESSION["ans1"])) {
    $answer1 = $_SESSION["ans1"];
    echo 'В первом вопросе вы выбрали ответ ' . $answer1 . '<br>';
}

if (isset($_SESSION["ans2"])) {
    $answer2 = $_SESSION["ans2"];
    echo 'Во втором вопросе вы выбрали ответ ' . $answer2 . '<br>';
}

if (isset($_POST["ans3"])) {
    $ans3 = $_POST["ans3"];
    echo 'В третьем вопросе вы выбрали ответ ' . $ans3 . '<br>';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат теста</title>
</head>
<body>

</body>
</html>
