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
<?php include_once("menue.inc");  ?>      
      <div class="container con">
              <?php 
                include_once("Modal.inc"); 
              ?>          
          <div class="row">
              <!--<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">-->
                  <img class="img-circle img-responsive center-block" src="default_user.png" >
                    

              <h1 class="text-center username">Username</h1>
              <a class="melden-link center-block" href="#">Melden</a>
              <hr>
              <!--</div>-->
          </div><!--1ROW-->
          <div class="row">
            <h3 class="text-left username">Zu verkaufen:</h3>
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
                </div> <!-- End Col 12 -->
            </div><!-- End Col 12 6 4 4 -->                 
          </div><!--2ROW-->
          <div class="row">
              <hr>
               <h1 class="text-left username">Bewertungen anderer Nutzer:</h1>
              <hr>
            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notice">          
                    <img class="img-responsive img-circle center-block " src="sqwirrel_logo1.png">
                    <h3 class="anz">USERNAME</h3>
                    <hr> <!-- Horizontal Line -->                    
                    <p class="text-center"><span class="glyphicon glyphicon-star glyph-big"></span><span class="glyphicon glyphicon-star glyph-big"></span><span class="glyphicon glyphicon-star glyph-big"></span><span class="glyphicon glyphicon-star glyph-big"></span><span class="glyphicon glyphicon-star glyph-big"></span></p>
                    <hr> <!-- Horizontal Line -->                     
                    <p class="anz">Ea varias possumus excepteur ex quibusdam e illum proident, culpa laborum 
                        praesentibus ab appellat de senserit. Quid e quo illum laborum id velit quamquam 
                        laboris iis te fugiat nisi sint laborum, lorem quamquam ita legam esse. Cillum 
                        sed senserit quo esse, dolore pariatur iis illustriora ubi fabulas ex possumus, 
                        excepteur ubi ipsum. Admodum dolor elit sed varias aut amet ubi probant, 
                        ingeniis consectetur ad arbitror o culpa cupidatat exquisitaque ubi laboris 
                        consectetur ex voluptate est malis ut occaecat eu velit, doctrina minim nulla 
                        vidisse quem, expetendis nam aliqua nescius. Eu summis e nulla ea se nulla quis 
                        quid nescius est quem aut probant ea ut duis fore anim arbitror. Aliquip quem 
                        fabulas quamquam. Se quorum pariatur mentitum, laboris tamen et consequat 
                        tractavissent nam ita sint non illum, nisi cupidatat de elit legam eu est 
                        litteris exercitation o magna eiusmod laboris aut labore laborum et sunt minim, 
                        nam de sunt arbitror.</p>
                    <p class="anz"><a href="#" class="btn btn-link " role="button">Bewertung melden</a></p>                    
                </div> <!-- End Col 12 -->
            </div><!-- End Col 12 6 4 4 -->   
          </div><!--Ratings-->
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