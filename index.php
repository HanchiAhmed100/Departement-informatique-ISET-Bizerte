<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Iset bizerte , IT , departement ,technologies informatique">
  <meta name="author" content="hanchi Ahmed">
  <title>ISET BIZERTE</title>
  

  <script type="text/javascript" src="js/jquery.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">
    <script src="js/modernizr.min.js"></script>
    <link rel="stylesheet" href="aos/aos.css" />
    <link href="css/uikit.min.css" rel="stylesheet">
  <script src="aos/aos.js"></script>
    <script type="text/javascript" src="js/uikit-icons.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/device-mockups.min.css">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <script type="text/javascript" src="js/uikit.min.js"></script>
  <style type="text/css">
  .device-wrapper{
      width: 500px
  }
  .spn{
      height: 200px
  }
  .screen{
    background-size: contain;
    transition: 1s
  }

/* The progress container (grey background) */
.progress-container {
  width: 100%;
  height: 4px;
  background: #fff;
}

/* The progress bar (scroll indicator) */
.progress-bar {
  height: 4px;
  background: #31b0d5;
  width: 0%;
}




</style>

</head><!--/head-->
<body   onload="AOS.init({duration: 1200,})">
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  <div id="ModalRegister"></div>
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image: url(images/slider/firsts.jpg)" class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
        <div class="caption">
          <h1><span>iset </span>bizerte</h1>
          <p><B>Departement <BR> informatique</B><p>
          <a uk-scroll class="btn btn-start" href="#services">Start now</a>
        </div>
      </div>
      <div class="item" style="background-image: url(images/sds.jpg);" class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true" >
        <div class="caption">
          <h1>iset <span>bizerte <span></h1>
          <p><B>Departement <BR> informatique</B><p>
          <a uk-scroll class="btn btn-start" href="#services">Start now</a>
        </div>
      </div>
      <div class="item" style="background-image: url(images/014179920450_16_40_45.jpg)" class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
        <div class="caption">
          <h1>is<span>et</span> bizer<span>te</span></h1>
          <p><B>Departement <BR> informatique</B><p>
          <a uk-scroll class="btn btn-start" href="#services">Start now</a>
        </div
      </div>
    </div>
    <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
    <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
  </div><!--/#home-slider-->
 <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar uk-dark">
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div> 

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand s" href="#"><br><i class="fa fa-university "> </i> ISET Bizerte</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" uk-scroll>Acceuil</a></li>
            <li><a href="#services" uk-scroll>Parcours</a></li>
            <li><a href="#sect" uk-scroll>Unités</a></li>
            <li><a href="clubIt.php">Clubs</a></li>
            <li><a href="#act" uk-scroll>Evenement & actualités</a></li>
            <li><a href="#Partenaire" uk-scroll>Partenaires</a></li>
            <li><a href="suggestion.php">Suggestion</a></li>
            <li><a href="#foot" uk-scroll>Contact</a></li>
            <li class="dropdown">
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
</header><!--/#home-->


      <section id="services">
        <div class="container">
              <div class="heading">
                <div class="row">
                      <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2 uk-parallax="color:white,black; viewport: 0.5;x:50,0">Présentation :</h2>
                        <p>Le département technologies de l’informatique a été créé au début de l'année universitaire 2006/2007.  Il offre une formation de licence en technologies de l’informatique aux nouveaux bacheliers, suite à l’orientation universitaire, ou à travers les concours de réorientation. La formation vise à développer chez les étudiants les compétences techniques et à acquérir les connaissances théoriques nécessaires dans le domaine des technologies de l’informatique.</p>
                      </div>
                </div> 
              </div>
              <div class="text-center our-services">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2 uk-parallax="color:white,black; viewport: 0.5;x:-50,0">Les Parcours offerts:</h2>
                        <p>La formation offerte s'étale sur trois ans, et débute par une année de tronc commun suivie par deux années de spécialités selon l’un des trois parcours :</p>
                      </div>
                      <div class="col-lg-4" data-aos="fade-down-left">
                        <div class="service-info">
                            <a class="btn btn-start" href="#modal-full" uk-toggle> Développement des systèmes<br> d’informations</a>
                        </div>
                      </div><br>
                      <div class="col-lg-4" data-aos="fade-up">
                        <div class="service-info">
                            <a class="btn btn-start" href="#modal-full2" uk-toggle> Réseaux et services <br> informatiques</a>
                        </div>
                      </div><br>
                      <div class="col-lg-4" data-aos="fade-down-right">
                        <div class="service-info">
                            <a class="btn btn-start" href="#modal-full3" uk-toggle> Systèmes embarqués et <br> mobiles </a>
                        </div>
                      </div>
                <div class="text-center col-sm-8 col-sm-offset-2">
                  <Br>
                  <h4>Pour Plus d'informations sur le departement </h4>
                  <a class="uk-button uk-button-default" href="#modal-full4" uk-toggle uk-parallax="target: #test-target; color:white,black; viewport: 0.5;opacity: 0,1,1; y: 150,0,0; x: 0,0,0; scale: 3,2,1.2;"> Cliquer ici </a>
                </div>
                  </div>
        </div>
      </section><!--
  
  <section id="features" class="parallax">
    <div class="container ">
      <div class="row count">
          <div class="text-center col-sm-8 col-sm-offset-2">
          <h1>Headline</h1>
          <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          </p>
        <hr class="uk-divider-icon">
        <div class="col-xs-4">
          <i class="fa fa-users fa-5x"></i>
          <h3 class="timer">950</h3>
          <p>Etudiants</p>
        </div>
        <div class="col-xs-4">
          <i class="fa fa-trophy fa-5x"></i>
          <h3 class="timer">3</h3>                    
          <p>Club</p>
        </div> 
        <div class="col-xs-4">
          <i class="fa fa-briefcase fa-5x"></i>
          <h3 class="timer">30</h3>                    
          <p>Enseignant</p>
        </div> 
               
      </div>
    </div>
  </section>-->
  <section id="sect" uk-parallax="target: #xxx;background-color:#CCC,white; viewport: 0.5">
    <div id="xxx" class="container">
      <div class="row">
        <div class="text-center col-sm-8 col-sm-offset-2">
          <h1 class="uk-overflow-hidden" id="Sectitle"></h1>
          <p>Le département TI comporte des structures de gestion et de développement (unités) gérées par les enseignants, et des clubs scientifiques et culturels animés par les étudiants et encadrés par des enseignants.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-1">
              <div class="device-wrapper">
                <div class="device" data-device="iPhone6Plus" data-orientation="portrait" data-color="black">
                  <div class="screen">
                  </div>
                  <div class="button" onclick="FunctionChangePic()">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="col-sm-8">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 text-center">
                <i class="fa fa-user fa-5x"></i>
                <h3>  Mounira Zouaghi   </h3>
                <h4>Responsable de l'unité  <br>Pédagogique <br>
                  <b>Mail : </b> aida9.bensalem@gmail.com
                </h4>
              </div>
              <div class="col-sm-6 text-center">
                <i class="fa fa-user fa-5x"></i>
                <h3>  Zeineb Langar   </h3>
                <h4>Responsable de l'unité <br>des Stages et PFE<br>
                  <b>Mail : </b> zlangar@gmail.com
                </h4>
              </div>
              <div class="col-sm-6 text-center">
                <i class="fa fa-user fa-5x"></i>
                <h3>  Ines Abbes   </h3>
                <h4>Responsable de l'unité <br> des Systèmes et Réseaux   <br>
                  <b>Mail : </b> ines.abbes@laposte.net
                </h4> 
              </div>
              <div class="col-sm-6 text-center">
                <i class="fa fa-user fa-5x"></i>
                <h3>  Ali Sekma   </h3>
                <h4>Responsable de l'unité <br> de Développement<br>
                  <b>Mail : </b> alisekma@yahoo.fr
                </h4> 
              </div>
            </div>
          </div>       
        </div>
      </div>
    </div>
  </section>

  <section id="contact" data-aos="fade-down" style="padding: 0px; margin: 0px; margin-bottom: 25px">
    <div id="contact-us" class="parallax" style="height: 250px">
    </div>
  </section>

  <section class="uk-background-muted uk-panel">
    <div id="act">
              <div class="heading text-center col-sm-8 col-sm-offset-2">
            <h2>Les Actualités :</h2><br>
            <div id="AllNews" class='uk-child-width-expand@s' uk-grid></div><br>
            <a href='AllNews.php' class="uk-button uk-button-primary">Afficher Plus</a>
      </div>
    </div>
  </section>
    <section id="Partenaire" class="uk-background-primairy">
      <div class="uk-padding-large  text-center">
          <H1>Partenaires :</H1>
          <hr class="uk-divider-icon">
          <div uk-slider="autoplay: true;autoplay-interval:3000	">
            <div class="uk-slider-container">
                <ul class="uk-slider-items uk-grid" id="ppp">
                <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous"><</a>
                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next">></a>

                </ul>
                            </div>
            </div><br><a href='partenaire.php' class="uk-button">Afficher Plus</a>
          </div>
      </div>
    </section>
  </section><!--/#contact-->
 <footer class="footer uk-padding-large uk-section uk-section-secondary uk-light" id="foot">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-7">
            <div class="row">
              <div class="col-xs-12">
                <h3 class="muted-text uk-text-left">Navigation : </h3>
                <div class="col-sm-4 col-xs-6">
                  <ul class="uk-list uk-text-left">
                    <li><a href="#" uk-scroll>Acceuil</a></li>
                    <li><a href="#footer" uk-scroll>Parcours</a></li>
                    <li><a href="#footer" uk-scroll>Unités</a></li>
                    <li><a href="AllNews.php" uk-scroll>Evenement & actualités</a></li>
                    <li><a href="#footer" uk-scroll>Partenaires</a></li>
                    <li><a href="#foot" uk-scroll>Contact</a></li>
                </div>
                <div class="col-sm-8 col-xs-6 uk-column-divider">
                  <ul class="uk-list uk-text-left">
                  <li><h3> Club </h3></li>
                    <li><a href="clubIt.php#pre">Presentation</a></li>
                    <li><a href="clubIt.php#load">les Activités</a></li>
                    <li><a href="clubIt.php#photostack-1">Galery d'images</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5 uk-margin">
            <div class="row">
              <div class="col-xs-12 uk-text-left">
                <H4>Vous pouvez nous rejoindre sur <a href="https://www.facebook.com/I.s.e.t.Biz/"><i class="fa fa-facebook fa-2x"></i></a></H4>
              </div>
              <div class="col-xs-12 uk-text-justify">
                <h4><i class="fa fa-phone"></i> Telephone : +216 72 57 06 01/+216 72 57 06 00</h4>
              </div>
              <div class="col-xs-12 uk-text-justify">
                <h4><i class="fa fa-fax"></i> Fax :+216 72 572 455	</h4>    
              </div>
              <div class="col-xs-12 uk-text-justify">
                <h4><i class="fa fa-map-marker"></i> Adresse : Campus Universitaire Menzel Abderrahmen BP n° 65 Bizerte 7035</h4>      
              </div>
              <div class="col-xs-12 uk-text-justify">
                <h4><i class="fa fa-globe"></i><a href="http://www.isetb.rnu.tn/"> Site officiel d'ISET bizerte  </a></h4>      
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
            <p class="pull-right">Created & Designed by  <a href="#">Hanchi Ahmed</a></p>
        </div>
      </div>
    </div>
</footer>



<div id="Login" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large uk-padding-remove-bottom ">
       <button class="uk-modal-close-default" type="button" uk-close></button>
      <form method="POST" action="login.php">
          <div class="uk-margin uk-text-center">
              <div class="uk-inline">
                  <span class="uk-form-icon"><i class="fa fa-user"></i></span>
                  <input class="uk-input uk-form-width-large" type="text" name="mail" placeholder="Adress Mail">
              </div>
          </div>

          <div class="uk-margin uk-text-center">
              <div class="uk-inline">
                  <span class="uk-form-icon uk-form-icon-flip"><i class="fa fa-lock"></i></span>
                  <input class="uk-input uk-form-width-large" type="password" name="motdepasse" placeholder="Mot De Passe">
              </div>
          </div>

        <p class="uk-text-center">
            <input class="uk-button uk-button-primary" type="submit" name="submit">
            <input class="uk-button uk-button-default uk-modal-close" type="reset">
        </p>
      </form>
    </div>
</div>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/modernizr.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/uikit-icons.min.js"></script>
  <script type="text/javascript" src="js/uikit.min.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/photostack.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>


  <script type="text/javascript">
      $("#AllNews").load("Assets/GetAllPost.php",function(a,b){});
      setInterval(function(){$("#AllNews").load("Assets/GetAllPost.php",function(a,b){});},5000); 
      $("#ppp").load("Assets/Get4Partenaire.php",function(a,b){});

      var dmi = 0;
      function FunctionChangePic(){
        dmi++;
        if(dmi==4)
          dmi=1;
        $('.screen').css({"background": "url(images/phoneGalery/"+dmi+".jpg)"});
        $('.screen').css({"background-size": "contain"});
      }
    var i = 0;
    var txt = 'Les Unités du Département'; /* The text */
    var speed = 200; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("Sectitle").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    setInterval(function(){ FunctionChangePic() }, 5000);


    typeWriter();

    window.onscroll = function() {myFunction()};

    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }



</script>
</body>
<?php 
  if(!empty($_GET['E'])){
    echo'<script>
          UIkit.notification({message: "Adresse mail incorrecte !", pos: "bottom-center", status: "primary"})
        </script>';
  } 
?>

<div id="modal-full" class="uk-modal-full" uk-modal style="z-index: 10000">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-background-cover" style="background-image: url('images/galery/DSI.jpeg');" uk-height-viewport></div>
            <div class="uk-padding">
              <h3>Développement des systèmes d’information <br> ( DSI )</h2>
              <h4> Métiers: </h4>
              <p>Développeur d’Applications de gestion, de sites Web et de bases de données.<br>
                           Technico-commercial dans la mise en place de solutions logicielles.</p>
                       <h4> Parcours DSI </h4>
              <div class="uk-child-width-expand@s" uk-grid>
                <div>
                  <ul class="uk-list uk-list-large uk-list-bullet">
                    <li>Participer a l’analyse et a la conception des systèmes d’information.</li>
                    <li>Développer une base de données.</li>
                    <li>Développer des applications de gestion.</li>
                    <li>Développer des sites Web.</li>
                    <li>Former les utilisateurs sur leurs applications.</li>
                  </ul>
                </div>
                <div>
                <ul class="uk-list uk-list-large uk-list-bullet">
                  <li>Développer des applications multimédia.</li>
                  <li>Rédiger un cahier de charges logicielles.</li>
                  <li>Rédiger un dossier technique.</li>
                  <LI>Concevoir, développer et administrer des bases de données</LI>
                </ul>
               </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-full2" class="uk-modal-full" uk-modal style="z-index: 10000">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-background-cover" style="background-image: url('images/galery/RSI.jpg');" uk-height-viewport></div>
            <div class="uk-padding uk-padding-remove-top">
                <h3>Réseaux et services informatiques  <br> (RSI) </h3>
                <h4> Métiers: </h4>
                <p> Administrateur réseaux<br>
                      Administrateur systèmes<br>
                      Architecte réseaux et systèmes de communication</p>
                       <h4> Parcours RSI </h4>
              <div class="uk-child-width-expand@s" uk-grid>
                <div>
                  <ul class="uk-list uk-list-large uk-list-bullet">
                    <li>Mettre en œuvre un réseau local..</li>
                    <li>Optimiser le fonctionnement d’un réseau.</li>
                    <li>Elaborer un cahier des charges technique.</li>
                    <li>Assurer l’installation et la configuration des ressources réseaux.</li>
                  </ul>
                </div>
                <div>
                         <ul class="uk-list uk-list-large uk-list-bullet">
                  <li>Mettre en œuvre et utiliser des équipements informatiques fonctionnant sur différents systèmes d’exploitation.</li>
                  <li>Installer et maintenir des logiciels et des applications distribuées.</li>
                  <li>Mettre en œuvre une politique de sécurisation d’un réseau.</li>
                </ul>
                       </div>
              </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-full3" class="uk-modal-full" uk-modal style="z-index: 10000">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-background-cover" style="background-image: url('images/galery/SEM.jpg');" uk-height-viewport></div>
            <div class="uk-padding uk-padding-remove-top">
                <h3> Systèmes embarqués et mobiles  <br> ( SEM ) </h3>
                <h4> Métiers: </h4>
                <p> Développeur de systèmes embarqués et mobiles<br>
                            Technico-commercial dans la mise en place de solutions embarquées et mobiles</p>
                         <h4> Parcours SEM :</h4>
                         <p>
              <div class="uk-child-width-expand@s" uk-grid>
                <div>
                  <ul class="uk-list uk-list-large uk-list-bullet">
                    <li>Développer des logiciels embarqués.</li>
                    <li>Développer des applications temps réel.</li>
                    <li>Concevoir et développer des systèmes électroniques et informatiques embarqués.</li>
                  </ul>
                </div>
              <div>
            <ul class="uk-list uk-list-large uk-list-bullet">
              <li> Développer un système mobile.</li>
              <li>Exploiter les systèmes embarqués et mobiles.</li>
              <li>Maintenir les systèmes embarqués et mobiles.</li>
            </ul>
                  </div>
        </div>

            </div>
        </div>
    </div>
</div>
<div id="modal-full4" class="uk-modal-full" uk-modal style="z-index: 10000">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-padding-large "  uk-height-viewport>
              <h4>Débouchée :</h4>
              <p>
              Les licenciés ayant suivi cette formation pourront assurer, en plus des tâches informatiques traditionnelles, des responsabilités aussi variées que celles liées aux domaines suivants : 
               Web: développeur web, consultant en solutions Internet, consultant e-business, développeur en nouvelles technologies Internet, développeur d’applications mobiles ,..
               Systèmes d’information: analyste, programmeur,  administrateur des bases de données, administrateur de SI,...
               Réseaux : administrateur réseaux internet/intranet, administrateur systèmes, architecte réseaux, programmeur, responsable sécurité…
               Systèmes embarqués: intégrateur de solutions embarquées, développeur d’applications mobiles, …
               Poursuite d’études : mastère de recherche, mastère professionnel, cycle ingénieurs.</p>
              <h4>L’équipe pédagogique :</h4>
              <p>
              L’équipe pédagogique se compose de scientifiques (informaticiens des systèmes d’informations, des systèmes et des réseaux, électriciens/électroniciens, spécialistes de traitement du signal et informatique industrielle, etc.) qui sont très attentifs aux questions techniques d’actualités et à l’évolution des TIC (architectures logicielles, plateformes de développement, réseautiques, microélectronique, etc.).
               
              Cette équipe de compétences universitaires est renforcée par l’intervention de professionnels expérimentés issu des structures informatiques des entreprises qui accueillent les étudiants dans le cadre des stages de formation ou d’insertion professionnelle des diplômés.
              </p>
            </div>
            <div class="uk-padding-large " uk-height-viewport>
              <h4>Organisation des études :</h4>
              <p>
              Cours intégrés et ateliers:
              La formation licence appliquée en technologies de l’informatique se déroule sur trois années, chacune divisée en deux semestres. La formation présentielle comporte des unités d’enseignement (UE) constituées chacune d’éléments constitutifs (ECUE).</p>
              <h4>Stages:</h4>
              <p>
              En plus des projets pédagogiques inhérents à une ou plusieurs matières, les étudiants réalisent trois stages de formation complémentaires leur permettant de s’intégrer à la vie professionnelle et de renforcer leurs compétences professionnelles  dans les domaines des TIC (internet, développement, réseaux de communication, systèmes embarquées, etc…..). 
              </p>
              <h4>Ces stages sont :</h4>
              <p>
               Stage d’initiation (1 mois) : 1ère année (entre le 1er et le 2ème semestre)
               Stage de perfectionnement (1 mois) : 2ème année (entre le 1er et le 2ème semestre)
               Stage de fin d’étude (4 mois): 2ème semestre de la 3ème année
              </p>
            </div>
        </div>
    </div>
</div>
</html>
