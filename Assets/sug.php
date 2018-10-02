<?php
   require_once '../class/demande.class.php';
    if(!empty($_POST['sub'])){
        $nom = stripslashes(strip_tags($_POST['nom']));
        $mail = stripslashes(strip_tags($_POST['mail']));
        $tel = $_POST['tel'];
        $classe = $_POST['classe'];
        $suject = $_POST['suject'];
        $body = stripslashes(strip_tags($_POST['body']));
        $create_at = date("y-m-d");
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
            header('location:../suggestion.php?M=fakeN');
          }
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $post = new demande();
            $Ip = $post ->GetIp();
            $post -> SetSuggestion($nom,$mail,$tel,$classe,$suject,$body, $create_at,$Ip,$hostname );
        }
        else{
            header('location:../suggestion.php?M=fakeM');
        }

    }

?>