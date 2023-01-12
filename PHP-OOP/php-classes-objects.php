<?php
class Fruit {
// properties//
public $name;
public $color;

//methods//
function set_name($name) {
    $this->name = $name;
}
function get_name() {
    return $this->name;
}
function set_color($color) {
    $this->color = $color;
}
function get_color() {
    return $this->color;
}
}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('red');
$banana = new Fruit();
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>

<?php
$apple = new Fruit();
var_dump($apple instanceof Fruit);
?>