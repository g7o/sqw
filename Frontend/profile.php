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
          <div class="row">
              <?php 
                include_once("Modal.inc"); 
              ?>
                  <div class="hidden-xs col-xs-6 col-sm-6">
                  <div class="col-xs-12">
                      <img class="hidden-xs img-responsive pull-right" src="default_user.png">
                  </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                      <a href="editUser.php" class="pull-right">Bearbeiten</a>
                      <ul class="user-list">
                          <li>USERNAME</li>
                          <li>VORNAME</li>
                          <li>NACHNAME</li>
                          <li>EMAIL</li>
                          <li>KONTOTYP</li>
                      </ul>                    
                  </div>     
              
          </div><!--1ROW-->
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4"><button class="btn disabled btn-default col-xs-12 btn-cstm">KAT1</button></div>
            <div class="col-xs-12 col-sm-6 col-md-4"><button class="btn disabled btn-default col-xs-12 btn-cstm">KAT2</button></div>
            <div class="col-xs-12 col-sm-6 col-md-4"><button class="btn disabled btn-default col-xs-12 btn-cstm">KAT3</button></div>
            <div class="col-xs-12 col-sm-6 col-md-4"><button class="btn disabled btn-default col-xs-12 btn-cstm">KAT4</button></div>
            <div class="col-xs-12 col-sm-6 col-md-4"><button class="btn disabled btn-default col-xs-12 btn-cstm">KAT5</button></div>
            <div class="col-xs-12 col-sm-6 col-md-4"><button class="btn disabled btn-default col-xs-12 btn-cstm">KAT6</button></div>
          </div><!--INTEREST_ROW--><hr>
      <div class="row" >
<h2 class="text-left username">Aktuelle Verkäufe:</h2>
          <hr>
            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notice">          
                    <img class="img-responsive img-circle center-block " src="sqwirrel_logo1.png">
                    <hr> <!-- Horizontal Line -->
                    <h3 class="anz">TITEL</h3>
                    <p class="anz">Teams/Bands/Künstler</p>
                    <p class="anz">TT.MM.JJJJ</p>
                    <p class="anz">Ort</p>
                    <h5 class="anz">PREIS</h5>
                    <p class="anz"><a href="#" class="btn btn-primary " role="button">Details</a></p>                    
                    <p class="anz"><a href="#" class="btn btn-danger " role="button">Löschen</a></p>
                </div> <!-- End Col 12 -->
            </div><!-- End Col 12 6 4 4 -->   
            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notice">          
                    <img class="img-responsive img-circle center-block " src="sqwirrel_logo1.png">
                    <hr> <!-- Horizontal Line -->
                    <h3 class="anz">TITEL</h3>
                    <p class="anz">Teams/Bands/Künstler</p>
                    <p class="anz">TT.MM.JJJJ</p>
                    <p class="anz">Ort</p>
                    <h5 class="anz">PREIS</h5>
                    <p class="anz"><a href="#" class="btn btn-primary " role="button">Details</a></p>  
                    <p class="anz"><a href="#" class="btn btn-danger " role="button">Löschen</a></p>
                </div> <!-- End Col 12 -->
            </div><!-- End Col 12 6 4 4 -->   
            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notice">          
                    <img class="img-responsive img-circle center-block " src="sqwirrel_logo1.png">
                    <hr> <!-- Horizontal Line -->
                    <h3 class="anz">TITEL</h3>
                    <p class="anz">Teams/Bands/Künstler</p>
                    <p class="anz">TT.MM.JJJJ</p>
                    <p class="anz">Ort</p>
                    <h5 class="anz">PREIS</h5>
                    <p class="anz"><a href="#" class="btn btn-primary " role="button">Details</a></p>
                    <p class="anz"><a href="#" class="btn btn-danger " role="button">Löschen</a></p>
                </div> <!-- End Col 12 -->
            </div><!-- End Col 12 6 4 4 -->             
      </div><!--2ROW--><hr>
    
      <div class="row">
               <h2 class="text-left username">Meine Bewertungen:</h2>
              <hr>
          <div class="col-xs-12">Keine vorhanden</div>
      </div><!--4ROW-->  <hr> 
      <div class="row">
 <h2 class="text-left username">Angebote:</h2>
              <hr>          
        <div class="list-group">
          <a href="anzeige.php" type="button" class="list-group-item">Toten Hosen</a>
          <a href="anzeige.php" type="button" class="list-group-item">Revolverheld</a>
          <a href="anzeige.php" type="button" class="list-group-item">JAVA lernen</a>
          <a href="anzeige.php" type="button" class="list-group-item">Deadpool</a>
          <a href="anzeige.php" type="button" class="list-group-item">Österreich-Türkei</a>
        </div>      
      </div><!--5ROW-->
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