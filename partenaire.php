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

<div class="uk-background-muted uk-padding-large">
<div class="uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid id="ppp">
<?php  
  include_once 'class/partenaire.class.php';
  $post = new partenaire();
  $mynews = $post -> LoadMorePartenaire();
  while ( $p = $mynews->fetch()) {
    $id = $p['id'];
      echo '          
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="'.$p['logo'].'" alt="" uk-cover>
                        <canvas width="100" height="250"></canvas>
                    </div>
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">'.$p['Sname'].'</h3>
                    <p class="uk-text-muted">Depuis :'.$p['create_at'].'</p>
                </div>
            </div>
        </div>';
  }
?>
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