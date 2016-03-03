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
          <div class="row">
              <?php 
                include_once("Modal.inc"); 
              ?>
              <img class="img-circle img-responsive center-block" src="sqwirrel_logo1.png" >
              <h1 class="text-center username">TITEL</h1>
              <hr>
          </div><!--1ROW-->
      <div class="row" >
          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 text-center">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left" >              
                  <div style="font-size: 1.6em">
                      <span class="glyphicon glyphicon-chevron-right"></span>X Stück <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>€/Stück <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Originalpreis: €/Stück <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Kategorie: <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Teams | Bands | Künstler: <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Ort: <br>                      
                      <span class="glyphicon glyphicon-chevron-right"></span>Datum: TT.MM.JJJJ | Zeit: HH:MM<br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Abholung / Versand <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Verkäufer: <a href="#">USERNAME</a>
                  </div>
                  <p><a href="#" class="btn btn-success center-block" style="margin-bottom: 5px;">Angebot abgeben</a> <a href="#" class="btn btn-warning center-block">Merken</a> <a href="#" class="btn btn-link center-block btn-sm">Melden</a></p> 
              </div>
          </div>      
        
      </div>
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

      </script>
  </body>
</html>