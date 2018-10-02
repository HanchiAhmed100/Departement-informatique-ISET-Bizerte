<?php 
	include_once '../class/news.class.php';
    session_start();
    $title =  $_POST['title'];
    $body =  $_POST['body'];
    $created_at = date('Y-m-d H:i:s');
    $userid =  $_SESSION['id'];
    $post = new news();
    $post->SetNews($userid,$title,$body,$created_at);
?>