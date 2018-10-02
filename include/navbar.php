
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
