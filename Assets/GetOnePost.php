 <?php  
  include_once '../class/news.class.php';
  $id = $_POST['id'];
  $post = new news();
  $mynews = $post -> GetOneNew($id);
  while ( $p = $mynews->fetch()) {
  echo'
    <div id="update" class="uk-flex-top uk-modal uk-flex uk-open" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large uk-padding-top-remove">
           <button class="uk-modal-close-default" type="button" uk-close></button>
              <div class="uk-margin">
            <label>Titre :</label>
            <input type="text" name="title" class="uk-input uk-margin uk-padding-small" id="UpdatedTitle" value="'.$p['title'].'">
            <label>Aritcle :</label>
            <textarea class="uk-textarea" id="UpdatedBody" style="min-height:175px">'.$p['body'].'</textarea> <br>
            </div>
            <button class="uk-button uk-button-primary" onclick="SetUpdate($(\'#UpdatedTitle\').val(),$(\'#UpdatedBody\').val(),'.$id.');"> Valider </button>  
        </div>
    </div>';
  }

?>