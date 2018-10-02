<?php  
include_once '../class/club.class.php';
        $cli = new club();    
        $cli->DeleteClub($_POST['id']); 
?>