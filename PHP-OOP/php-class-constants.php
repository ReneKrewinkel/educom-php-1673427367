<?php
class Goodbye {
    const LEAVING_MESSAGE = "Thank you";
}

echo Goodbye :: LEAVING_MESSAGE
?>

<?php
class Goodbyes {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbyes();
$goodbye->byebye();
?>