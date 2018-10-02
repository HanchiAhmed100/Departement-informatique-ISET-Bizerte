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
    <meta name="description" content="suggestion">
    <meta name="author" content="hanchi ahmed">
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
        <div class="col-sm-6 col-sm-offset-3">
            <ul uk-accordion>
            <?php
                require_once 'class/demande.class.php';
                $post = new demande();
                $Cs = $post->GetCountSeen();
                while( $c =  $Cs-> fetch() ){
                    $nbrSeen = $c['nbr'];
                }
                $Cus = $post->GetCountUnSeen();
                while( $c =  $Cus-> fetch() ){
                    $nbrUnSeen = $c['nbr'];
                }
                echo'<li class="uk-open">
                <h3 class="uk-accordion-title"><br>Les Suggestion vue <span class="uk-badge">'.$nbrSeen.'</span></h3>
                <hr>
                <div class="uk-accordion-content">';
                $p = $post -> GetSuggestionSeen();
                     while($s = $p -> fetch()){ 
                        echo'
                                <dl class="uk-description-list uk-description-list-divider">
                                    <dt>Sujet : '.$s['suject'].'<br>
                                    <dd>
                                        Ecrit par :'.$s['nom'].'<br>
                                        Classe : '.$s['classe'].'<br>
                                        <a href="SuggestionDashboard.php?S='.$s['id'].'"> Voir Plus</a>
                                        <a href="SuggestionDashboard.php?Sup='.$s['id'].'" class="uk-align-right"> Supprimer</a>
                                    </dd>
                                </dl>                                    
                        ';
                     }
                echo'</div></li>';
                $s = $post -> GetSuggestionUnSeen();
                echo'<li>
                <h3 class="uk-accordion-title"><br>Les Suggestion Non vue <span class="uk-badge">'.$nbrUnSeen.'</span></h3>
                <hr>
                <div class="uk-accordion-content">';
                while($x = $s -> fetch()){ 
                        echo'
                                <h5>Sujet : '.$x['suject'].'<br>
                                    Ecrit par : '.$x['nom'].'<br>
                                    classe : '.$x['classe'].'<br></h5>
                                    <a href="SuggestionDashboard.php?S='.$x['id'].'"> Voir Plus</a>
                                    <a href="SuggestionDashboard.php?Sup='.$x['id'].'" class="uk-align-right"> Supprimer</a>
                            <hr>';
                }
                echo'</div></li>';  
                ?>
            </ul>
            <div class="uk-padding-large uk-text-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <?php 
                if(!empty($_GET['S'])){
                    $post = new demande();
                    $post -> setSeen($_GET['S']);
                    $p = $post -> GetOneNew($_GET['S']);
                    while($x = $p->fetch()) {
                        echo'<div class=" uk-padding-small">
                                <h4> '.$x['nom']. ' : ' .$x['suject'].' </h4>
                                <p> '.$x['body'].' </p>
                                <hr>
                                <p class="">Mail : '.$x['mail'].'<br>Classe : '.$x['classe'].'<br>  Telephone : '.$x['tel'].' </P>
                            </div>';
                    }
                }
            ?>
        </div>
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
<?php 
                if(!empty($_GET['Sup'])){
                    $post = new demande();
                    $post->Delete($_GET['Sup']);
                }
            ?>