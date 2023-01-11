<?php
$x = 1;

while ($x < 5){
    echo "The number is: $x <br>";
    $x++;
}
?>

<?php
$i = 1;

while ($i < 6){
    echo $i;
    $i++;
}
?>

<?php
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>

<?php
for ($i = 0; $i <= 10; $i++) {
echo $i;
}
?>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach($age as $x => $val){
    echo "$x = $val<br>";
}
?>

<?php
for ($x = 0; $x <= 10; $x++) {
    if ($x == 4){
        break;
    }
    echo "The number is: $x <br>";
}
?>

<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x  <br>";
}
?>

<?php
$x = 0;

while ($x < 10){
    if ($x ==4) {
        break;
    }
    echo "The number is: $x  <br>";
    $x++;
}
?>

<?php
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>