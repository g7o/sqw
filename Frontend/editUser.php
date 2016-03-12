<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Sqwirrel</title>
    <!-- Bootstrap -->
<link href="favicon.ico" rel="icon" type="image/x-icon">      
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
<?php
 include("notLogedIn.inc");
?>       
<?php include_once("menue.inc");  ?>
      
      <div class="container con">
              <?php 
                include_once("Modal.inc"); 
              ?>
          <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                  <h1>Persönliche Daten bearbeiten:</h1>
                  <hr>
              </div>                  
          </div> <!-- header -->
          <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
<form class="form-horizontal">
                <h4>Basisdaten:</h4>
                    <hr>
                  <div class="form-group">
                    <label for="vname" class="col-xs-12 col-sm-2 control-label">Vorname:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="vname" placeholder="Oachkatzl">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nname" class="col-xs-12 col-sm-2 control-label">Nachname:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="nname" placeholder="Schwoaf">
                    </div>
                  </div>    
                  <div class="form-group">
                    <label for="mail" class="col-xs-12 col-sm-2 control-label">E-Mail:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="email" class="form-control" id="mail" placeholder="oachkatzl@sqwirrel.eu">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="birth" class="col-xs-12 col-sm-2 control-label">Geboren am:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="date" class="form-control" id="birth" min="1936-01-01" max="1998-01-08">
                    </div>
                  </div> 
                  <h4>Adressdaten:</h4>    
                  <hr>
                  <div class="form-group">
                    <label for="street" class="col-xs-12 col-sm-2 control-label">Straße:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="street" placeholder="Nussstraße">
                    </div>
                  </div>     
                  <div class="form-group">
                    <label for="hnumber" class="col-xs-12 col-sm-2 control-label">Adresszusatz:</label>
                    <div class="col-xs-4 col-sm-4">
                      <input required type="text" class="form-control" id="hnumber" placeholder="Hausnummer">
                    </div>
                    <div class="col-xs-4 col-sm-3">
                      <input required type="text" class="form-control" id="snumber" placeholder="Stiege">
                    </div>
                    <div class="col-xs-4 col-sm-3">
                      <input required type="text" class="form-control" id="tnumber" placeholder="Tür">
                    </div>                      
                  </div> 
                  <div class="form-group">
                    <label for="plz" class="col-xs-12 col-sm-2 control-label">PLZ:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="plz" placeholder="1312">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="city" class="col-xs-12 col-sm-2 control-label">Stadt:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="city" placeholder="Nusshausen">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="country" class="col-xs-12 col-sm-2 control-label">Staat:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="country" placeholder="Nussland">
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
                      <button id="Filme" type="button" class="btn btn-default btn-filter btn-last-line" >
                        Filme
                      </button>                        
                  </div> 
                  <div class="col-xs-6 col-md-4">
                      <button id="Seminare" type="button" class="btn btn-default btn-filter btn-last-line" >
                        Seminare
                      </button>                        
                  </div> 
                  <div class="col-xs-6 col-md-4">
                      <button id="Vortrag" type="button" class="btn btn-default btn-filter btn-last-line" >
                        Vorträge
                      </button>                        
                  </div>     
                <h4 >Profilbild ändern: (optional)</h4>
                <hr>
                  <div class="form-group col-xs-12">
                    <label id="lbl" for="datei" class="col-x2-12 text-center center-block"><span class="glyphicon glyphicon-open"></span>Datei hochladen</label>
                      
                    <input type="file" id="datei" class="inputfile" accept="image/png, image/jpeg, image/gif, application/pdf, " onchange="chg()">
                    <p class="help-block">Erlaubte Dateien: .JPG | .PNG | .PDF | .JPEG | .GIF</p>
                      
                  </div> 
                  <div class="form-group">
                    <div class=" col-xs-12 col-sm-12  center-block">
                      <a class="btn btn-primary">Speichern</a>
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
                $("#Filmett").removeClass("active");
            }
        });        

      </script>
  </body>
</html>