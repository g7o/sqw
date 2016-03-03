<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Sqwirrel</title>
    <script type="text/javascript">
      function chg(){
          var txt= '"<span class="glyphicon glyphicon-open"></span>Datei hochladen"';
          if(document.getElementById("lbl").value != txt ){
              document.getElementById("lbl").innerHTML="1 Datei ausgewählt.";
          }
      }
    </script>
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
  <body>
<?php include_once("menue.inc");  ?>
      
      <div class="container con">
              <?php 
                include_once("Modal.inc"); 
              ?>
          <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                  <h1>Kontaktformular</h1>
                  <hr>
              </div>                  
          </div> <!-- header -->
          <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="name" class="col-xs-12 col-sm-2 control-label">Name:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="name" placeholder="Oachkatzl Schwoaf">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="email" class="col-xs-12 col-sm-2 control-label">E-Mail:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="email" class="form-control" id="email" placeholder="oachkatzl@sqwirrel.eu">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="betreff" class="col-xs-12 col-sm-2 control-label">Betreff:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="betreff" placeholder="Hallo Sqwirrel-Team">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="betreff" class="col-xs-12 col-sm-2 control-label">Kategorie:</label>
                    <div class="col-xs-12 col-sm-10">
                        <select class="form-control">
                          <option>Allgemein</option>
                          <option>Problem melden</option>
                          <option>Fragen zum Konto</option>
                          <option>Probleme beim Login</option>
                          <option>Probleme beim Registrieren</option>
                        </select>   
                    </div>
                  </div>                     
                  <div class="form-group">
                    <label for="betreff" class="col-xs-12 col-sm-2 control-label">Nachricht:</label>
                    <div class="col-xs-12 col-sm-10">
                       <textarea required class="form-control" rows="7" placeholder="Eure Seite ist einfach leiwand!"></textarea> 
                    </div>
                  </div> 
                  <div class="form-group col-xs-12">
                    <label for="datei" id="lbl" class="col-sm text-center center-block"><span class="glyphicon glyphicon-open
"></span>Datei hochladen</label>
                      
                    <input type="file" onchange="chg()" id="datei" class="inputfile" accept="image/png, image/jpeg, image/gif, application/pdf, ">
                    <p class="help-block">Erlaubte Dateien: .JPG | .PNG | .PDF | .JPEG | .GIF</p>
                      
                  </div> 
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 center-block">
                      <a class="btn btn-primary">Absenden</a>
                    </div>
                  </div>                    
                </form>
          </div> <!-- 1Row -->
      </div><!--MAIN-->
      </div>
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

      </script>
  </body>
</html>