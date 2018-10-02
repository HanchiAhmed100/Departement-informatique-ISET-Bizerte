<?php  
  include_once '../class/news.class.php';
  $nbr = $_POST['nbr'];
  $post = new news();
  $mynews = $post -> LoadMore();
  while ( $p = $mynews->fetch()) {
      echo "
          <div class='uk-grid-item-match'>
            <div class='uk-card uk-card-default'>
                <div class='uk-card-header'>
                    <div class='uk-grid-small uk-flex-middle' uk-grid>
                        <div class='uk-width-auto'>
                            <img class='uk-border-circle' width='40' height='40' src='images/sigle-iset.jpg'>
                        </div>
                        <div class='k-width-expand'>
                            <h3 class='uk-card-title uk-margin-remove-bottom'>".$p['title']."</h3>
                            <p class='uk-text-meta uk-margin-remove-top'><time datetime='2016-04-01T19:00'>".$p['create_at']."</time></p>
                        </div>
                    </div>
                </div>
                <div class='uk-card-body'>
                    <p class='uk-text-truncate'>".$p['body']."</p>
                </div>
                <div class='uk-card-footer'>
                    <a href='php/News.php?News=".$p['id']."' class='uk-button uk-button-text'>Read more</a>
                </div>
            </div>
          </div>
      ";
  }
?>