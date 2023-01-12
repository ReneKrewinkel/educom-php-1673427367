<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Sorry, file already exists";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 50000) {
  echo "Sorry, file is too big.";
  $uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
  echo "Sorry, only jpg, png, jpeg, and gif files are allowed.";
  $uploadOk = 0;	
}
?>