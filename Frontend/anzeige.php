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
<link href="favicon.ico" rel="icon" type="image/x-icon">  
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
          <div class="row">
              <?php 
                include_once("Modal.inc"); 
              ?>
              <?php 
              include_once("dbCon.inc"); 
               $id=mysqli_real_escape_string($connection, $_GET['ticket']);
               $row=mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM notice WHERE id='$id'"));
               $row2=mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM users WHERE ID='$row[2]'"));
               $row3=mysqli_fetch_array(mysqli_query($connection,"SELECT type FROM categories WHERE ID='$row[6]'"));
               $row4=mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM shipping WHERE ID='$row[10]'"));
              ?>              
              <img class="img-circle img-responsive center-block" src="sqwirrel_logo1.png" >
              <h1 class="text-center username"><?php echo $row[1]; ?></h1>
              <hr>
          </div><!--1ROW-->
      <div class="row" >

          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 text-center">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left" >              
                  <div style="font-size: 1.6em">
                      <span class="glyphicon glyphicon-chevron-right"></span>Stückanzahl: <?php echo $row[3]; ?><br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Preis: <?php echo $row[4]; ?> € <br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Originalpreis: <?php echo $row[5]; ?> €<br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Kategorie: <?php echo $row3[0]; ?><br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Teams | Bands | Künstler: <?php echo $row[7]; ?><br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Ort: <?php echo $row[8]; ?><br>                      
                      <span class="glyphicon glyphicon-chevron-right"></span>Datum und Zeit: <?php echo $row[9]; ?><br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Abholung / Versand: <?php echo $row4[1]; ?><br>
                      <span class="glyphicon glyphicon-chevron-right"></span>Verkäufer: <?php echo '<a href="profile.php?user='.$row2[0].'"</a>'.$row2[4].''; ?>
                  </div>
                  <?php
                  echo'<p><a href= "angebot.php?angebot='.$row['ID'].'" class="btn btn-success center-block" style="margin-bottom: 5px;">Angebot abgeben</a>';
                    ?>
                   <a href="#" class="btn btn-warning center-block">Merken</a> 
                    <a href="#" class="btn btn-link center-block btn-sm">Melden</a></p> 
              </div>
          </div>      
        
      </div>
      </div><!--MAIN-->
<?php include_once("footer.inc"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>

      </script>
  </body>
</html>