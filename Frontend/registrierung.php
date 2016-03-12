<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Sqwirrel</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">      
      <script type="text/javascript" src="edit.js"></script>
      <script type="text/javascript">
      function chg(){
          var txt= '"<span class="glyphicon glyphicon-open"></span>Datei hochladen"';
          if(document.getElementById("lbl").value != txt ){
              document.getElementById("lbl").innerHTML="1 Datei ausgewählt.";
          }
      }

    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
session_start();
$textButton="Login";
if(isset($_SESSION["username"])){
$name = $_SESSION["username"];
$textButton=$name;
}
?>        
<?php include_once("menue.inc");  ?>
      
      <div class="container con">
              <?php 
                include_once("Modal.inc"); 
              ?>
          <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center" id="ergebnis">
                  <h1>Kostenloses Konto anlegen:</h1>
                  <hr>                  
<form class="form-horizontal">
                <h4>Basisdaten:</h4>
                    <hr>
                  <div class="form-group">
                    <label for="vname" class="col-xs-12 col-sm-4 control-label">Vorname:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="vname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nname" class="col-xs-12 col-sm-4 control-label">Nachname:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="nname">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="uname" class="col-xs-12 col-sm-4 control-label">Username:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="uname">
                    </div>
                  </div>     
                  <div class="form-group">
                    <label for="mail" class="col-xs-12 col-sm-4 control-label">E-Mail:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="email" class="form-control" id="mail" placeholder="zB. max12@gmail.com">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="password_1" class="col-xs-12 col-sm-4 control-label">Passwort:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="password" class="form-control" id="password_1">
                    </div>
                  </div>    
                  <div class="form-group">
                    <label for="password_check" class="col-xs-12 col-sm-4 control-label">Passwort erneut eingeben:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="password" class="form-control" id="password_check">
                    </div>
                  </div>    
                  <div class="form-group">
                    <label for="birth" class="col-xs-12 col-sm-4 control-label">Geboren am:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="date" class="form-control" id="birth">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sex" class="col-xs-12 col-sm-4 control-label">Geschlecht:</label>
                    <div class="col-xs-12 col-sm-8">
                      <select id="sex" class="form-control">
                          <option>Männlich</option>
                          <option>Weiblich</option>
                      </select>
                    </div>
                  </div>    
                  <h4>Adressdaten:</h4>    
                  <hr>
                  <div class="form-group">
                    <label for="street" class="col-xs-12 col-sm-4 control-label">Straße:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="street">
                    </div>
                  </div>     
                  <div class="form-group">
                    <label for="hnumber" class="col-xs-12 col-sm-4 control-label">Adresszusatz:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="hnumber" placeholder="Hausnummer/Stiege/Tür">
                    </div>                    
                  </div> 
                  <div class="form-group">
                    <label for="plz" class="col-xs-12 col-sm-4 control-label">PLZ:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="plz">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="city" class="col-xs-12 col-sm-4 control-label">Stadt:</label>
                    <div class="col-xs-12 col-sm-8">
                      <input required type="text" class="form-control" id="city">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="country" class="col-xs-12 col-sm-4 control-label">Land:</label>
                    <div class="col-xs-12 col-sm-8">
                      <select id="country" class="form-control">
                          <option>Österreich</option>
                          <option>Deutschland</option>
                          <option>Schweiz</option>
                      </select>
                    </div>
                  </div>
                    <h4>Interessen:</h4>
                    <hr>

                  <div class="col-xs-6 col-md-4">
                      <button id="Sport" type="button" class="btn btn-default btn-filter" >
                        Sport
                      </button>                        
                  </div>       
                  <div class="col-xs-6 col-md-4">
                      <button id="Musik" type="button" class="btn btn-default btn-filter" >
                        Musik
                      </button>                        
                  </div> 
                  <div class="col-xs-6 col-md-4">
                      <button id="Theater" type="button" class="btn btn-default btn-filter" >
                        Theater
                      </button>                        
                  </div> 
                  <div class="col-xs-6 col-md-4">
                      <button id="Filme" type="button" class="btn btn-default btn-filter" >
                        Filme
                      </button>                        
                  </div> 
                  <div class="col-xs-6 col-md-4">
                      <button id="Seminare" type="button" class="btn btn-default btn-filter" >
                        Seminare
                      </button>                        
                  </div> 
                  <div class="col-xs-6 col-md-4">
                      <button id="Vortrag" type="button" class="btn btn-default btn-filter" >
                        Vorträge
                      </button>                        
                  </div>     
                <h4 >Profilbild auswählen: (optional)</h4>
                <hr>
                  <div class="form-group col-xs-12">
                    <label id="lbl" for="datei" class="col-x2-12 text-center center-block"><span class="glyphicon glyphicon-open"></span>Datei hochladen</label>
                      <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                    <input type="file" id="datei" class="inputfile" accept="image/png, image/jpeg, image/gif, application/pdf, " onchange="chg()">
                    <p class="help-block">Erlaubte Dateien: .JPG | .PNG | .PDF | .JPEG | .GIF</p>
                      
                  </div> 
                  <div class="form-group">
                    <div class=" col-xs-12 col-sm-12  center-block">
                      <a onclick="registration()" class="btn btn-primary">Registrieren!</a>
                    </div>
                  </div>                    
                </form>  
              </div>

          </div> <!-- 1Row -->
      </div><!--MAIN-->
         <?php 
            include_once("footer.inc"); 
        ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#Musik").click(function(){
            if($("#Musik").hasClass("active")==false){
                $("#Musik").addClass("active");
            } else {
                $("#Musik").removeClass("active");
            }
        }); 
        $("#Vortrag").click(function(){
            if($("#Vortrag").hasClass("active")==false){
                $("#Vortrag").addClass("active");
            } else {
                $("#Vortrag").removeClass("active");
            }
        });  
        $("#Seminare").click(function(){
            if($("#Seminare").hasClass("active")==false){
                $("#Seminare").addClass("active");
            } else {
                $("#Seminare").removeClass("active");
            }
        });  
        $("#Theater").click(function(){
            if($("#Theater").hasClass("active")==false){
                $("#Theater").addClass("active");
            } else {
                $("#Theater").removeClass("active");
            }
        });        
        $("#Sport").click(function(){
            if($("#Sport").hasClass("active")==false){
                $("#Sport").addClass("active");
            } else {
                $("#Sport").removeClass("active");
            }
        });
       $("#Filme").click(function(){
            if($("#Filme").hasClass("active")==false){
                $("#Filme").addClass("active");
            } else {
                $("#Filme").removeClass("active");
            }
        });     
      </script>
  </body>
</html>