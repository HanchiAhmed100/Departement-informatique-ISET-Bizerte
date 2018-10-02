<?php  
  include_once '../class/partenaire.class.php';
  $post = new partenaire();
  $mynews = $post -> LoadMorePartenaire();
  while ( $p = $mynews->fetch()) {
      echo "
          <div class='col-sm-8'>
            <p> ".$p['Sname']."<p>
          </div>
          <div class='col-sm-4'>";
      echo'<a href="Addpartenaire.php?sup='.$p['id'].' "><i class="fa fa-trash fa-2x"></i><a>';
      echo"</div>
      ";
  }
?>