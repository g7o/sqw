<!DOCTYPE html>
<?php
session_start();
$textButton="Login";
if(isset($_SESSION["username"])){
$name = $_SESSION["username"];
$textButton=$name;
}
?> 
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
<?php include_once("menue.inc");  ?>
      
      <div class="container con">
              <?php 
                include_once("Modal.inc"); 
              ?>          
            <?php  include_once("dbCon.inc");
             $ergebnis2 = mysqli_query($connection,"SELECT * FROM categories");
                            while($row = mysqli_fetch_array($ergebnis2)){
                                echo '<div class="row">';
                                echo '<h3 class="text-left head-kat">'.$row['type'].':</h3>';
                           $ergebnis = mysqli_query($connection,"SELECT * FROM notice where category=".$row['ID'].""); 
                            while($row2 = mysqli_fetch_array($ergebnis)){
                                echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">';
                                echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notice"> ';         
                                echo '<img class="img-responsive img-circle center-block " src="sqwirrel_logo1.png">';
                                echo '<hr>';
                                echo '<h3 class="anz">'.$row2['title'].'</h3>';
                                echo '<p class="anz">'.$row2['actors'].'</p>';
                                echo '<p class="anz">'.$row2['dateandtime'].'</p>';
                                echo '<p class="anz">'.$row2['location'].'</p>';
                                echo '<h5 class="anz">'.$row2['price'].'€ </h5>';
                                echo '<p class="anz"><a href="anzeige.php?ticket='.$row2['ID'].'" class="btn btn-primary " role="button">Details</a></p>';
                                echo '</div>';
                                echo '</div>';
                               
                                
                            }
                                echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"> <p> <a href="#" class="btn btn-link"><span class="glyphicon glyphicon-chevron-down"></span></a></p></div>';
                                echo ' </div>';
                            }
                                                                    
                          ?>                 
      </div><!--MAIN-->
        <footer>
        <? include_once("footer.inc"); ?>
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>

      </script>
  </body>
</html>