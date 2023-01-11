<?php
define("GREETING", "Welcome to W3Schools.com");
echo GREETING;
?>

<?php
define("HALLO", "Welcome to W3Schools.com", true);
echo HALLO;
?>

<?php
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
?>

<?php
define("WELCOME", "Welcome to W3Schools.com");

function myTest() {
    echo WELCOME;
}

myTest();
?>
