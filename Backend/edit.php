<?php
include_once("dbCon.inc");
    /** @param[in] code Beinhaltet den Bearbeitungscode */
    $code=mysqli_real_escape_string($connection, $_POST['code']);
    /** @param[in] textInput Beinhaltet den String für die SQL-Abfragen */
    if($code != 17 && $code != 550 && $code != 18 && $code !=501)
    $textInput=mysqli_real_escape_string($connection, $_POST['textInput']);
    /** @param[in] password Beinhaltet das zu ändernde Passwort - default: 0 */
    if($code == 14)
        $password=mysqli_real_escape_string($connection, $_POST['password']);
    if($code == 18){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
    }
    if($code == 19){
        $subject=mysqli_real_escape_string($connection, $_POST['subject']);
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
        $textInput=mysqli_real_escape_string($connection, $_POST['textInput']);
    }
    if($code == 501){
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
        $firstname=mysqli_real_escape_string($connection, $_POST['firstname']);
        $sirname=mysqli_real_escape_string($connection, $_POST['sirname']);        
    }
 if(code==19){
        $textInput=$_POST['textInput'];
        $mail=$_POST['mail'];
    }
    if($code == 550){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $pwOld=mysqli_real_escape_string($connection, $_POST['pwOld']);
        $pwNew=mysqli_real_escape_string($connection, $_POST['pwNew']);
        $pwNewChk=mysqli_real_escape_string($connection, $_POST['pwNewChk']);
    }
    if($code == 17){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $sirname=mysqli_real_escape_string($connection, $_POST['sirname']);
        $sex=mysqli_real_escape_string($connection, $_POST['sex']);
        $firstname=mysqli_real_escape_string($connection, $_POST['firstname']);
        $password=mysqli_real_escape_string($connection, $_POST['password']);
        $tel=mysqli_real_escape_string($connection, $_POST['tel']);
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
        $geb=mysqli_real_escape_string($connection, $_POST['geb']);
        $plz=mysqli_real_escape_string($connection, $_POST['plz']);
        $country=mysqli_real_escape_string($connection, $_POST['country']);
        $city=mysqli_real_escape_string($connection, $_POST['city']);
        $street=mysqli_real_escape_string($connection, $_POST['street']);
        $housenr=mysqli_real_escape_string($connection, $_POST['housenr']);
        $picture=mysqli_real_escape_string($connection, $_POST['picture']);
        $isActivated=mysqli_real_escape_string($connection, $_POST['isActivated']);
        $isRetailer=mysqli_real_escape_string($connection, $_POST['isRetailer']);
        $maximum=mysqli_real_escape_string($connection, $_POST['maximum']);
         $vorhanden=mysqli_real_escape_string($connection, $_POST['vorhanden']);
    }
        function showContactForm($mail, $firstname, $sirname){
            $jsFunct="contactUser(document.getElementById('mail').value)";
            $message='<div class="row center-block">
    <div class="col-xs-12 text-center">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="mail" class="col-xs-2 control-label">Mail:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="mail" id="mail" value="'.$mail.'" readonly>
                </div>
            </div> 
        <div class="form-group">
            <label for="name" class="col-xs-2 control-label">Name:</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" id="name" name="name" value="'.$sirname.' '.$firstname.'" readonly>
            </div>
        </div>
            <div class="form-group">
                <label for="subject" class="col-xs-2 control-label">Betreff:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="subject" id="subject" value="Sqwirrel-Support" readonly>
                </div>
            </div>         
        <div class="form-group">
            <label for="message" class="col-xs-2 control-label">Nachricht:</label>
            <div class="col-xs-10">
                <textarea required cols="10" rows="10" name="message" class="form-control" id="message">
                </textarea>
            </div>
        </div> 
        <div class="form-group">
            <div class="col-sm-12">
                  <a class="btn btn-primary" onclick="'.$jsFunct.'">Absenden</a>
            </div>
        </div>         
        </form> 
        
    </div>  
</div>         

';
            echo $message;
        }
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
            if(!$result){
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
                                <td>Maximum</td>
                                <td>Bearbeiten</td>
                                <td>Löschen</td>
                                <td>Kontaktieren</td>
                                </tr>
                                <tr>";
                                while($row = mysqli_fetch_array($result)){
                                $glyphPencil='<span class="glyphicon glyphicon-pencil" aria-hidden="true">';
                                $shC="shConForm('".$row[7]."','".$row[1]."','".$row[2]."')";
                                $glyphContact='<span id="'.$row[7].'" onclick="'.$shC.'" class="glyphicon glyphicon-envelope" aria-hidden="true">'; 
                                $urlContact='<a>'.$glyphContact.'</a>';
                                $glyphRemove='<span id="'.$row[4].'" onclick="deleteUser(this.id)" class="glyphicon glyphicon-remove" aria-hidden="true">';
                                $urlRemove='<a>'.$glyphRemove.'</a>';
                                echo "
                                <td>$row[4]</td>
                                <td>$row[2]</td>
                                <td>$row[1]</td>
                                <td>$row[7]</td>
                                <td>$row[15]</td>                            
                                <td>$row[17]</td> 
                                <td>$glyphPencil</td>
                                <td>$urlRemove</td>
                                <td>$urlContact</td>
                                </tr>	 
                                ";}
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
                                <td>Löschen</td>
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
                                     <td>Löschen</td>
                                     </tr>
                                     ";
                                     echo "</table>";
                            
                  break;
          }
          return;
            }
        } //FERTIG  
        function delete($connection,$qString){ 
               $result=mysqli_query($connection,$qString);
               if($result){
                   echo "Datensatz erfolgreich gelöscht!";
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
            $check= mysqli_fetch_object(mysqli_query($connection,"SELECT * FROM users WHERE username='$username'"));
            if($check)
                if(mysqli_query($connection,"UPDATE users SET mail='$mail' WHERE username='$username'")){
                   echo "Die Email ".$mail." von User ".$username." wurde erfolgreich geändert.";
                }else{
                    echo "Die Email ".$mail." von User ".$username." konnte nicht geändert werden.";
                }
        }//FERTIG
        function changePasswordBe($connection, $username, $pwOld, $pwNew, $pwNewChk){
            
            if($pwNew == $pwNewChk){
                $check= mysqli_fetch_array(mysqli_query($connection,"SELECT password FROM be WHERE name='$username'"));
                $pw=md5($pwOld);
                $pwcheck=$check[0];
                if($pw == $pwcheck) {
                    $pwN=md5($pwNew);
                    mysqli_query($connection,"UPDATE be SET password='$pwN' WHERE name='$username'");
                    echo '<span class="help-block hint-success">Das Passwort wurde erfolgreich ge&auml;ndert!</span>';
                    return;
                }else{
                    echo '<span class="help-block hint-failure">Das eingegebene Passwort ist falsch!</span>';
                    return;
                }   
            } else {
                echo '<span class="help-block hint-failure">Die beiden Passw&ouml;rter stimmen nicht &uuml;berein!</span>';
                return;
            }
        }
    if($connection){
        switch($code){
            case 10: delete($connection,"DELETE FROM users WHERE username='".$textInput."'");
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
            case 19: contactUser($connection,$mail,$textInput,$subject);
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
            case 501: showContactForm($mail,$firstname,$sirname);
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
            case 550: changePasswordBe($connection, $username, $pwOld, $pwNew, $pwNewChk);
                break;
        }
        mysqli_close($connection);
    }else{
        mysqli_close($connection);
        echo "DB-Connection Failed";
    }
    
?>