 <div id="register" class="uk-flex-top" uk-modal style="z-index: 10000">
          <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large uk-padding-remove-bottom ">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form method="POST" action="Register.php">
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
                        <input class="uk-input uk-form-width-large" type="text" name="mail" placeholder="Adress Mail :">
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