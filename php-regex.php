<?php
$str = "Visit W3schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);
?>

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>

<?php
$str = "Apples and bananas";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);
?>