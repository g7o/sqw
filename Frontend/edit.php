<?php
include_once("dbCon.inc"); 
$code=mysqli_real_escape_string($connection, $_POST['code']);
    if($code == 1){
        $uname=mysqli_real_escape_string($connection, $_POST['uname']);
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
        $vname=mysqli_real_escape_string($connection, $_POST['vname']);
        $nname=mysqli_real_escape_string($connection, $_POST['nname']);
        $sex=mysqli_real_escape_string($connection, $_POST['sex']);
        $password=md5(mysqli_real_escape_string($connection, $_POST['password_1']));
        $birth=mysqli_real_escape_string($connection, $_POST['birth']);
        $street=mysqli_real_escape_string($connection, $_POST['street']);
        $hnumber=mysqli_real_escape_string($connection, $_POST['hnumber']);
        $plz=mysqli_real_escape_string($connection, $_POST['plz']);
        $city=mysqli_real_escape_string($connection, $_POST['city']);
        $country=mysqli_real_escape_string($connection, $_POST['country']);
        $picture=mysqli_real_escape_string($connection, $_POST['picture']);
        $password_check=md5(mysqli_real_escape_string($connection, $_POST['password_check']));
        if($sex=="Männlich"){
            $sex="Male";
        } else {
            $sex="Female";
        }
    }
    if($code == 3){
         $title=mysqli_real_escape_string($connection, $_POST['title']);
         $price=mysqli_real_escape_string($connection, $_POST['price']);
         $piece=mysqli_real_escape_string($connection, $_POST['piece']);
         $minprice=mysqli_real_escape_string($connection, $_POST['minprice']);
         $origPrice=mysqli_real_escape_string($connection, $_POST['origPrice']);
         $categories=mysqli_real_escape_string($connection, $_POST['categories']);
         $actors=mysqli_real_escape_string($connection, $_POST['actors']);
         $date=mysqli_real_escape_string($connection, $_POST['date']);
         $shipping=mysqli_real_escape_string($connection, $_POST['shipping']);
         $payment=mysqli_real_escape_string($connection, $_POST['payment']);
         $datei=mysqli_real_escape_string($connection, $_POST['datei']);
         $username=mysqli_real_escape_string($connection, $_POST['username']);
         $location=mysqli_real_escape_string($connection, $_POST['location']);
    }
    if($code == 2){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $pwOld=mysqli_real_escape_string($connection, $_POST['pwOld']);
        $pwNew=mysqli_real_escape_string($connection, $_POST['pwNew']);
        $pwNewChk=mysqli_real_escape_string($connection, $_POST['pwNewChk']);
    }
function createNotice($connection,$title,$piece,$price,$minprice,$origPrice,$categories,$actors,$date,$shipping,$payment,$datei,$username,$location){
    $res=mysqli_fetch_array(mysqli_query($connection,"SELECT id FROM users where username='$username'"));
    $resMax= mysqli_fetch_array(mysqli_query($connection,"SELECT activeSells from users where ID='$res[0]'"));
    $date = date("Y-m-d");
    $dayFut=date_modify($date,'+ 1 month');
    $query="INSERT INTO notice (ID, title, UserID, pieces, price, originalprice, category, actors, location, dateandtime, shipping, payment, validuntil, active,minprice) VALUES(null,'$title','$res[0]','$piece','$price','$origPrice','$categories','$actors','$location','$date','$shipping','$payment','$dayFut','1','$minprice')";
    if($resMax[0]<=3){
        $result=mysqli_query($connection,$query);
        if($result){
            echo "funktioniert";
        }else{
            echo "funktioniert nicht". mysqli_error($connection);
        }
    }
}
    function generateToken($connection,$mail){
        $token=md5(uniqid(rand(), true));
        $tokenQuery=mysqli_query($connection,"INSERT INTO tokens values('$token','$mail'");
        $to=$mail;
        $message="Ihr Token: ".$token;
        $from='Sqwirrel';
        $fromMail='support@sqwirrel.com';
        if(!mail ($to ,"Bestätigungslink für Sqwirrel Online-Ticketbörse", $message,"From: $from <$fromMail>",'Content-type: text/plain; charset=utf-8'))
            echo "Fehler beim Senden des Bestätigungslinks! <br>";
        else
            echo "Besätigungsemail erfolgreich gesendet! Überprüfen Sie nun ihre Email. <br>";
    }
function insertRegistration($connection,$vname,$nname,$uname,$sex,$mail,$birth,$street,$hnumber,$plz,$city,$country,$picture,$password_check,$password){
    generateToken($connection,$mail);
    $queryMail="SELECT * FROM users where mail='$mail'";
    if(mysqli_num_rows(mysqli_query($connection,$queryMail)) == 1){
        echo 'Diese Email wird bereits verwendet. Sie werden nun in 5 Sekunden automatisch weitergeleitet. <br>';
        echo '<meta http-equiv="refresh" content="5; URL=registrierung.php">';
    }
    $queryUser="SELECT * FROM users where username='$uname'";
    if(mysqli_num_rows(mysqli_query($connection,$queryUser)) == 1){
        echo 'Dieser Benutzername ist leider schon vergeben. Sie werden nun in 5 Sekunden automatisch weitergeleitet. <br>';
        echo '<meta http-equiv="refresh" content="5; URL=registrierung.php">';
    }  
    if($password==$password_check){
        $qString="INSERT INTO users VALUES(null,'$vname','$nname','$sex','$uname','$password','0','$mail','$birth','$plz','$country','$city','$street','$hnumber',null,'0','0','3','0','0')";
        $result=mysqli_query($connection,$qString);
        if($result){
            echo "Registrierung war erfolgreich! Sie werden nun auf die Startseite weitergeleitet!";
            echo '<meta http-equiv="refresh" content="5; URL=index.php">';
        }
    }else{
        echo "Die beiden Passwörter stimmen nicht überein! Sie werden nun in 5 Sekunden automatisch weitergeleitet.";
        echo '<meta http-equiv="refresh" content="5; URL=registrierung.php">';
    }
    echo"".mysqli_error($connection);
}

        function changePassword($connection, $username, $pwOld, $pwNew, $pwNewChk){
            if($pwNew == $pwNewChk){
                $check= mysqli_fetch_array(mysqli_query($connection,"SELECT password FROM users WHERE username='$username'"));
                $pw=md5($pwOld);
                $pwcheck=$check[0];
                if($pw == $pwcheck) {
                    $pwN=md5($pwNew);
                    mysqli_query($connection,"UPDATE users SET password='$pwN' WHERE username='$username'");
                    echo '<span class="help-block hint-success">Das Passwort wurde erfolgreich ge&auml;ndert!</span>';
                    return;
                }else{
                    //echo '<span class="help-block hint-failure">Das eingegebene Passwort ist falsch!</span>';
                    echo $username;
                    return;
                }   
            } else {
                echo '<span class="help-block hint-failure">Die beiden Passw&ouml;rter stimmen nicht &uuml;berein!</span>';
                return;
            }
        }
 if($connection){
        switch($code){
            case 1: insertRegistration($connection,$vname,$nname,$uname,$sex,$mail,$birth,$street,$hnumber,$plz,$city,$country,$picture,$password_check,$password);
                break;
            case 2: changePassword($connection, $username, $pwOld, $pwNew, $pwNewChk);
                break;
            case 3: createNotice($connection,$title,$piece,$price,$minprice,$origPrice,$categories,$actors,$date,$shipping,$payment,$datei,$username,$location);
                break;
            default: echo "Fehler";
                break;
        }
        mysqli_close($connection);
    }else{
        mysqli_close($connection);
        echo "DB-Connection Failed";
    }

?>