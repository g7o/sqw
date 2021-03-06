<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION["user"]))
$name = $_SESSION["user"];
?>
<?php
 include("notLogedIn.inc");
?>    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sqwirrel - Backend - User</title>

    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <script type="text/javascript" src="edit.js"></script>      
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
  <body onload="StartTimer()" onmousemove="ResetTimer()" onkeypress="ResetTimer()">
<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nav-bar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Backend - User</a>
        
    </div>

    <div class="collapse navbar-collapse text-center" id="collapse-nav-bar">
        
      <ul class="nav navbar-nav navbar-left text-center">
        <li class="nav-item active"><a href="user.php">User</a></li>
        <li class="nav-item"><a href="anzeigen.php">Anzeigen</a></li>
        <li class="nav-item"><a href="kategorien.php">Kategorien</a></li>
        <li class="nav-item"><a href="bewertungen.php">Bewertungen</a></li>
        <li class="nav-item"><a href="inhalt.php">Inhalt</a></li>
      </ul>
        <hr class="visible-xs-inline-block visible-xs-block">
      <button type="button" data-toggle="modal" data-target="#userModal" id="username-btn" class="btn btn-primary navbar-btn navbar-right btn-menue user-btn"> <?php echo $name; ?></button>          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row center-block">
    <div class="col-xs-12 text-center">
                 <input type="text" id="inText" autofocus autocomplete="off"  onkeydown="if(event.keyCode == 13){search(11,this.value)}">
         <input type="button" value="Suchen" onclick="search(11,document.getElementById('inText').value)">
    </div></div>
    <div class="row center-block">
        <div class="text-center col-xs-12 table-responsive" id="ergebnis">         
                  
        </div>
    </div>
<div class="row" >
        <a id="hidden-btn" class="col-xs-4 col-xs-offset-4 text-center btn btn-danger btn-hidden">Leeren</a>
</div>
</div>
    <?php
        include_once("Modals.inc")  ;
    ?>
            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#btnChangePW").click(function(){
            $("#userModal").modal('hide');
            $("#pwModal").modal('show');
        });
        $("#hidden-btn").click(function(){
            $("#ergebnis").html("");
            $("#hidden-btn").addClass("btn-hidden");
        });
      </script>
  </body>
</html>