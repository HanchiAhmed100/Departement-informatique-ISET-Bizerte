<?php  
  include_once '../class/partenaire.class.php';
  $post = new partenaire();
  $mynews = $post -> Getpartenaire();
  while ( $p = $mynews->fetch()) {
    $id = $p['id'];
      echo '          
      <li>
      <div class="uk-panel">         
      <div class="uk-card uk-card-default">
      <div class="uk-card-media-left uk-cover-container">
      <img src="'.$p['logo'].'" alt="" uk-cover>
      <canvas width="200" height="200"></canvas>
            </div>
            <div class="uk-card-body">
            <h3 class="uk-card-title">'.$p['Sname'].'</h3>
        </div>
      </div>
      </div>
      </li>';
  }



?>


