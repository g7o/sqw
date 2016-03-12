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
<?php
 include("notLogedIn.inc");
?>       
<?php include_once("menue.inc");  ?>
      
      <div class="container con">
          <div class="row" id="ergebnis">
              <?php 
                include_once("Modal.inc"); 
              ?>
                <h2 class="username">Anzeige erstellen:</h2>
              <hr>
              <div class="text-center">
<form class="form-horizontal">
                  <div class="form-group">
                    <label for="title" class="col-xs-12 col-sm-2 control-label">Titel:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="title" placeholder="Titel">
                    </div>
                  </div>    
                  <div class="form-group">
                    <label for="piece" class="col-xs-12 col-sm-2 control-label">Stückzahl:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="number" class="form-control" id="piece" min="1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price" class="col-xs-12 col-sm-2 control-label">Preis:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="number" class="form-control" id="price" min="0">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="minprice" class="col-xs-12 col-sm-2 control-label">Mindespreis:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="number" class="form-control" id="minprice" min="0">
                    </div>
                  </div>     
                  <div class="form-group">
                    <label for="origPrice" class="col-xs-12 col-sm-2 control-label">Originalpreis:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="number" class="form-control" id="origPrice" min="0">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="location" class="col-xs-12 col-sm-2 control-label">Ort:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="location">
                    </div>
                  </div>    
                    <div class="form-group">
                    <label for="categories" class="col-xs-12 col-sm-2 control-label">Kategorie:</label>
                    <div class="col-xs-12 col-sm-10 ">
                      <select id="categories" class="form-control">
                        <?php  include_once("dbCon.inc"); 
                            $ergebnis = mysqli_query($connection,"SELECT * FROM categories");
                            while($row = mysqli_fetch_array($ergebnis)){
                                echo '<option value="'.$row['ID'].'">'.$row['type'].'</option>';
                            }
                          ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="actors" class="col-xs-12 col-sm-2 control-label">Akteure:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="text" class="form-control" id="actors">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="date" class="col-xs-12 col-sm-2 control-label">Datum:</label>
                    <div class="col-xs-12 col-sm-10">
                      <input required type="date" class="form-control" id="date">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="shipping" class="col-xs-12 col-sm-2 control-label">Versand:</label>
                    <div class="col-xs-12 col-sm-10">
                      <select id="shipping" class="form-control">
                         <?php 
                            $ergebnis = mysqli_query($connection,"SELECT * FROM shipping");
                            while($row = mysqli_fetch_array($ergebnis)){
                                echo '<option value="'.$row['ID'].'">'.$row['description'].'</option>';
                            }
                          ?>
                      </select>
                    </div>
                  </div> 
                    <div class="form-group">
                    <label for="payment" class="col-xs-12 col-sm-2 control-label">Bezahlung:</label>
                    <div class="col-xs-12 col-sm-10">
                      <select id="payment" class="form-control">
                   <?php 
                            $ergebnis = mysqli_query($connection,"SELECT * FROM payment");
                            while($row = mysqli_fetch_array($ergebnis)){
                                echo '<option value="'.$row['ID'].'">'.$row['description'].'</option>';
                            }
                          ?>
                      </select>
                    </div>
                  </div> 
                                      
                <h4 >Profilbild auswählen: (optional)</h4>
                <hr>
                  <div class="form-group col-xs-12">
                    <label id="lbl" for="datei" class="col-x2-12 text-center center-block"><span class="glyphicon glyphicon-open"></span>Datei hochladen</label>
                      
                    <input type="file" id="datei" class="inputfile" accept="image/png, image/jpeg, image/gif, " onchange="chg()">
                    <p class="help-block">Erlaubte Dateien: .JPG | .PNG | .JPEG | .GIF</p>
                      
                  </div> 
                  <div class="form-group">
                    <div class=" col-xs-12 col-sm-12  center-block">
                        <a class="btn btn-primary" onClick="createNotice()">Speichern</a>
                    </div>
    </div>         
                </form>  
              </div>
    </div><!--1ROW-->
      <div class="row" >
          
        
      </div>
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