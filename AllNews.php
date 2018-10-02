<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ISET BIZERTE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/uikit.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
  </head>
<body>
<div id="ModalRegister"></div>
<?php require_once 'include/navbar.php'; ?>

<div class="uk-background-muted">
  <div class="container">
    <div class="row">
  <?php
  include_once 'class/news.class.php';

    $post = new news();
    $pos = $post -> LoadMore(); 
    while ($p = $pos->fetch()) {
  echo'<div class="uk-margin uk-padding-large">
         <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src='.$p["img"].' alt="" width="350px" height="350px" uk-cover>
            </div>
            <div>
                <div class="uk-card-body uk-alert-primary uk-text-center"  uk-alert>
                    <h3 class="uk-card-title uk-text-large uk-text-capitalize">'.$p['title'].'</h3>
                    <p> '.$p['body'].'</p>';
                    if( $p['pdf'] != "0" )
                    echo'<a href="'.$p['pdf'].'"> Cliquer ici pour le pdf</a>';
                echo'</div>
                <div class="uk-card-media-bottom uk-text-center uk-padding-small">
                  <h5 class="uk-heading-bullet uk-text-capitalize"> Article Crée Par : '.$p['nom'].' '.$p['prenom'].' à '.$p['create_at'].'</h5>
                </div>
            </div>
          </div>
        </div>
';

    }

  ?>
    </div>
  </div>
</div>
<div id="footer"></div>
</body>
<div id="modal"></div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/uikit.min.js"></script>
    <script type="text/javascript">
      $('#footer').load("include/footer.php",function(a,b){});
      $('#modal').load("include/modal.php",function(a,b){});
  </script>
</html>