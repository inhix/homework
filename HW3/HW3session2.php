<?php
session_start();
if (isset($_POST["ans1"])) {
    $ans1 = $_POST["ans1"];
//    echo 'В прошлом вопросе вы выбрали ответ ' . $ans1;
    $_SESSION ['ans1'] = $ans1;
}


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вопрос 1</title>
</head>
<body>

<label><b>Вопрос 1</b></label>
<form action="HW3session3.php" method="post">
    <br><label>
        <input type="radio" name="ans1" value="1"> Ответ 1
    </label>
    <br><label>
        <input type="radio" name="ans2" value="2"> Ответ 2
    </label>
    <br><label>
        <input type="radio" name="ans2" value="3"> Ответ 3
    </label>
    <br><label>
        <input type="radio" name="ans2" value="4"> Ответ 4
    </label>
    <button type="submit">Далее</button>
</form>

</body>
</html>