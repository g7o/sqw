<!-- PWChange-Modal -->
<div class="modal fade" id="pwModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Passwort ändern</h4>
      </div>
      <div class="modal-body">
          <div class="row modal-row">
            <form class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <input required type="password" class="form-control" id="pw-alt" placeholder="Altes Passwort" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <input required type="password" class="form-control" id="pw-neu" placeholder="Neues Passwort" required>
                </div>
            </div>                            
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <input required type="password" class="form-control" id="pw-neu-check" placeholder="Neues Passwort bestätigen" required aria-describedby="fehler-hint">
                    <p id="fehler-hint"></p>
                </div>
            </div> 
              
        </form>

          </div>
      </div>
      <div class="modal-footer">
          <span class="fehler-hint-hidden" id="username"><?php echo $name; ?></span>
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
        <button type="button" id="pw-save" onclick="changePassword( document.getElementById('username').innerHTML)" class="btn btn-primary">Speichern</button>
      </div>
    </div>
  </div>
</div>

      <!-- Dialog-Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Was wollen Sie tun?</h4>
      </div>

      <div class="modal-footer">
        <button type="button" id="btnChangePW" class="btn btn-primary">Passwort ändern</button>
        <a href="logout.php" class="btn btn-danger" role="button">Abmelden</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>