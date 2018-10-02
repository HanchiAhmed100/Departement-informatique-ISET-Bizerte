<?php session_start()?>
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
  <link href="css/lightbox.css" rel="stylesheet">

  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/component.css" rel="stylesheet">
  <script src="js/modernizr.min.js"></script>
  <link rel="stylesheet" href="aos/aos.css" />
  <link href="css/main.css" rel="stylesheet">
  <link href="css/uikit.min.css" rel="stylesheet">
  <script src="aos/aos.js"></script>

  <link rel="stylesheet" type="text/css" href="dist/device-mockups.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
   
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar uk-dark">
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> 
    </button>
    <a class="navbar-brand s" href="#"><i class="fa fa-university "> </i> ISET Bizerte</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Acceuil</a></li>
      <li><a href="index.php#services">Parcours</a></li>
      <li><a href="index.php#sect" >Unités</a></li>
      <li><a href="clubIt.php">Clubs</a></li>
      <li><a href="AllNews.php" >Evenement & actualités</a></li>
      <li><a href="partenaire.php" >Partenaires</a></li>
      <li><a href="suggestion.php">Suggestion</a></li>
      <li><a href="#footer" uk-scroll>Contact</a></li>
      <li class="dropdown" style="z-index:1000000">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">☰</a>
          <ul class="dropdown-menu" style="z-index:1000000">
                <?php if(!empty($_SESSION['id'])) 
                        echo '
                        <li><a href="CreateNews.php">Gestion des Actualités</a></li>
                        <li><a href="AddPartenaire.php">Gestion des partenaires</a></li>
                        <li><a href="SuggestionDashboard.php">Gestion des Suggestion </a></li>
                        <li><a href="Clubdashboard.php">Gestion des Club</a></li>
                        <script type="text/javascript">$("#ModalRegister").load("include/RegisterModal.php",function(a,b){}); </script>
                        <li><a uk-toggle="target: #register"> Crée Un Compte</a></li>
                        <li><a href="logout.php">Deconnexion</a></li>'; 
                        else echo '<li><a uk-toggle="target: #Login">Connexion</a></li>'; ?>
                </ul>
        </li>
    </ul>
  </div>
</div>
</nav>
</div>
    <section>
      <div class="container" id="pre">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h1>Presntation </h1>
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</h4>
          </div>
        </div>
      </div>
    </section>
    <div class="uk-padding-large">
        <h2 class="text-center">Activités et project Realisées par les club de l'iset</h2>       
        <ul uk-accordion id="Load">
        </ul>
    </div>



  <section id="photostack-1" class="photostack photostack-start" >
      <div>
        <figure>
          <a class="photostack-img"><img src="images/portfolio/5.jpg" style="width: 250px ;height: 250px"  alt="img05"/></a>
          <figcaption>
            <h2 class="photostack-title">Speed Racer</h2>
          </figcaption>
        </figure>
        <figure>
          <a href="" class="photostack-img"><img src="images/portfolio/6.jpg" style="width: 225px ;height: 225px" alt="img06"/></a>
          <figcaption>
            <h2 class="photostack-title">Forever this</h2>
          </figcaption>
        </figure>
          <figure>
              <a href="#" class="photostack-img"><img src="images/portfolio/6.jpg" style="width: 225px ;height: 225px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
          <figure>
              <a href="" class="photostack-img"><img src="images/portfolio/a.jpg" style="width: 225px ;height: 225px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
          <figure>
              <a href="#" class="photostack-img"><img src="images/portfolio/B.jpg" style="width: 250px ;height: 250px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
          <figure>
              <a href="" class="photostack-img"><img src="images/portfolio/c.jpg" style="width: 250px ;height: 250px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
          <figure>
              <a href="#" class="photostack-img"><img src="images/portfolio/6.jpg" style="width: 250px ;height: 250px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
          <figure>
              <a href="" class="photostack-img"><img src="images/portfolio/6.jpg" style="width: 250px ;height: 250px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
          <figure>
              <a href="#" class="photostack-img"><img src="images/portfolio/6.jpg" style="width: 250px ;height: 250px" alt="img06"/></a>
              <figcaption>
                  <h2 class="photostack-title">Forever this</h2>
              </figcaption>
          </figure>
      </div>
    </section>
    <div style="height: 10px"></div>
<div id="footer"></div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/modernizr.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/uikit.min.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/photostack.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>
  <script>
    new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );

    $('#footer').load("include/footer.php",function(a,b){});
    $('#Load').load("Assets/GetClubActivites.php",function(a,b){});
        
  </script>
  </html>