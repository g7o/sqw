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
            <h3 class="text-left head-kat">"Suchbegriff" in Kategorie</h3>
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
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"> <p> <a href="#" class="btn btn-link"><span class="glyphicon glyphicon-chevron-down"></span></a></p></div>
          </div><!--2ROW-->
                  
      </div><!--MAIN-->
        <?php 
            include_once("footer.inc"); 
        ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>

      </script>
  </body>
</html>