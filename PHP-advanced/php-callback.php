<?php
function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); }, $strings);
print_r($lengths);
?>

<?php
function exclaim($str){
    return $str . "! ";
}

function ask($str){
    return $str . "? ";
}

function printFormatted($str, $format){
    echo $format($str);
}

printFormatted("Hello world", "exclaim");

printFormatted("Hello world", "ask");
?>