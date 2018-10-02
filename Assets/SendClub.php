<?php 
	include_once '../class/club.class.php';
    session_start();
    $title =  $_POST['title'];
    $body =  $_POST['body'];
    $created_at = date('Y-m-d H:i:s');
    $userid =  $_SESSION['id'];
    $post = new club();
    $post->SetClub($userid,$title,$body,$created_at);
?>