<?php  
  include_once '../class/news.class.php';
  $post = new news();
  $mynews = $post -> GetNews();
  while ( $p = $mynews->fetch()) {
    $id = $p['id'];
      echo "
          <div class='uk-grid-item-match'>
            <div class='uk-card uk-card-default'>
                <div class='uk-card-header'>
                    <div class='uk-grid-small uk-flex-middle' uk-grid>
                        <div class='uk-width-auto'>
                            <img class='img' width='40' height='40' src='images/sigle-iset.jpg'>
                        </div>
                        <div class='uk-width-expand'>
                            <h3 class='uk-card-title uk-margin-remove-bottom'>".$p['title']."</h3>
                            <p class='uk-text-meta uk-margin-remove-top'><time datetime='2016-04-01T19:00'>".$p['create_at']."</time></p>
                        </div>
                    </div>
                </div>
                <div class='uk-card-body'>
                    <p class='uk-text-truncate'>".$p['body']."</p>
                </div>
                <div class='uk-card-footer'>
                    <a href='OneNews.php?News=".$p['id']."' class='uk-button uk-button-text'>Voir plus</a>
                </div>    
            </div><br>
          </div>
          ";
  }
?>