<?php
if(!isset($_SESSION["user"]))
   {
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link rel="stylesheet" href="style/StylesheetLogin.css" type="text/css">
  <title>Backend: Nicht eingeloggt.</title>
  </head>
  <body>
  <div id="container">
    <div id="header">
         
    </div>
    <div id="main">

    </div>
  </div>

  </body>
</html>';
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
   exit;
   }
?>