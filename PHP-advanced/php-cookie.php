<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<?php
setcookie("user", "", time()-3600);
?>

<html>
    <body>
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie name'" . $cookie_name . "' is not  set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
        <?php
        echo "Cookie 'user' is deleted.";
        ?>
    </body>
</html>