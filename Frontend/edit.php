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
    if($code == 2){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $pwOld=mysqli_real_escape_string($connection, $_POST['pwOld']);
        $pwNew=mysqli_real_escape_string($connection, $_POST['pwNew']);
        $pwNewChk=mysqli_real_escape_string($connection, $_POST['pwNewChk']);
    }
function insertRegistration($connection,$vname,$nname,$uname,$sex,$mail,$birth,$street,$hnumber,$plz,$city,$country,$picture,$password_check,$password){
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
        $qString="INSERT INTO users VALUES(null,'$vname','$nname','$sex','$uname','$password','0','$mail','$birth','$plz','$country','$city','$street','$hnumber',null,'0','0','3','0')";
        $result=mysqli_query($connection,$qString);
        if($result){
            echo "Registrierung war erfolgreich!";
            echo '<meta http-equiv="refresh" content="0; URL=index.php">';
        }
    }else{
        echo "Die beiden Passwörter stimmen nicht überein! Sie werden nun in 5 Sekunden automatisch weitergeleitet.";
        echo '<meta http-equiv="refresh" content="5; URL=registrierung.php">';
    }
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
            default: echo "Fehler";
                break;
        }
        mysqli_close($connection);
    }else{
        mysqli_close($connection);
        echo "DB-Connection Failed";
    }

?>