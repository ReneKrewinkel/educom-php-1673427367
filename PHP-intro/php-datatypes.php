<?php

/* string */
$x = "This is a string";


echo $x;
/* int */
$y = 3070;
var_dump($y);
/* float */
$z = 30.5;
var_dump($z)

/* Boolean */
/*$a = true;
$b = false; */
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>

<?php
/* Classes */
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this -> color = $color;
        $this -> model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this -> model . "!";
    }
}

$myCar = new Car("Black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<?php
/* Null Value */
$x = "Hello world!";
$x = null;
var_dump($x);
?>