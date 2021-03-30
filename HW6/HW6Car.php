<?php

class Car
{
    const number1 = 2;
    const number2 = 5;
    const number3 = 12;

    public $color;
    public $speed;
    public $fuel;
    public $brand;
    public $year = 2020;
    public $price;
    public $country;

    /**
     * Car constructor.
     * @param $brand
     * @param $speed
     * @param $fuel
     * @param $color
     * @param $year
     * @param $price
     * @param $country
     */
    public function __construct($brand, $speed, $fuel, $color, $year, $price, $country) {
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
        $this->year = $year;
        $this->price = $price;
        $this->country = $country;
    }

    /**
     * @param $distance
     * @return float|int
     */
    public function tripTime ($distance)
    {
        $time = $distance / $this->speed;
        return $time;
    }

    /**
     * @param $distance
     * @return float|int
     */
    public function fuelConsumption ($distance)
    {
        $time = $distance / $this->fuel;
        return $time;
    }

    /**
     * @return mixed
     */
    public static function getMaxConstant ()
    {
//        $reflector = new Car;
//        $constants = $reflector->getConstants();
        $constants = [self::number1, self::number2, self::number3];
        return max($constants);
    }

}

$car1 = new Car(1,1,1,1,1,1,1);
$car1->brand = 'Toyota';
$car1->speed = 140;
$car1->fuel = 13;
$car1->color = 'Black';
$car1->year = 2019;
$car1->price = 1000000;
$car1->country = 'Japan';

$car2 = new Car(1,1,1,1,1,1,1);
$car2->brand = 'Ford';
$car2->speed = 130;
$car2->fuel = 12;
$car2->color = 'Silver';
$car2->year = 2018;
$car2->price = 900000;
$car2->country = 'USA';

$car3 = new Car('BMW', 120,11, 'White', 2017, 800000, 'Germany');
$car4 = new Car('Skoda', 110,10, 'Blue', 2016, 700000, 'Czech Republic');

echo '<br>Первая константа равна ' . Car::number1 . '<br>';
echo '<br>Вторая константа равна ' . Car::number2 . '<br>';
echo '<br>Третья константа равна ' . Car::number3 . '<br>';
echo '<br>Самая большая константа равна ' . Car::getMaxConstant() . '<br>';