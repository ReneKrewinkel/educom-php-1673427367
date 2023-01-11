<?php
$favcolor = "black";

switch ($favcolor) {
    case "red":
        echo "Favorite color is red";
        break;
    case "blue":
        echo "Favorite color is blue";	
        break;
    case "green":
        $favcolor = "orange";
        echo "Favorite color is orange";
        break;
    default:
    echo "Your favorite color is neither red nor blue nor green";
}
?>

<?php
/* Exercise */
$color = "red";

switch ($color) {
    case "red":
        echo "Hello";
        break;
    case "green";
        echo "Welcome";
        break;
}