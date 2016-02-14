<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION["username"]))
$name = $_SESSION["username"];
?>
<?php
 include("notLogedIn.inc");
?>    
  <head>      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sqwirrel - Backend - Bewertungen</title>

    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <script type="text/javascript" src="edit.js"></script>      
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">      

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="StartTimer()" onmousemove="ResetTimer()" onkeypress="ResetTimer()">
<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nav-bar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Backend - Bewertungen</a>
        
    </div>

    <div class="collapse navbar-collapse text-center" id="collapse-nav-bar">
        
      <ul class="nav navbar-nav navbar-left text-center">
        <li class="nav-item"><a href="user.php">User</a></li>
        <li class="nav-item"><a href="anzeigen.php">Anzeigen</a></li>
        <li class="nav-item"><a href="kategorien.php">Kategorien</a></li>
        <li class="nav-item active"><a href="bewertungen.php">Bewertungen</a></li>
        <li class="nav-item"><a href="inhalt.php">Inhalt</a></li>
      </ul>
        <hr class="visible-xs-inline-block visible-xs-block">
      <button type="button" data-toggle="modal" data-target="#userModal" class="btn btn-primary navbar-btn navbar-right btn-menue user-btn"> <?php echo $name; ?></button>          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row center-block">
    <div class="col-xs-12 text-center">
                 <input type="text" id="inText" autocomplete="off"  onkeydown="if(event.keyCode == 13){search(this.value)}">
         <input type="button" value="Suchen" onclick="search(document.getElementById('inText').value)">
                        <select id="art">
                          <option value="31">nach allem suchen</option>
                          <option value="32">nach Verfasser suchen</option>
                          <option value="33">nach Bezogenem suchen</option>
                          <option value="34">nach Inhalt suchen</option>
                          <option value="35">nach Titel suchen</option>
                        </select>
    </div>
</div>
    <div class="row center-block">
        <div class="text-center col-xs-12 table-responsive" id="ergebnis">   
                     
        </div>
    </div> 
<div class="row" >
        <a id="hidden-btn" class="col-xs-4 col-xs-offset-4 btn btn-danger btn-hidden">Leeren</a>
</div>    
</div>
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
            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#btnChangePW").click(function(){
            $("#userModal").modal('hide');
            $("#pwModal").modal('show');
        });
        $("#hidden-btn").click(function(){
            $("#ergebnis").html("");
            $("#hidden-btn").addClass("btn-hidden");
        });        	
      </script>
  </body>
</html>