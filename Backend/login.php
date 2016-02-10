<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sqwirrel - Backend - Login</title>

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
  <body class="login">
    <div class="container con">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                <div class="row text-center">
                    <div class="col-xs-12 login-header">
                        <h1>Login</h1>
                    </div>
                    <div class="col-xs-12 login-field">
<?php
session_start();
?>
<?php
  include_once("dbCon.inc");
$username = $_POST["username"];
$passwort = md5($_POST["password"]);

$abfrage = "SELECT * FROM be WHERE name='$username'";
$ergebnis = mysqli_query($connection,$abfrage);
$row = mysqli_fetch_array($ergebnis);

if($row[1] == $passwort)
    {
    $_SESSION["username"] = $username;
    mysqli_close($connection);
    echo "Login erfolgreich!";
echo '<meta http-equiv="refresh" content="3; URL=user.php">';
   exit;

    }
else
    {
        mysqli_close($connection);
    echo "Sie sind nicht eingeloggt. Wir leiten Sie automatisch weiter zum Login!";
echo '<meta http-equiv="refresh" content="3; URL=index.php">';
   exit;

    }

?>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>

      </script>
  </body>
</html>