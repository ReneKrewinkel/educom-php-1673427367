<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg();
?>

<?php
function familyName($fname) {
    echo "$fname Nix . <br>";
}

familyName("John");
familyname("Wesley");
familyName("Marie");
familyName("Jerome");
?>

<?php
function familyid($famnaam, $year) {
    echo "$famnaam Nix Born in $year . <br>";
}
familyid("Wesley", "1993");
familyid("Marie", "2022");
familyid("Jerome", "2021");
?>

<?php
/* is strict en we geven een nummber terwijl we een int verwachten 
function addNumbers(int $a, int $b){
    return $a + $b;
}
echo addNumbers(5, "5 days");
?>
*/
?>

<?php /* declare(strict_types=1);?>
<?php
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80); */
?>

<?php
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);
  ?>
  
<?php
function addNumbers(float $a, float $b):  float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>

<?php
function telop(float $a, float $b):  float {
    return (int)($a + $b);
}
echo telop(1.2, 5.2);
?>

<?php
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo($num);
?>

<?php
/* Exercise */
function groet(){
    echo "Hello World!";
}

groet();
?>

<?php