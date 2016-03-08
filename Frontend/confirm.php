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
<?php include_once("menue.inc");  ?>
      
      <div class="container con">
              <?php 
                include_once("Modal.inc"); 
              ?>
          <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center" id="ergebnis">
                  <h1>Kostenloses Konto anlegen:</h1>
                  <hr>                  
<form class="form-horizontal">
              <div class="form-group">
                    <label for="token" class="col-xs-12 col-sm-3 control-label">Token eingeben:</label>
                    <div class="col-xs-12 col-sm-9">
                      <input required type="text" class="form-control" id="token" placeholder="Token">
                    
                  </div></div>
                  
                  <div class="form-group">
                    <div class=" col-xs-12 col-sm-12  center-block">
                      <a onclick="getToken()" class="btn btn-primary">Bestätigen</a>
                    </div>
                  </div> 
                   
    <span class="fehler-hint-hidden" id="mail"><?php echo $_GET['mail']; ?></span>
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
  </body>
</html>