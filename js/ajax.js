          <?php 
            session_start();
            $id = $_SESSION['id'];
            $nom = $_SESSION['nom'];
            $prenom = $_SESSION['prenom'];
            ?>
          function sendPoste(text,bod){
            $.post("../Assets/sendPost.php",{title:text,body:bod},function(a,b){if(b == "success"){}});
            setTimeout(function(){$("#posts").load("../Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});},1000);
            setTimeout(function(){$("#AllNews").load("Assets/GetAllPost.php",function(a,b){});},1000);
          }
          
          function DeletePost(id){
            $.post("../Assets/DeletePost.php",{id:id},function(a,b){if(b == "success"){}});
            setTimeout(function(){$("#posts").load("../Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});},1000);
            setTimeout(function(){$("#AllNews").load("../Assets/GetAllPost.php",function(a,b){});},1000);
          }
          
          function UpdatePost(id){
            $('#modal').load("../Assets/GetOnePost.php",{id:id},function(a,b){});
          }
          
          function SetUpdate(text,bod,id){
            $.post("Assets/UpdatePost.php",{title:text,body:bod,id:id},function(a,b){});
            setTimeout(function(){$("#posts").load("../Assets/GetPost.php",{id:<?php echo($id); ?>},function(a,b){});},1000);
            setTimeout(function(){$("#AllNews").load("../Assets/GetAllPost.php",function(a,b){});},1000);
          }