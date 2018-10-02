
<?php

include_once 'class/news.class.php';
session_start();

$day = date('Y-m-d H:i:s');
$get = new news();
$p = $_GET['u'];

$target_dir = "upload/pdf/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (copy($_FILES["fileToUpload"]["tmp_name"], $target_dir.$p.'.'.$imageFileType)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $get -> setPDF($p,$target_dir.$p.'.'.$imageFileType);
        header("location: CreateNews.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
