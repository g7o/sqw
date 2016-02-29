<?php      
echo '<!-- Dialog-Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Einloggen / Registrieren</h4>
      </div>
      <div class="modal-body">
      <div class="row modal-row">
            <form class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <input required type="password" class="form-control" id="username" placeholder="Username" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <input required type="password" class="form-control" id="password" placeholder="Passwort" required>
                </div>
            </div>                            
            <div class="form-group">
                    <div class="col-xs-6 col-xs-offset-3">
                    <input type="submit" class="form-control btn-primary" id="submit" value="Login">
                    </div>
            </div> 
              
        </form>

          </div>      
      </div>
      <div class="modal-footer">
        <a href="registrierung.php" class="btn btn-success" role="button">Registrieren</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>';
?>