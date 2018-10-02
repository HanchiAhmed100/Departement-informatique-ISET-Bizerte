<?php 
	include_once '../class/club.class.php';
    session_start();
    $title =  $_POST['title'];
    $body =  $_POST['body'];
	$id =  $_POST['id'];
    $post = new club();
    $post->UpdateClub($title ,$body, $id);
?>