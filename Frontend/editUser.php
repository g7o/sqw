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
  <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

                <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nav-bar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>                
                <a class="nav navbar-brand">
                    Sqwirrel
                </a>
                </div>
            <hr class="hr">
<div class="collapse navbar-collapse" id="collapse-nav-bar">
            
<div class="navbar-left col-xs-12 col-sm-4 col-md-4 marg-top">
<div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
   </div>             
                 <a class="navbar-btn btn btn-warning navbar-right col-xs-6 col-sm-2 col-md-1" data-toggle="modal" data-target="#userModal" style="font-weight: bold; color: white">Login</a>              

      </div>            
     </div>
  	
  		

     
     
  </div><!--NAV-->
      
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
                    <label for="uname" class="col-xs-12 col-sm-2 control-label">Username:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="uname" placeholder="oachkatzl-schwoaf">
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
                      <button type="submit" class="btn btn-primary">Speichern</button>
                    </div>
                  </div>                    
                </form>  
              </div>
          </div> <!-- 1Row -->
      </div><!--MAIN-->
        <footer>
            
          <div class="container-fluid">
              <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <ul class="footer-content footer-content-left pull-left">
                    <li><a  href="#">FAQ</a></li>
                      <li><a href="#">Händler werden</a></li>
                      <li><a  href="#">Über Uns</a></li>
                      <li><a href="#">Kontakt</a></li>
                      <li><a  href="#">AGB</a></li>
                  </ul>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <ul class="footer-content footer-content-right pull-right">
                    <li>Sqwirrel</li>
                      <li>HTL Hollabrunn - 5AHWII</li>
                      <li>Berger, Gattringer, Pollak</li>
                      <li>2020, Hollabrunn</li>
                      <li><a href="#">Impressum</a></li>
                  </ul>
              </div>                     
          </div>                 
            </div>
      </footer>
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