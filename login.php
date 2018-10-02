<?php include_once 'class/login.class.php';
  $connect = new login();
  $mail = $_POST['mail'];
  $motdepasse = stripslashes(strip_tags($_POST['motdepasse']));
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $hashMDP = $connect->passwordhash($motdepasse);
    $check = $connect->select($mail,$hashMDP);
  }else{
    header('location:index.php?E=Erreur');
  }

?>