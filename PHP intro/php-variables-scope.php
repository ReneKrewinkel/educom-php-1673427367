<?php
$x = 5;

function myExample(){
    $x = 6;
    echo "<p> My variable stored is : $x</p>";
}

myExample();

echo "<p> Variable x outside function is : $x</p>";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3schools.com";

$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>


<?php

print "<h2>" . $txt1 . "</h2>";