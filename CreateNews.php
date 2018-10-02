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
  <script type="text/javascript" src="js/jquery.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/uikit.min.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
</head>
<body>
<?php require_once 'include/navbar.php'; ?>
<div class="uk-padding-large">
    <div class="row">
        <div class="col-sm-7">
          <h4 class="text-center"> Crée Un Nouvel Article</h4>
          <hr class="uk-divider-icon">

            <label>Titre :</label>
            <input type="text" name="title" class="uk-input uk-margin " id="t">
            <label>Aritcle :</label>
            <textarea name="body" class="uk-textarea uk-margin uk-padding" id="b"></textarea> <br>
            <p class="uk-text-muted uk-text-bullet">Crée Par : <?php echo $nom.' '.$prenom?></p>
            <br>
  
            <button name="submit" class="uk-button uk-button-primary" onclick="sendPoste($('#t').val(),$('#b').val());">Valider</button>
            <input type="reset" name="" class="uk-button uk-button-danger" >
        </div><br>
        <div class="col-sm-5 uk-background-muted" style="height: 450px; overflow: scroll;overflow-x: hidden;">
            <h4 class="text-center uk-padding-small"> Les Articles Que Vous Avez Crée</h4>
            <hr>
              <div id="posts"></div>
          </div>   
        </div>
    </div>
</div>
<div id="modal"></div>
<div id="footer"></div>
</body>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/uikit.min.js"></script>
        <script type="text/javascript">
          $("#footer").load("include/footer.php",function(a,b){});
          $("#posts").load("Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});
           

          function sendPoste(text,bod){
            $.post("Assets/sendPost.php",{title:text,body:bod},function(a,b){if(b == "success"){UIkit.notification({message: 'Article Ajouter avec succss', pos: 'bottom-center', status: 'primary'})}});
            setTimeout(function(){$("#posts").load("Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});},1000);
           x
          }
          
          function DeletePost(id){

            $.post("Assets/DeletePost.php",{id:id},function(a,b){if(b =="success"){UIkit.notification({message: 'Article supprimer', pos: 'bottom-center', status: 'primary'})}});
            setTimeout(function(){$("#posts").load("Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});},1000);
          }
          
          function UpdatePost(id){
            $('#modal').load("Assets/GetOnePost.php",{id:id},function(a,b){});
          }
          
          function SetUpdate(text,bod,id){
            $.post("Assets/UpdatePost.php",{title:text,body:bod,id:id},function(a,b){if(b == "success"){UIkit.notification({message: 'Mise à jour effectuée', pos: 'bottom-center', status: 'primary'})}});
            setTimeout(function(){$("#posts").load("Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});},1000);
            $( "#update" ).css( "z-index","-1" );
          }



        
        </script> <div id="register" class="uk-flex-top" uk-modal>
          <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large uk-padding-remove-bottom ">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form method="POST" action="register.php">
                <div class="uk-margin uk-text-center">
                    <div class="uk-inline">
                        <span class="uk-form-icon"><i class="fa fa-user"></i></span>
                        <input class="uk-input uk-form-width-large" type="text" name="nom" placeholder="Nom :">
                    </div>
                </div>
                <div class="uk-margin uk-text-center">
                    <div class="uk-inline">
                        <span class="uk-form-icon uk-form-icon-flip"><i class="fa fa-user"></i></span>
                        <input class="uk-input uk-form-width-large" type="text" name="prenom" placeholder="Prenom :">
                    </div>
                </div>
                <div class="uk-margin uk-text-center">
                    <div class="uk-inline">
                        <span class="uk-form-icon"><i class="fa fa-google"></i></span>
                        <input class="uk-input uk-form-width-large" type="password" name="mail" placeholder="Adress Mail :">
                    </div>
                      </div>          
                      <div class="uk-margin uk-text-center">
                        <div class="uk-inline">
                        <span class="uk-form-icon uk-form-icon-flip"><i class="fa fa-lock"></i></span>
                        <input class="uk-input uk-form-width-large" type="password" name="motdepasse" placeholder="Mot De Passe :">
                    </div>
                </div>
              <p class="uk-text-center">
                  <input class="uk-button uk-button-primary" type="submit" name="submit">
                  <input class="uk-button uk-button-default uk-modal-close" type="reset">
              </p>
            </form>
          </div>
        </div>



        <div id="confirmation" class="uk-flex-top" uk-modal>
          <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large uk-padding-remove-bottom ">
            <button class="uk-modal-close-default" type="button" uk-close></button>
           		<p>vous allez effacer un article</p>
           		<button value="yes" style="uk-button">Oui</button>
           		<button type="button" style="uk-button" uk-close>Non</button>
          </div>
        </div>
        <style type="text/css">
        	.uk-notification{ background-color: #000;color: #fff }
        	.uk-notification-message{background-color: #000;color: #fff}
        </style>
</html>
