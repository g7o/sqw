
<?php
session_start();
?>
<?php
  include_once("dbCon.inc");
$username = mysqli_real_escape_string($connection,$_POST["username"]);
$passwort = md5(mysqli_real_escape_string($connection,$_POST["password"]));
$addr=$_SERVER['REMOTE_ADDR'];
$abfrage = "SELECT * FROM users WHERE username='$username'";
$ergebnis = mysqli_query($connection,$abfrage);
$row = mysqli_fetch_array($ergebnis);          
$active = $row[15];
if($active==1){
if($row[5] == $passwort){
    
    $_SESSION["username"] = $username;
    $abfrage = "INSERT INTO log (UserID,IP) VALUES ('".$username."','".$addr."')";
    $ergebnis = mysqli_query($connection,$abfrage);
    
    mysqli_close($connection);
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
   exit;

    }
else
    {
        mysqli_close($connection);
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
   exit;

    }
}else
    {
        mysqli_close($connection);
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
   exit;

    }

?>              