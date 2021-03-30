<?php

class Figure
{
    const SIDES_COUNT = 3;
    public $area;
    public $color;

    public static function infoAbout()
    {
        echo '<br>Это геометрическая фигура!</br>';
    }
}

class Rectangle extends Figure
{
    const SIDES_COUNT = 4;
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea()
    {
        $area = $this->a * $this->b;
        return $area;
    }
    final public static function infoAbout()
    {
        echo '<br>Это класс прямоугольника. У него 4 стороны</br>';
    }
}

class Triangle extends Figure
{
    const SIDES_COUNT = 3;
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        $area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $area;
    }
    final public static function infoAbout()
    {
        echo '<br>Это класс треугольника. У него 3 стороны</br>';
    }
}

class Square extends Figure
{
    const SIDES_COUNT = 4;
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function getArea()
    {
        $area = $this->a * $this->a;
        return $area;
    }
    final public static function infoAbout()
    {
        echo '<br>Это класс квадрата. У него 4 стороны</br>';
    }
}

$rect1 = new Rectangle(5,7);
$rect2 = new Rectangle(10,6);
$triangle1 = new Triangle(4,5,6);
$triangle2 = new Triangle(8,9,3);
$squ1 = new Square(5);
$squ2 = new Square(12);

$array = [$rect1, $rect2, $triangle1, $triangle2, $squ1, $squ2];

foreach ($array as $figure)
{
    $n += 1;
    echo '<br>Площадь фигуры номер ' . $n . ' равна ' . $figure->getArea() . '.</br>';
}
