<!DOCTYPE html>
<html lang="en">
  <head>
<title>Sqwirrel</title>
  </head>
  <body>

   <?php
if(!isset($_SESSION["username"])){
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
exit;
}
?>         

  </body>
</html>