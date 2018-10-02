<?php  
include_once '../class/news.class.php';
        $cli = new news();    
        $cli->DeleteNews($_POST['id']); 
?>