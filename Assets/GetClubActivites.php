<?php  
  include_once '../class/club.class.php';
  $post = new club();
  $mynews = $post -> LoadMore();
  while ( $p = $mynews->fetch()) {
    $id = $p['id'];
      echo '<li>
                <h3 class="uk-accordion-title ">'.$p['title'].'       '.$p['create_at'].' </h3>
                <hr class="uk-divider-icon">
                <div class="uk-accordion-content">
                    <div class="col-sm-8"> '.$p['body'].'</div>
                    <div class="col-sm-4"><img src="'.$p['img'].'" class="img img-responsive img-rounded"></div>
                <br>
                </div>
            </li>';
    }
  
?>