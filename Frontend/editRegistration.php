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
function insertRegistration($connection,$vname,$nname,$uname,$sex,$mail,$birth,$street,$hnumber,$plz,$city,$country,$picture,$password_check,$password){
    if($password==$password_check){
        $qString="INSERT INTO users VALUES(null,'$vname','$nname','$sex','$uname','$password','0','$mail','$birth','$plz','$country','$city','$street','$hnumber',null,'0','0','3','0')";
        $result=mysqli_query($connection,$qString);
        if($result){
            echo "Registrierung war erfolgreich!";
        } else {
            echo "Datenübermittelung fehlgeschlagen!";
        } 
    }else{
        echo "Die beiden Passwörter stimmen nicht überein!";
    }
}
 if($connection){
        switch($code){
            case 1: insertRegistration($connection,$vname,$nname,$uname,$sex,$mail,$birth,$street,$hnumber,$plz,$city,$country,$picture,$password_check,$password);
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