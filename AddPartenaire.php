<?php 
require_once 'Assets/verif.php';
$id = $_SESSION['id'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
?>
<!DOCTYPE html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ISET BIZERTE</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/uikit.min.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
</head>
<body>
<?php require_once 'include/navbar.php'; ?>
<div class="uk-padding-large ">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-1 ">
          <h4 class="text-center"> Ajouter Un nouveaux partenaire</h4>
          <hr class="uk-divider-icon">
          <form method="post" action="PartenaireUpload.php" enctype="multipart/form-data">
          <label>Nom du partenaire :</label>
          <div class="uk-margin" uk-margin>
            <input type="text" name="Sname" class="uk-input ">
 
           <div uk-form-custom="target: true"><br>
            <label>Logo du partenaire   : </label>  <br>  <input type="file" name="fileToUpload">
                <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>

            </div><br>
            <button class="uk-button uk-button-default uk-text-center" name="sub">Submit</button>

        </div>
        </form>
        </div>
        <div class="col-sm-5 uk-background-muted" style="height: 450px; overflow: scroll;overflow-x: hidden;">
            <h4 class="text-center uk-padding-small"> Liste des Partenaires</h4>
            <hr>
              <div id="posts"></div>
          </div>   
        </div>
    </div>
</div>
<?php 
if(!empty($_GET['sup'])){
  include_once 'class/partenaire.class.php';
  $post = new partenaire();
  $post ->DeleteEvents($_GET['sup']);
}


?>
<footer class="footer uk-padding-large uk-section uk-section-secondary uk-light" id="foot">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-xs-12">
                <h3 class="muted-text uk-text-left">Navigation : </h3>
                <div class="col-xs-6">
                  <ul class="uk-list uk-text-left">
                    <li><a href="#" uk-scroll>Acceuil</a></li>
                    <li><a href="#footer" uk-scroll>Parcours</a></li>
                    <li><a href="#footer" uk-scroll>Unités</a></li>
                    <li><a href="AllNews.php" uk-scroll>Evenement & actualités</a></li>
                    <li><a href="#footer" uk-scroll>Partenaires</a></li>
                    <li><a href="#footer" uk-scroll>Contact</a></li>
                </div>
                <div class="col-xs-6 uk-column-divider">
                  <ul class="uk-list uk-text-left">
                    <li><a href="">Club IT</a></li>
                    <li><a href="">Club Google</a></li>
                    <li><a href="">Club Radio</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 uk-margin">
            <div class="row text-center">
              <div class="col-xs-12">
                <H3>Vous pouvez nous rejoindre sur :</H3>
              </div>
              <div class="col-xs-2 col-xs-offset-2">
                <a href="https://twitter.com/radioisetbz"><i class="fa fa-twitter fa-2x"></i></a>
              </div>
              <div class="col-xs-2">
                <a href="https://www.facebook.com/I.s.e.t.Biz/"><i class="fa fa-facebook fa-2x"></i></a>
              </div>
              <div class="col-xs-2">
                <a href="https://www.linkedin.com/company/18434400/"><i class="fa fa-linkedin fa-2x"></i></a>
              </div>
              <div class="col-xs-2">
                <a href="http://www.thepictaram.club/toplace/318763526"><i class="fa fa-instagram fa-2x"></i></a>
              </div>
              <div class="col-xs-6">
                <h4><i class="fa fa-phone"></i> Telephone :090-080-0760</h4>
              </div>
              <div class="col-xs-6">
                <h4><i class="fa fa-fax"></i> Fax :090-080-0760</h4>    
              </div>
              <div class="col-xs-12">
                <h4><i class="fa fa-map-marker"></i> Adresse :090-080-0760</h4>      
              </div>
              <div class="col-xs-12">
                <h4><i class="fa fa-globe"></i> Site officiel d'ISET bizerte</h4>      
              </div>
            </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="uk-light">
      <div class="container">
        <div class="row">
            <p>&copy; All right reserved 2018 </p>
            <p class="pull-right">Designed by  <a href="#">Hanchi Ahmed</a></p>
        </div>
      </div>
    </div>
                </footer>

</body>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/uikit.min.js"></script>
  <script>          $("#posts").load("Assets/GetPartenaire.php",{},function(a,b){});</script>
</html>
