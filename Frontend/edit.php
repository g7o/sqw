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
    if($code == 6){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $betreff=mysqli_real_escape_string($connection,$_POST['betreff']);
        $categories=mysqli_real_escape_string($connection,$_POST['categories']);
        $message=mysqli_real_escape_string($connection,$_POST['message']);
    }
    if($code ==4){
        $token=mysqli_real_escape_string($connection, $_POST['token']);
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
    }
    if($code == 5){
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
        $id=mysqli_real_escape_string($connection, $_POST['id']);
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $location=mysqli_real_escape_string($connection, $_POST['location']);
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
function confirm($connection,$token,$mail){
    $tokenCheck=mysqli_fetch_array(mysqli_query($connection,"SELECT nametoken FROM tokens WHERE nametoken='$token'"));
    if($tokenCheck[0] == $token){
        $result=mysqli_query($connection,"DELETE FROM tokens WHERE nametoken='$token'");
        $result2=mysqli_query($connection,"UPDATE users SET isActivated='1' WHERE mail='$mail'");
        if($result2)
            echo"Konto erfolgreich aktiviert";
        else
            echo "Kontobestätigung fehlgeschlagen";
    }
    else{
        echo "Fehler!";
    }
}
function updateNotice($connection,$title,$piece,$price,$minprice,$origPrice,$categories,$actors,$date,$shipping,$payment,$username,$location,$username){
    $res2=mysqli_fetch_array(mysqli_query($connection,"SELECT id FROM users where username='$username'"));
    $q="SELECT ID FROM notice WHERE title='$title' and userID='$res2[0]'";
    $result=mysqli_query($connection,$q);
    $query="UPDATE notice SET title='$title',pieces='$piece',price='$price',originalprice='$origPrice',category='$categories',actors='$actors',location='location',dateandtime='$date',shipping='$shipping',payment='$payment',minprice='$minprice' WHERE ID='$id'";
    $res=mysqli_query($connection,$query);
    if($result)
        echo "Daten geändert";
    else
        echo "Daten nicht geändert";
}
function createNotice($connection,$title,$piece,$price,$minprice,$origPrice,$categories,$actors,$date,$shipping,$payment,$datei,$username,$location){
    $res=mysqli_fetch_array(mysqli_query($connection,"SELECT id FROM users where username='$username'"));
    $resMax= mysqli_fetch_array(mysqli_query($connection,"SELECT activeSells from users where ID='$res[0]'"));
    $dateH = date_create(date("Y-m-d H:i:s"));
    $dayFut=date_modify($dateH,'+ 1 month');
    $query="INSERT INTO notice (ID, title, UserID, pieces, price, originalprice, category, actors, location, dateandtime, shipping, payment, validuntil, active,minprice) VALUES(null,'$title','$res[0]','$piece','$price','$origPrice','$categories','$actors','$location','$date','$shipping','$payment','".date_format($dayFut, 'Y-m-d H:i:s')."','1','$minprice')";
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
        $tokenQuery=mysqli_query($connection,"INSERT INTO tokens values('$token','$mail')");
        $to=$mail;
        $link="http://www.htl-hl.ac.at/wi/sqwirrel/frontend/confirm.php?token=".$token."&mail=".$mail;
        $message='<h1>Kontoaktivierung</h1><p>Vielen Dank für Ihre Registrierung bei <bold>Sqwirrel</bold>. Um die Registrierung abzuschließen, klicken Sie bitte auf diesen <a href="'.$link.'">Link</a> und geben Sie ihren Token ein.</p><p>Ihr Token: <bold>'.$token.'</bold></p>';    
        $from='Sqwirrel';
        $fromMail='support@sqwirrel.com';
        $header  = "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html; charset=utf-8\r\n";

        $header .= "From: $from <$fromMail>\r\n";
        $header .= "Reply-To: $fromMail\r\n";
        // $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
        $header .= "X-Mailer: PHP ". phpversion();    
        if(!mail ($to ,"Bestätigungslink für Sqwirrel Online-Ticketbörse", $message,$header))
            echo "Fehler beim Senden des Bestätigungslinks! <br>";
        else
            echo "Bestätigungsemail erfolgreich gesendet! Überprüfen Sie nun ihre Email. <br>";
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
function contactForm($connection,$name,$email,$betreff,$categories,$message){
        $to="sqwirrel@danielgattringer.com";
        $from="Kontakformular von ".$name." Kategorie ".$categories;
        $fromMail=$email;
        if(!mail ($to ,$betreff, $message,"From: $from <$fromMail>",'Content-type: text/plain; charset=utf-8'))
            echo "Fehler beim Senden des Kontaktformulars! <br>";
        else
            echo "Kontaktformular erfolgreich gesendet. <br>";
}
 if($connection){
        switch($code){
            case 1: insertRegistration($connection,$vname,$nname,$uname,$sex,$mail,$birth,$street,$hnumber,$plz,$city,$country,$picture,$password_check,$password);
                break;
            case 2: changePassword($connection, $username, $pwOld, $pwNew, $pwNewChk);
                break;
            case 3: createNotice($connection,$title,$piece,$price,$minprice,$origPrice,$categories,$actors,$date,$shipping,$payment,$datei,$username,$location);
                break;
            case 4: confirm($connection,$token,$mail);
                break;
            case 5: updateNotice($connection,$title,$piece,$price,$minprice,$origPrice,$categories,$actors,$date,$shipping,$payment,$username,$location,$id);
                break;
            case 6: contactForm($connection,$name,$email,$betreff,$categories,$message);
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