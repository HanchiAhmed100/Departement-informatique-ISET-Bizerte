<?php session_start() ?>
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
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/uikit.min.css" rel="stylesheet">
</head>
<body>
<?php require_once 'include/navbar.php'; ?>
<div class="uk-padding-large">
    <div class="row">
        <div class="col-sm-6 ">

            <?php 
                if(!empty($_GET['M']))
                    {echo'        <div class="uk-padding-large uk-text-primary" uk-alert>
                        <a class="uk-alert-close" uk-close></a>';
        
                        if($_GET['M'] == "Set" )
                            echo '<h3> Merci pour votre suggestion :) </h3>' ;
                        if($_GET['M'] == "fakeM" )
                            echo '<h3> L\'adress mail que vous avez fournie est fausse ! </h3>' ;
                        if($_GET['M'] == "fakeN" )
                            echo '<h3> Le nom et le prenom doit contenire que des lettre ! </h3>' ;
                        if($_GET['M'] == "erreur" )
                            echo '<h3> Desolé il y a eu un probleme veuillez réessayer :( </h3>' ;
                    echo'</div>';
                    }

            ?>
            <form method="post" action="Assets/sug.php" >
            <label>Nom et Prenom : </label>
            <input type="text" name="nom" class="uk-input" required>
            <label>Adresse Mail : </label>
            <input type="mail" name="mail" class="uk-input" required>
            <label>Telephone : </label>
            <input type="number" name="tel" class="uk-input" required>
            <label>Classe : </label>
            <select name="classe" class="uk-select">
                <option value="1er TI">1er Annnee</option>
                <option value="2eme DSI">2eme DSI</option>
                <option value="2eme RSI">2eme RSI</option>
                <option value="2eme SEM">2eme SEM</option>
                <option value="3eme DSI">3eme DSI</option>
                <option value="3eme RSI">3eme RSI</option>
                <option value="3eme SEM">3eme SEM</option>
            </select>
            <label>Suject : </label>
            <select name="suject" class="uk-select">
                <option value="Demande d'une formation">Demande d'une formation</option>
                <option value="Demande de creation d'un nouveau club">Demande de creation d'un nouveau club</option>
                <option value="Demande d'une information">Demande d'une information</option>
                <option value="Demande d'un evenement">Demande d'un evenement</option>
                <option value="Autre" >Autre</option>
            </select>
            <label>Suggestions : </label>
            <textarea name="body" id="" class="uk-textarea uk-padding-large uk-padding-remove-top" ></textarea>
            <input type="submit" class="uk-button uk-button-primary uk-margin" name="sub">
            <input type="reset" class="uk-button uk-button-secondary uk-margin uk-align-right">
            </form>
        </div>
        <div class="col-sm-6 ">
        <div class="uk-padding-small">
        </div>
            <h4>Pour laisser une suggestion il faut remplir ce formulaire <br>
            nb : tous les champ sont obligatoire</h4>
            <h2>Remarque :</h2>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In debitis incidunt
             voluptatum beatae voluptatem nostrum aspernatur perferendis. Eos iure, expedita
              accusamus iste cum sequi aliquid, neque excepturi voluptas animi cumque!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In debitis incidunt
             voluptatum beatae voluptatem nostrum aspernatur perferendis. Eos iure, expedita
              accusamus iste cum sequi aliquid, neque excepturi voluptas animi cumque!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In debitis incidunt
             voluptatum beatae voluptatem nostrum aspernatur perferendis. Eos iure, expedita
              accusamus iste cum sequi aliquid, neque excepturi voluptas animi cumque!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In debitis incidunt
             voluptatum beatae voluptatem nostrum aspernatur perferendis. Eos iure, expedita
              accusamus iste cum sequi aliquid, neque excepturi voluptas animi cumque!
            </p>
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