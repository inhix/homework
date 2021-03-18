<?php

echo '<b>Задача 1:</b> Работа со строками и переменными <br>
• Определить три переменных со значениями:<br>
"Доброе утро"<br>
"дамы"<br>
"и господа"<br>
• Вывести значения переменных в браузер.<br>
• Сформировать строку "Доброе утро, дамы и господа" используя созданные переменные и <br>
комбинированный оператор склеивания.<br><br>
Ответ: ';

$var1 = "Доброе утро";
$var2 = "дамы";
$var3 = "и господа";

echo $var1 . ', ' . $var2 . ' ' . $var3;

echo '<br><br><br><br><b>Задача 2:</b> Работа с массивами <br>
• Создать 2 простых массива с количеством элементов 5.<br>
• В первый массив добавить один элемент с индексом (!)element и произвольным значением.<br>
• Из второго массива удалить элемент с индексом 0. Используйте функцию unset();<br>
• Вывести на экран элементы под индексом 2 из первого и второго массива.<br>
• Вывести на экран содержимое массивов полностью.<br>
• Найти количество элементов в каждом массиве. Используйте функцию count().<br>
Вывести результаты на экран<br>
Ответ: <br>';

$arr1 = [10, 20, 30, 40, 50];
$arr2 = [60, 70, 80, 90, 100];

$arr1 += ['(!)element' => 111];
unset ($arr2[0]);

echo 'Элемент под индексом 2 в первом массиве - ' . $arr1['2'] . '<br>';
echo 'Элемент под индексом 2 во втором массиве - ' . $arr2['2'] . '<br><br>';
echo 'Первый массив: ';
var_dump($arr1);
echo '<br>Второй массив: ';
var_dump($arr2);

echo '<br>В первом массиве ' . count($arr1) . ' элементов.<br>';
echo 'Во втором массиве ' . count($arr2) . ' элементов.<br>';

echo "<br><br><br><b>Задача 3:</b> Работа с датами <br>
- Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.<br>
Ответ:<br><br>";

echo '1) ' . date('Y-m-d', time());
echo '<br>2) ' . date('d.m.Y', time());
echo '<br>3) ' . date('d.m.y', time());
echo '<br>4) ' . date('h:i:s', time());
echo '<br>5) ' . date('Y-m-d h:i:s', 1615632772);

echo "<br><br><br><b>Задача 4:</b><br>
Сделайте функцию. Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд.<br>
Если есть - выведите 'да', а если нет - выведите 'нет'.<br>
Ответ: ";

/**
 * @param $array
 * @return bool
 */
function repeatVal($array): bool
{
    $result = false;
    if (gettype($array) === 'array') {
        foreach ($array as $key => $value) {
            if ($array[$key] === next($array)) {
                $result = true;
            }
        }
    }
   return $result;
}

$array3 = [4, 6, 6, 7, 10, 3, 4];

var_dump(repeatVal($array3));

echo '<br><br><br><b>Задача 5:</b><br>
Сделайте функцию, которая параметрами принимает 2 числа.<br>
Если их сумма больше 10 - пусть функция вернет true, а если нет - false.<br>
Ответ: ';

function ifTen($num1, $num2)
{
    if ($num1 + $num2 >= 10) {
        return true;
    }
    return false;
}

$x1 = 4;
$x2 = 9;

var_dump(ifTen($x1, $x2));

echo '<br><br><br><b>Задача 6:</b><br>
Сделайте функцию. Дан двухмерный массив с числами, например [[1, 2], [3, 4]], [[5, 6], [7, 8]].<br>
Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.<br>
Ответ: ';

/**
 * @param array $array
 * @return float
 */
function sum(array $array): float
{
    $sum = 0;
    foreach ($array as $array2) {
        foreach ($array2 as $value) {
            $sum += $value;
        }
    }
    return $sum;
}

$array4 = [[1, 2], [3, 4], [5, 6], [7, 8]];

echo sum($array4);

echo '<br><br><br><b>Задача 7:</b> Работа со cookie <br>
Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.<br>
Если сегодня день рождения пользователя - поздравьте его!<br>
<br><br>';

echo 'Введите дату своего рождения в формате "Day Month":';

setcookie('userBirthday', strtotime($_POST["birthday"]));
$_COOKIE ['userBirthday'] = strtotime($_POST["birthday"]);
?>

    <form method="POST" action="HW4.php">
        <p>
            <input type="text" name="birthday">
        </p>
        <p>
            <button type="submit" name="send" value="test" onClick="HW4.php">Send</button>
        </p>
    </form>

<?php

if (isset($_COOKIE['userBirthday'])) {
    if ($_COOKIE['userBirthday'] > strtotime('today')) {
        $days = ($_COOKIE['userBirthday'] - strtotime('today')) / 86400;
        echo 'Ваш день рождения будет через ' . ceil($days) . ' дней';
    } elseif ($_COOKIE['userBirthday'] < strtotime('today')) {
        $days = ($_COOKIE['userBirthday'] - strtotime('today -1 year')) / 86400;
        echo 'Ваш день рождения будет через ' . ceil($days) . ' дней';
    }
    if ($_COOKIE['userBirthday'] == strtotime('today')) {
        echo 'Поздравляем с Днём Рождения!';
    }
}

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
    $_SESSION["count"]++;
    echo 'Вы ешё не обновляли эту страницу';
} else {
    echo 'Вы обновляли эту страницу ' . $_SESSION["count"] . ' раз';
    $_SESSION["count"]++;
}
?>
   <form method="POST" action="HW4.php">
        <p>
            <input type="hidden" name="count" action="<?php $_POST["count"]++; ?>">
        </p>

    </form>
<?php

//if (isset($_SESSION["count"])) {
//    $_SESSION["count"]++;
//} else {
//    $_SESSION["count"] = 0;
//}
//echo $_SESSION["count"];

echo '<br><br><br><b>Задача 9: Работа со файлами</b><br>
- Пусть в корне вашего сайта лежит файл test.txt, в котором записан текст \'12345\'.<br>
Откройте этот файл, запишите в конец текста восклицательный знак и сохраните новый текст обратно в файл.<br>
- Пусть в корне вашего сайта лежит файл test.txt.<br>
Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку.';


fwrite(fopen('test.txt', 'a'), '12345');
$string = '!';
fwrite(fopen('test.txt', 'a'), $string);
rename('test.txt', 'dir/test.txt');

//file_put_content();





