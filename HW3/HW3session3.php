<?php
session_start();
if (isset($_POST["ans2"])) {
    $ans2 = $_POST["ans2"];
//    echo 'В прошлом вопросе вы выбрали ответ ' . $ans2;
    $_SESSION ['ans2'] = $ans2;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вопрос 3</title>
</head>
<body>

<label><b>Вопрос 1</b></label>
<form action="HW3sessionR.php" method="post">
    <br><label>
        <input type="radio" name="ans3" value="1"> Ответ 1
    </label>
    <br><label>
        <input type="radio" name="ans3" value="2"> Ответ 2
    </label>
    <br><label>
        <input type="radio" name="ans3" value="3"> Ответ 3
    </label>
    <br><label>
        <input type="radio" name="ans3" value="4"> Ответ 4
    </label>
    <button type="submit">Далее</button>
</form>

</body>
</html>
