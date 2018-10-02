<?php 
	include_once '../class/news.class.php';
    session_start();
    $title =  $_POST['title'];
    $body =  $_POST['body'];
	$id =  $_POST['id'];
    $post = new news();
    $post->UpdateNews($title ,$body, $id);
?>