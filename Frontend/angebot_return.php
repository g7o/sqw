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

              <div class="text-center">
<form class="form-horizontal">
                <h3><a href="anzeige.php">Ticket (Username)</a></h3>
                <a href="#" class="btn btn-success btn-cstm-ang">Annehmen</a>
                <a href="#" class="btn btn-danger btn-cstm-ang">Ablehnen</a><hr>
                <h2 class="username">Angebot abgeben:</h2>
              <hr>    
                  <div class="form-group">
                    <label for="avail" class="col-xs-12 col-sm-2 control-label">Stück verfügbar:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" disabled id="avail" value="3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="piece" class="col-xs-12 col-sm-2 control-label">Stück benötigt:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="number" class="form-control" id="piece" min="1" max="3" value="3">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="isPrice" class="col-xs-12 col-sm-2 control-label">Preis - Vorgabe:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" disabled id="isPrice" value="30">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price" class="col-xs-12 col-sm-2 control-label">Preis - Angebot:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="number" class="form-control" id="price" min="1" value="3">
                    </div>
                  </div> 
                  <div class="form-group">
                    <div class=" col-xs-12 col-sm-12  center-block">
                      <a class="btn btn-success">Absenden</a>
                    </div>
                  </div>     
                  </form>
          </div><!--1ROW-->
      <div class="row" >
          
        
      </div>
          </div><!--MAIN--></div>
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