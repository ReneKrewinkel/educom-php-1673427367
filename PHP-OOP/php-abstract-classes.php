<?php
abstract class Car{
    public $name;
    public function __construct($name) {
        $this ->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car{
    public function intro() : string{
        return "Im an $this->name";
    }
}

class Volvo extends Car{
    public function intro() : string{
        return "Im a $this->name";
    }
}
class citroen extends car{
    public function intro() : string{
        return "Im a $this->name";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>";
?>