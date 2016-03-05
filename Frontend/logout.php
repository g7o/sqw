<?php
session_start();
?>
<?php

if(!isset($_SESSION["username"]))

   {

   echo '<meta http-equiv="refresh" content="0; URL=index.php">';

   exit;

   } else {

        unset($_SESSION["username"]);

        echo '<meta http-equiv="refresh" content="0; URL=index.php">';

   }

?>            