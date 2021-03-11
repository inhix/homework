<?php

echo '<b>Задача №1</b><br>
Цель задачи - сформировать html-код списка<br>
• Сформируйте массив (10 элементов) со строками вида:<br>
Кнопка 10<br>
Кнопка 9<br>
Кнопка 8<br>
...<br>
Кнопка 1<br>
• Отсортируйте массив в обратном порядке любым способом. Получить такой результат:<br>
Кнопка 1<br>
Кнопка 2<br>
...<br>
Кнопка 10<br>
 • При помощи echo, операторов склеивания и цикла foreach получить и вывести на экран такой html-код:<br>
<ul> <br>
    <li><a href="#">Кнопка 1</a></li> <br>
    <li><a href="#">Кнопка 2</a></li> <br>
    <li><a href="#">Кнопка 3</a></li> <br>
    ... <br>
    <li><a href="#">Кнопка 10</a></li> <br>
</ul> <br>';

$array = ['Кнопка 10', 'Кнопка 9', 'Кнопка 8', 'Кнопка 7', 'Кнопка 6', 'Кнопка 5', 'Кнопка 4', 'Кнопка 3', 'Кнопка 2', 'Кнопка 1'];

krsort($array);

echo 'Ответ:' . '<ul>';
foreach ($array as $value) {
    echo "<br>" . '<li><a href="#">' . $value . '</a></li>' . "</br>";
}
echo '</ul>';

echo '<b>Задача №2</b><br>
Есть массив с элементами (отрицательными и положительными). Нужно написать такую функцию deleteNegtives(), которая будет принимать массив, удалять из него элементы меньше 0 и возвращать этот массив.
Подсказки:<br>
Можно использовать цикл foreach для обхода элементов массива.<br>
Пример:<br>
// Сейчас $digits содержит отрицательные и положительные числа $digits = array(2,10, -2, 4, -5, 1, -6, 200, 1.6, 95);
$digits = deleteNegtives($digits);<br>
// Теперь $digits содержит только положительные числа<br>';

function deleteNegatives($array): array
{
    foreach ($array as $num => $value) {
        if ($value < 0)
        {
            unset ($array[$num]);
        }
    }
    return $array;
}


$digits = [-2, 10, -2, 4, -5, 1, -6, 200, 1.6, 95];
echo 'Массив до работы функции deleteNegatives():<br>';
print_r($digits);
echo '<br>Массив после работы функции deleteNegatives():</br>';
$digits = deleteNegatives($digits);
print_r($digits);
echo '<br>';

echo '<br><b>Задача №3</b></br>
Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента (коефициенты).<br>
Возвращает:<br>
• Массив с двумя корнями х1, х2, если D > 0<br>
• Один корень х, если D = 0<br>
• false, если D < 0.<br>';

function quadraticEquationSolver($a, $b, $c)
{
    $d = $b * $b - 4 * $a * $c;
    if ( $d < 0 )
    {
        return "false";
    }
    elseif ( $d == 0 )
    {
        $x = ( 0 - $b ) / ( 2 * $a );
        return $x;
    }
    elseif ( $d > 0 )
    {
        $x1 = ( 0 - $b - sqrt ($d) ) / ( 2 * $a );
        $x2 = ( 0 - $b + sqrt ($d) ) / ( 2 * $a );
        return array ('Первый корень' => $x1, 'Второй корень' => $x2);
    }

}

$answer = quadraticEquationSolver(1, -1, 0);
echo "Ответ: ";
print_r($answer);
