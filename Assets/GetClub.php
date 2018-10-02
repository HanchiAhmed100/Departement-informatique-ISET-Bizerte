<?php  
  include_once '../class/club.class.php';
  $id = $_POST['id'];
  $post = new club();
  $mynews = $post -> LoadMore();
  while ( $p = $mynews->fetch()) {
      echo "
          <div class='col-sm-8'>
            <h1 class='uk-text-large'>".$p['title']."</h1>

          </div>
          <div class='col-sm-4'>";
      echo'<a><i class="fa fa-trash fa-2x" onclick="DeletePost('.$p['id'].')"></i> </a>&nbsp;';
      echo'<a><i class="fa fa-pencil fa-2x" onclick="UpdatePost('.$p['id'].')"></i></a>&nbsp;';
      echo'<a><i class="fa fa-image fa-2x" id="coverUpload'.$p['id'].'"></i></a>&nbsp; 
                    
      <form action="SetClubPic.php?p='.$p['id'].'" method="post" enctype="multipart/form-data" style="display: none;">
      <input type="file" name="fileToUpload" id="fileToUploadCover'.$p['id'].'">
      <input type="submit" value="Upload Image" name="submit" id="fileSubmitCover'.$p['id'].'">
      </form>
      </div>
      ';


      echo'<script>          $(function () {
        $("#coverUpload'.$p['id'].'").click(function (event) {
            event.preventDefault();
            $("#fileToUploadCover'.$p['id'].'").click();
        });
    });
  
    $(function () {
        $("#fileToUploadCover'.$p['id'].'").change(function (event) {
            event.preventDefault();
            $("#fileSubmitCover'.$p['id'].'").click();
        });
    });</script>';

  }
?>