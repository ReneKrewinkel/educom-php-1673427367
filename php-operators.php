<?php
/* operators */
$x = 5;
$y = 2;
$z = 8;

echo $x + $y .  "<br>";
echo $x - $z .  "<br>";
echo $x * $y .  "<br>";
echo $x / $z . "<br>";
echo $x % $z . "<br>";
echo  $x ** $z  . "<br>";

?>


<?php
/* Assignment operators */
echo $x = $y .  "<br>";
?>

<?php
$x = 5;
$x -= 30;
echo $x;
?>

<?php
$x = 5;
$x += 25;
echo $x;
?>

<?php
$x = 5;
$x *= 60;
echo $x;
?>

<?php
$x = 5;
$x /= 60;
echo $x;
?>

<?php
$x = 5;
$x %= 60;
echo $x;
?>

<?php
/* Comparison Operators */
$x = 5;
$y = 9;

var_dump($x == $y);
?>

<?php
$x = 5;
$y = 5.0;

var_dump($x === $y);
?>

<?php
$x = 5;
$y = 9;

var_dump($x!= $y);
?>

<?php
$x = 5;
$y = 9;

var_dump($x<>$y );
?>

<?php
$x = 5;
$y = "string";

var_dump($x!== $y );
?>

<?php
$x = 5;
$y = 2;

var_dump($x > $y);
?>

<?php
$x = 5;
$y = 2;

var_dump($x < $y);
?>

<?php
$x = 5;
$y = 5;

var_dump($x >= $y);
?>

<?php
$x = 5;
$y = 5;

var_dump($x <= $y);
?>

<?php
$x = 5;
$y = 2;

var_dump($x <=> $y);
?>

<?php
/* Increment/decrement operators */
$x = 5;
$y = 2;
echo ++$x;
?>

<?php
$x = 5;
$y = 2;
echo $x++;
?>

<?php
$x = 5;
$y = 2;
echo --$x;
?>

<?php
$x = 5;
$y = 2;
echo $x--;
?>

<?php
/* Logical operators */
$x = 2;
$y = 5;

if ($x == 2 and $y == 5) {
    echo "works";
}
?>

<?php
$x = 2;
$y = 5;

if ($x == 2 or $y == 4) {
    echo "works";
}
?>

<?php
$x = 2;
$y = 5;

if ($x == 2 xor $y == 4) {
    echo "works";
}
?>

<?php
$x = 2;
$y = 5;

if ($x == 2 && $y == 5) {
    echo "works";
}
?>

<?php
$x = 2;
$y = 5;

if ($x == 2 || $y == 4) {
    echo "works";
}
?>

<?php
$x = 2;
$y = 5;

if ($x !== 3) {
    echo "works";
}
?>

<?php
/* string operators */
$x = array("a" => "blue", "b" => "black");
$y = array("c" => "yellow", "d" => "green");

print_r($x + $y);
?>

<?php

$x = array("a" => "blue", "b" => "black");
$y = array("c" => "yellow", "d" => "green");

var_dump($x == $y);
?>

<?php

$x = array("a" => "blue", "b" => "black");
$y = array("c" => "yellow", "d" => "green");

var_dump($x === $y);
?>

<?php

$x = array("a" => "blue", "b" => "black");
$y = array("c" => "yellow", "d" => "green");

var_dump($x != $y);
?>

<?php

$x = array("a" => "blue", "b" => "black");
$y = array("c" => "yellow", "d" => "green");

var_dump($x <> $y);
?>

<?php

$x = array("a" => "blue", "b" => "black");
$y = array("c" => "yellow", "d" => "green");

var_dump($x !== $y);
?>

<?php
/* Conditional Assignment operator */
 // if empty($user) = TRUE, set $status = "anonymous"
 echo $status = (empty($user)) ? "anonymous" : "logged in";
 echo("<br>");

 $user = "John Doe";
 // if empty($user) = FALSE, set $status = "logged in"
 echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  

<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  

<?php
/* exercise */
echo 10 * 5;
?>