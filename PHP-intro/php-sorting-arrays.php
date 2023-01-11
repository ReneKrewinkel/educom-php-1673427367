<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
$numberslength= count($numbers);
for($y = 0; $y  < $numberslength; $y++) {
    echo $numbers[$y];
    echo "<br>";
} 
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $z => $z_value) {
    echo "Key= " . $z . " Value= " . $z_value;
    echo "<br>";
}

arsort($age);
foreach($age as $z => $z_value) {
    echo "Key= ". $z. " Value= ". $z_value;
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
foreach($age as $z => $z_value) {
    echo "Key= ". $z. " Value= ". $z_value;
    echo "<br>";
}
?>
<?php
//exercise//
$colors = array("red", "green", "blue", "yellow"); 
sort($colors)
?>