<?php
  header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
  include_once '../class/partenaire.class.php';
  $post = new partenaire();
  $mynews = $post -> LoadMorePartenaire();
  echo json_encode($mynews->fetchAll());
?>