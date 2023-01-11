<?php
$t = date("H");

if ($t < "12"){
    echo "works for morning";
} 
elseif ($t >= "12"){ 
    echo "works for afternoon";
}
else {
    echo "not works";
}
?>

<?php
/* Exercise */
$a = 50;
$b = 10;
if ($a > $b){
    echo "Hello, world";
}