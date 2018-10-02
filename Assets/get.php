<?php
  header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
  include_once '../class/news.class.php';
  $post = new news();
  $mynews = $post -> LoadMore();
  echo json_encode($mynews->fetchAll());
?>