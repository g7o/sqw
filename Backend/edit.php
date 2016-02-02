<?php
    /** @param[in] code Beinhaltet den Bearbeitungscode */
    $code=$_POST['code'];
    /** @param[in] textInput Beinhaltet den String für die SQL-Abfragen */
    if($code != 17 && $code != 550)
    $textInput=$_POST['textInput'];
    /** @param[in] password Beinhaltet das zu ändernde Passwort - default: 0 */
    if($code == 14)
        $password=$_POST['password'];
    if($code == 18){
        $username=$_POST['username'];
        $mail=$_POST['mail';]
    }
    if($code == 550){
        $username=$_GET['username'];
        $password=$_GET['password'];
        $pwOld=$_GET['pwOld'];
    }
    if($code == 17){
        $username=$_POST['username'];
        $sirname=$_POST['sirname'];
        $sex=$_POST['sex'];
        $firstname=$_POST['firstname'];
        $password=$_POST['password'];
        $tel=$_POST['tel'];
        $mail=$_POST['mail'];
        $geb=$_POST['geb'];
        $plz=$_POST['plz'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $street=$_POST['street'];
        $housenr=$_POST['housenr'];
        $picture=$_POST['picture'];
        $isActivated=$_POST['isActivated'];
        $isRetailer=$_POST['isRetailer'];
        $maximum=$_POST['maximum'];
         $vorhanden=$_GET['vorhanden'];
    }
    include_once("dbCon.inc");
        function check($connection,$qString) {
            $checkVar=mysqli_query($connection,$qString);
            if(mysqli_num_rows($checkVar)==0){
                 echo "Existiert nicht!";
           } else {
               echo "Check war erfolgreich!";
           }
        }//FERTIG
        function search($connection,$qString,$table){
            $result=mysqli_query($connection,$qString);
            if(mysqli_num_rows($result)==0){
                echo "Die Suche hat keinen Treffer ergeben.";
                return;
            }else{
            $t='<table class="table table-hover">';
          switch($table){
              case "users":     echo "<h3>Ergebnis:</h3>$t
                                <tr>
                                <td>Username</td>
                                <td>Vorname</td>
                                <td>Nachname</td>
                                <td>E-Mail:</td>
                                <td>Aktiv</td>
                                <td>Typ</td>
                                <td></td>
                                </tr>
                                <tr>";
                                while($row = mysqli_fetch_object($result))
                                echo "
                                <td>$row->username</td>
                                <td>$row->firstname</td>
                                <td>$row->sirname</td>
                                <td>$row->mail</td>
                                <td>$row->isActivated</td>                            
                                <td>Bearbeiten</td>
                                <td></td>
                                </tr>	 
                                ";
                                echo "</table>";
                            
                  break;
              case "notice":    echo "<h3>Ergebnis:</h3>$t
                                <tr>
                                <td>UserID</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Price</td>
                                <td>Category</td>
                                <td>Picture</td>
                                <td>Amount</td>
                                <td></td>
                                </tr>
                                <tr>";
                                while($row = mysqli_fetch_object($result))
                                echo "
                                <td>$row->UserID</td>
                                <td>$row->title</td>
                                <td>$row->description</td>
                                <td>$row->price</td>
                                <td>$row->category</td>
                                <td>$row->picture</td>
                                <td>Bearbeiten</td>
                                </tr>	 
                                ";
                                echo "</table>";
                            
                  break;
              case "rating":     echo "<h3>Ergebnis:</h3>$t
                                 <tr>
                                 <td>An User</td>
                                 <td>Von User</td>
                                 <td>Titel</td>
                                 <td>Inhalt</td>
                                 </tr>
                                 <tr>";
                                 while($row = mysqli_fetch_object($result))	 
                                 echo "
                                 <td>$row->UserID</td>
                                 <td>$row->authorID</td>
                                 <td>$row->title</td>
                                 <td>$row->content</td>
                                 </tr>	 
                                 ";
                                 echo "</table>";
                            
                  break;
              case "categories":     echo "<h3>Ergebnis:</h3>$t
                                     <tr>
                                     <td>ID</td>
                                     <td>Type</td>
                                     <td>Nachname</td>
                                     <td></td>
                                     </tr>
                                     <tr>";
                                     while($row = mysqli_fetch_object($result))
                                     echo"
                                     <td>$row->id</td>
                                     <td>$row->type</td>
                                     <td>Bearbeiten</td>
                                     </tr>
                                     ";
                                     echo "</table>";
                            
                  break;
          }
          return;
            }
        } //FERTIG  
        function delete($connection,$qString,$table,$control,$controlItem){ 
           $check=mysqli_query($connection,"SELECT ".$control." FROM ".$table." WHERE ".$control."='$controlItem'");
           if(mysqli_num_rows($check)==1){
               $result=mysqli_query($connection,$qString);
               if($result){
                   echo "Datensatz erfolgreich gelöscht!";
               }
           } else {
               echo "Datensatz konnte nicht gelöscht werden da er nicht existiert!";
           }
           
        }      //Fertig
        function changePassword($connection,$qString,$password){ 
           if($password != null){
               $check=mysqli_query($connection,"SELECT username FROM users WHERE username='$qString'");
               if(mysqli_num_rows($check)==1){
                $password=md5($password);
                if(mysqli_query($connection,"UPDATE users SET password='$password' WHERE username='$qString'")){
                    echo "Das Passwort von User ".$qString." wurde erfolgreich geändert.";
                }else{
                    echo "Fehler beim Ändern des Passwortes von User ".$qString;
                }
               }else{
                   echo "Der User ".$qString." ist nicht vorhanden.";
               }    
           }else{
               echo "Es wurde kein Passwort übergeben!";
           }
        } //FERTIG 
        function setActive($connection,$qString){ 
            $check=mysqli_query($connection,"SELECT username FROM users WHERE username='$qString'");
           if(mysqli_num_rows($check)==1){
                $currentValue=mysqli_fetch_object(mysqli_query($connection,"SELECT isActivated FROM users WHERE username='$qString'"));
                if($currentValue->isActivated == 0){
                    mysqli_query($connection,"UPDATE users SET isActivated='1' WHERE username='$qString'");
                    echo "Der User ".$qString." wurde aktiviert.";
                }else{
                    mysqli_query($connection,"UPDATE users SET isActivated='0' WHERE username='$qString'");
                    echo "Der User ".$qString." wurde deaktiviert.";
                }
           }else{
               echo "Der User ".$qString." ist nicht vorhanden.";
           }
        } //FERTIG 
        function upgradeAccount($connection,$qString){ 
            $check=mysqli_query($connection,"SELECT username FROM users WHERE username='$qString'");
           if(mysqli_num_rows($check)==1){            
            $currentValue=mysqli_fetch_object(mysqli_query($connection,"SELECT isRetailer FROM users WHERE username='$qString'"));
            if($currentValue->isRetailer == 0){
                mysqli_query($connection,"UPDATE users SET isRetailer='1' WHERE username='$qString'");
                echo "Der User ".$qString." wurde als Händler eingetragen.";
            }else{
                mysqli_query($connection,"UPDATE users SET isRetailer='0' WHERE username='$qString'");
                echo "Der User ".$qString." wurde als Händler ausgetragen.";
            }  
               echo "Der User ".$qString." ist nicht vorhanden.";
           }               
        } //FERTIG
        function addCategory($connection,$qString){
            $check=mysqli_query($connection,"SELECT type FROM categories WHERE type='$qString'");
            if(mysqli_num_rows($check)==0){ 
                if(mysqli_query($connection,"INSERT INTO categories VALUES(null,'$qString')")){
                    echo "Die Kategorie ".$qString." wurde erfolgreich hinzugefügt.";
                }else{
                    echo "Die Kategorie ".$qString." konnte nicht hinzugefügt werden.";
                }
            }else{
                echo "Die Kategorie ".$qString." ist schon vorhanden.";
            }
        } //FERTIG
        function addUser($connection,$firstname,$sirname,$username,$sex,$password,$tel,$mail,$geb,$plz,$country,$city,$street,$housenr,$picture,$isActivated,$isRetailer,$maximum){
            if(mysqli_query($connection,"INSERT INTO users VALUES(null,'$firstname','$sirname','$sex','$username','$password','$tel','$mail','$geb','$plz','$country','$city','$street','$housenr','$picture','$isActivated','$isRetailer','$maximum')")){
                echo "Der User ".$username." wurde erfolgreich angelegt.";
            }    
        } 
       function contactUser($connection,$mail,$textInput,$subject){
            $to=$mail;
            $message=$textInput;
            $from='Sqwirrel';
            $fromMail='support@Sqwirrel.com';
            if(!mail ($to ,$subject , $message,"From: $from <$fromMail>",'Content-type: text/plain; charset=utf-8' . "\r\n"))
                echo "Fehler bei der Übermittlung!";
            else
                echo "Email erfolgreich gesendet!";
        }
        function editUser($connection,$username,$mail){
            $check= mysqli_fetch_object(mysqli_query($connection,"SELECT username,mail FROM users WHERE username='$username'"));
            if(mysqli_num_rows($check)==1)
                if(mysqli_query($connection,"UPDATE users SET mail='$mail' WHERE username='$username'")){
                   echo "Die Email ".$mail." von User ".$username." wurde erfolgreich geändert.";
                }else{
                    echo "Die Email ".$mail." von User ".$username." konnte nicht geändert werden.";
                }
        }//-tbc
        function changePasswordBe($connection, $username, $password, $pwOld){
            $check= mysqli_fetch_object(mysqli_query($connection,"SELECT password FROM be WHERE name='$username'"));
            $pw=md5($password);
            $pwcheck=$check->password;
            if(md5($pwOld) == $pwcheck) {
                mysqli_query($connection,"UPDATE be SET password='$pw' WHERE name='$username'");
                echo "Erfolg";
            }else{
                echo "Fehler";
            }
        }
    if($connection){
        switch($code){
            case 10: delete($connection,"DELETE FROM users WHERE username='$textInput'","users","username",$textInput);
                break;
            case 11: search($connection,"SELECT * FROM users WHERE username LIKE '%$textInput%' OR mail LIKE '%$textInput%'","users");
                break;
            case 12: search($connection,"SELECT * FROM users WHERE username LIKE '%$textInput%'","users");
                break;
            case 13: search($connection,"SELECT * FROM users WHERE mail LIKE '%$textInput%'","users");
                break;
            case 14: changePassword($connection,$textInput,$password);
                break;
            case 15: setActive($connection,$textInput);
                break;
            case 16: upgradeAccount($connection,$textInput);
                break;
            case 17: addUser($connection,$firstname,$sirname,$username,$sex,$password,$tel,$mail,$geb,$plz,$country,$city,$street,$housenr,$picture,$isActivated,$isRetailer,$maximum);
                break;   
            case 18: editUser($connection,$username,$mail);
                break; 
            case 19: contactUser($connection,$firstname,$mail);
                break;                 
            case 20: delete($connection,"DELETE FROM notice WHERE ID='$textInput'","notice","ID",$textInput);
                break;
            case 21: search($connection,"SELECT * FROM notice WHERE title LIKE '%$textInput%' OR category LIKE '%$textInput%' OR UserID LIKE '%$textInput%'","notice");
                break;
            case 22: search($connection,"SELECT * FROM notice WHERE title LIKE '%$textInput%'","notice");
                break;
            case 23: search($connection,"SELECT * FROM notice WHERE category LIKE '%$textInput%' OR UserID LIKE '%$textInput%'","notice");
                break;
            case 24: search($connection,"SELECT * FROM notice WHERE UserID LIKE '%$textInput%'","notice");
                break;
            case 30: delete($connection,"DELETE FROM rating WHERE ID='$textInput'","rating","ID",$textInput);
                break;
            case 31: search($connection,"SELECT * FROM rating WHERE authorID LIKE '%$textInput%' OR content LIKE '%$textInput%' OR title LIKE '%$textInput%' OR UserID LIKE '%$textInput%'","rating");
                break;
            case 32: search($connection,"SELECT * FROM rating WHERE authorID LIKE '%$textInput%'","rating");
                break;
            case 33: search($connection,"SELECT * FROM rating WHERE content LIKE '%$textInput%'","rating");
                break;
            case 34: search($connection,"SELECT * FROM rating WHERE title LIKE '%$textInput%'","rating");
                break;
            case 35: search($connection,"SELECT * FROM rating WHERE UserID LIKE '%$textInput%'","rating");
                break;
            case 40: delete($connection,"DELETE FROM categories WHERE ID='$textInput'","categories","ID",$textInput);
                break;
            case 41: search($connection,"SELECT * FROM categories WHERE type LIKE '%$textInput%'","categories");
                break;
            case 42: addCategory($connection,$textInput);
                break;
            case 511: check($connection,"SELECT username FROM users WHERE username='$textInput'");
                break;
            case 512: check($connection,"SELECT mail FROM users WHERE mail='$textInput'");
                break;
            case 513: check($connection,"SELECT  isActivated FROM users WHERE isActivated='$$textInput'");
                break;
            case 514: check($connection,"SELECT  isRetailer FROM users WHERE isRetailer='$textInput'");
                break;
            case 521: check($connection,"SELECT  isActivated FROM notice WHERE isActivated='$textInput'");
                break;
            case 531: check($connection,"SELECT  isActivated FROM rating WHERE isActivated='$textInput'");
                break;
            case 541: check($connection,"SELECT  title FROM categories WHERE title='$textInput'");
                break;
            case 550: changePasswordBe($connection, $username, $password, $pwOld);
                break;
        }
        mysqli_close($connection);
    }else{
        mysqli_close($connection);
        echo "DB-Connection Failed";
    }
    
?>