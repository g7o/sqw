<?php
    include_once("dbCon.inc"); 
    /** @param[in] code Beinhaltet den Bearbeitungscode */
    $code=mysqli_real_escape_string($connection, $_POST['code']);
    /** @param[in] textInput Beinhaltet den String für die SQL-Abfragen */
    if($code != 17 && $code != 550 && $code != 18 && $code !=501 && $code != 502 && $code != 15 && $code != 16 && $code != 17 && $code != 43 && $code != 44 && $code != 25 && $code !=26 && $code !=36 && $code != 37)
    $textInput=mysqli_real_escape_string($connection, $_POST['textInput']);
    /** @param[in] password Beinhaltet das zu ändernde Passwort - default: 0 */
    if($code == 14)
        $password=mysqli_real_escape_string($connection, $_POST['password']);
    if($code == 18){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
    }
    if($code == 15){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $active=mysqli_real_escape_string($connection, $_POST['active']);    
    }
    if($code == 16){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $type=mysqli_real_escape_string($connection, $_POST['type']);    
    }
    if($code == 43){
        $type=mysqli_real_escape_string($connection, $_POST['type']);    
    }
    if($code == 25){
        $active=mysqli_real_escape_string($connection, $_POST['active']);  
        $id=mysqli_real_escape_string($connection, $_POST['id']);
    }
    if($code == 26){
        $id=mysqli_real_escape_string($connection, $_POST['id']);
        $active=mysqli_real_escape_string($connection, $_POST['active']); 
    }
    if($code == 36){
        $id=mysqli_real_escape_string($connection, $_POST['id']);
        $active=mysqli_real_escape_string($connection, $_POST['active']); 
    }
    if($code == 37){
        $id=mysqli_real_escape_string($connection, $_POST['id']);
        $active=mysqli_real_escape_string($connection, $_POST['active']); 
    }
    if($code == 44){
        $type=mysqli_real_escape_string($connection, $_POST['type']);   
        $typeNew=mysqli_real_escape_string($connection, $_POST['typeNew']);    
    }
    if($code == 17){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $maximum=mysqli_real_esca3e_string($connection, $_POST['max']);    
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
    if($code == 502){
        $mail=mysqli_real_escape_string($connection, $_POST['mail']);
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $isActivated=mysqli_real_escape_string($connection, $_POST['isActivated']);
        $isRetailer=mysqli_real_escape_string($connection, $_POST['isRetailer']);        
        $maximum=mysqli_real_escape_string($connection, $_POST['maximum']);                
    }
 if($code==19){
        $textInput=$_POST['textInput'];
        $mail=$_POST['mail'];
    }
    if($code == 550){
        $username=mysqli_real_escape_string($connection, $_POST['username']);
        $pwOld=mysqli_real_escape_string($connection, $_POST['pwOld']);
        $pwNew=mysqli_real_escape_string($connection, $_POST['pwNew']);
        $pwNewChk=mysqli_real_escape_string($connection, $_POST['pwNewChk']);
    }
    function showEditUserForm($username,$mail,$isActivated,$isRetailer,$maximum){
        $jsChgMail="changeMail(1,'".$username."',document.getElementById('mail').value,document.getElementById('aktiv').value,document.getElementById('ktype').value,document.getElementById('max').value)";
        $jsChgActiv="changeActive(2,'".$username."',document.getElementById('mail').value,document.getElementById('aktiv').value,document.getElementById('ktype').value,document.getElementById('max').value)";
        $jsChgType="changeType(3,'".$username."',document.getElementById('mail').value,document.getElementById('aktiv').value,document.getElementById('ktype').value,document.getElementById('max').value)";
        $jsChgMax="changeMax(4,'".$username."',document.getElementById('mail').value,document.getElementById('aktiv').value,document.getElementById('ktype').value,document.getElementById('max').value)";
        $optTypFree='<option value="0">Kostenlos</option><option value="1">H&auml;ndler</option>';
        $optTypRetailer='<option value="1">H&auml;ndler</option><option value="0">Kostenlos</option>';
        if($isRetailer==1){
            $optTyp=$optTypRetailer;
        } else {
            $optTyp=$optTypFree;
        }
        $optActivYes='<option value="1">Ja</option><option value="0">Nein</option>';
        $optActivNo='<option value="0">Nein</option><option value="1">Ja</option>'; 
        if($isActivated == 1){
            $optActiv=$optActivYes;
        } else {
            $optActiv=$optActivNo;
        }
        $content=' <div class="row center-block">
    <div class="col-xs-12 text-center">
        <form class="form-horizontal">            
            <h3>User: '.$username.'</h3>
            <div class="form-group">
                <label for="mail" class="col-xs-2 control-label">Mail:</label>
                <div class="col-xs-6">
                    <input type="email" class="form-control" value="'.$mail.'" id="mail">
                </div>
                <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgMail.'">Speichern</a>     
            </div> 
        <div class="form-group">
            <label for="ktype" class="col-xs-2 control-label">Typ:</label>
            <div class="col-xs-6">
                <select id="ktype">
                '.$optTyp.'
                </select>
            </div>
            <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgType.'">Speichern</a>     
        </div>
        <div class="form-group">
            <label for="aktiv" class="col-xs-2 control-label">Aktiv:</label>
            <div class="col-xs-6">
                <select id="aktiv">
                    '.$optActiv.'
                </select>
            </div>
            <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgActiv.'">Speichern</a>                 
        </div>
        <div class="form-group text-center">
            <label for="max" class="col-xs-2 control-label">Max.:</label>
            <div class="col-xs-6">
                <input type="number" min="0" value="'.$maximum.'" class="form-control" id="max">                
            </div>
            <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgMax.'">Speichern</a>     
            
        </div>  
        </form>
    </div>  
</div>  ';
        echo $content;
    }
function showEditCategoryForm($type){
        $jsChgType="changeCategories('".$type."',document.getElementById('type').value)";
        $content=' <div class="row center-block">
    <div class="col-xs-12 text-center">
        <form class="form-horizontal">            
            <div class="form-group">
                <div class="col-xs-6">
                    <input type="text" class="form-control" value="'.$type.'" id="type">
                </div>
                <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgType.'">Speichern</a>     
            </div>   
        </form>
    </div>  
</div>  ';
        echo $content;
    }

function showEditNoticeForm($id,$active){
$optActivYes='<option value="1">Aktiv</option><option value="0">Inaktiv</option>';
        $optActivNo='<option value="0">Inaktiv</option><option value="1">Aktiv</option>'; 
        if($active == 1){
            $optActiv=$optActivYes;
        } else {
            $optActiv=$optActivNo;
        }    
        $jsChgType="changeActiveNotice('".$id."',document.getElementById('active').value)";
        $content=' <div class="row center-block">
    <div class="col-xs-12 text-center">
        <form class="form-horizontal">            
            <div class="form-group">
            <label for="acitve" class="col-xs-2 control-label">Status:</label>
                <div class="col-xs-6">
                    <select id="active">
                        '.$optActiv.'
                    </select>
                </div>
                <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgType.'">Speichern</a>     
            </div>   
        </form>
    </div>  
</div>  ';
        echo $content;
    }
function showEditRatingForm($id,$active){
$optActivYes='<option value="1">Aktiv</option><option value="0">Inaktiv</option>';
        $optActivNo='<option value="0">Inaktiv</option><option value="1">Aktiv</option>'; 
        if($active == 1){
            $optActiv=$optActivYes;
        } else {
            $optActiv=$optActivNo;
        }    
        $jsChgType="changeActiveRating('".$id."',document.getElementById('active').value)";
        $content=' <div class="row center-block">
    <div class="col-xs-12 text-center">
        <form class="form-horizontal">            
            <div class="form-group">
            <label for="acitve" class="col-xs-2 control-label">Status:</label>
                <div class="col-xs-6">
                    <select id="active">
                        '.$optActiv.'
                    </select>
                </div>
                <a class="col-xs-4 text-center btn btn-primary" onclick="'.$jsChgType.'">Speichern</a>     
            </div>   
        </form>
    </div>  
</div>  ';
        echo $content;
    }
    function showContactForm($mail, $firstname, $sirname){
            $jsFunct="contactUser(document.getElementById('mail').value)";
            $content='<div class="row center-block">
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
    echo $content;
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
                                <td>E-Mail</td>
                                <td>Typ</td>
                                <td>Aktiv</td>
                                <td>Maximum</td>
                                <td>Bearbeiten</td>
                                <td>Löschen</td>
                                <td>Kontaktieren</td>
                                </tr>
                                <tr>";
                                while($row = mysqli_fetch_array($result)){
                                $glyphPencil='<span class="glyphicon glyphicon-pencil" aria-hidden="true">';
                                $shE="shEdForm('".$row[4]."','".$row[7]."','".$row[15]."','".$row[16]."','".$row[17]."')";
                                $glyphEdit='<span id="'.$row[7].'" onclick="'.$shE.'" class="glyphicon glyphicon-pencil" aria-hidden="true">'; 
                                $urlEdit='<a>'.$glyphEdit.'</a>';                                    
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
                                <td>$row[16]</td>                                                            
                                <td>$row[15]</td>                            
                                <td>$row[17]</td> 
                                <td>$urlEdit</td>
                                <td>$urlRemove</td>
                                <td>$urlContact</td>
                                </tr>	 
                                ";}
                                echo "</table>";
                                
                            
                  break;
              case "notice":    echo "<h3>Ergebnis:</h3>$t
                                <tr>
                                <td>Verfasser</td>
                                <td>Title</td>
                                <td>St&uuml;ck</td>
                                <td>Preis</td>
                                <td>Preis/St&uuml;ck</td>
                                <td>Originalpreis</td>
                                <td>Ort</td>
                                <td>L&auml;uft bis</td>
                                <td>Aktiv</td>
                                <td>Bearbeiten</td>
                                </tr>
                                <tr>";
                                while($row = mysqli_fetch_array($result)){
                                $shE="shEdNoticeForm('".$row[0]."','".$row[14]."')";
                                $glyphEdit='<span id="'.$row[14].'" onclick="'.$shE.'" class="glyphicon glyphicon-pencil" aria-hidden="true">'; 
                                $urlEdit='<a>'.$glyphEdit.'</a>';  
                                echo "
                                <td>$row[2]</td>
                                <td>$row[1]</td>
                                <td>$row[3]</td>
                                <td>$row[4]</td>
                                <td>$row[5]</td>
                                <td>$row[6]</td>
                                <td>$row[10]</td>
                                <td>$row[13]</td>
                                <td>$row[14]</td>
                                <td>$urlEdit</td>
                                </tr>	 
                                ";}
                                echo "</table>";
                            
                  break;
              case "rating":     echo "<h3>Ergebnis:</h3>$t
                                 <tr>
                                 <td>An User</td>
                                 <td>Von User</td>
                                 <td>Inhalt</td>
                                 <td>Aktiv</td>
                                 <td>Bearbeiten</td>
                                 </tr>
                                 <tr>";
                                 while($row = mysqli_fetch_array($result)){
                                $shE="shEdRatingForm('".$row[0]."','".$row[5]."')";
                                $glyphEdit='<span id="'.$row[5].'" onclick="'.$shE.'" class="glyphicon glyphicon-pencil" aria-hidden="true">'; 
                                $urlEdit='<a>'.$glyphEdit.'</a>';                                      
                                 echo "
                                 <td>$row[1]</td>
                                 <td>$row[2]</td>
                                 <td>$row[4]</td>
                                 <td>$row[5]</td>
                                 <td>$urlEdit</td>
                                 </tr>	 
                                 ";}
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
        function changeCategories($connection,$type,$typeNew){ 
            $checkType=mysqli_fetch_object(mysqli_query($connection,"SELECT type FROM categories WHERE type='$type'"));
            if($checkType->type != $typeNew){
                if(mysqli_query($connection,"UPDATE categories SET type='$typeNew' WHERE type='$type'")){
                    echo "Die Kategorie wurde auf ".$typeNew." ge&auml;ndert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
            }
        } //FERTIG
    function setActiveNotice($connection,$id,$active){ 
            $checkActive=mysqli_fetch_object(mysqli_query($connection,"SELECT active FROM notice WHERE ID='$id'"));
            if($checkActive->active != $active){
            if($active == 0){
                if(mysqli_query($connection,"UPDATE notice SET active='0' WHERE ID='$id'")){
                    echo "Die Anzeige wurde deaktiviert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            if($active == 1){
                if(mysqli_query($connection,"UPDATE notice SET active='1' WHERE ID='$id'")){
                    echo "Die Anzeige wurde aktiviert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
            }
        } //FERTIG 
    function setActiveRating($connection,$id,$active){ 
            $checkActive=mysqli_fetch_object(mysqli_query($connection,"SELECT active FROM rating WHERE ID='$id'"));
            if($checkActive->active != $active){
            if($active == 0){
                if(mysqli_query($connection,"UPDATE rating SET active='0' WHERE ID='$id'")){
                    echo "Die Bewertung wurde deaktiviert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            if($active == 1){
                if(mysqli_query($connection,"UPDATE rating SET active='1' WHERE ID='$id'")){
                    echo "Die Bewertung wurde aktiviert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
            }
        } //FERTIG 
        function setActive($connection,$username,$active){ 
            $checkActive=mysqli_fetch_object(mysqli_query($connection,"SELECT isActivated FROM users WHERE username='$username'"));
            if($checkActive->isActivated != $active){
            if($active == 0){
                if(mysqli_query($connection,"UPDATE users SET isActivated='0' WHERE username='$username'")){
                    echo "Der User ".$username." wurde deaktiviert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            if($active == 1){
                if(mysqli_query($connection,"UPDATE users SET isActivated='1' WHERE username='$username'")){
                    echo "Der User ".$username." wurde aktiviert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
            }
        } //FERTIG 
        function updateMaximum($connection,$username,$maximum){ 
            $checkMax=mysqli_fetch_object(mysqli_query($connection,"SELECT maximum FROM users WHERE username='$username'"));
            if($checkMax->maximum != $maximum){
                if(mysqli_query($connection,"UPDATE users SET maximum='$maximum' WHERE username='$username'")){
                    echo "Das Maximum von User ".$username." wurde von ".$checkMax->maximum." auf ".$maximum." ge&auml;ndert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
            }              
        } //FERTIG        
        function upgradeAccount($connection,$username,$type){ 
            $checkType=mysqli_fetch_object(mysqli_query($connection,"SELECT isRetailer FROM users WHERE username='$username'"));
            if($checkType->isRetailer != $type){
            if($type == 0){
                if(mysqli_query($connection,"UPDATE users SET isRetailer='0' WHERE username='$username'")){
                    echo "Der Kontotyp von User ".$username." wurde von H&auml;ndler zu Kostenlos ge&auml;ndert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            if($type == 1){
                if(mysqli_query($connection,"UPDATE users SET isRetailer='1' WHERE username='$username'")){
                    echo "Der Kontotyp von User ".$username." wurde von Kostenlos zu H&auml;ndler ge&auml;ndert.";
            }else{
                echo "Bitte versuche es nochmal!";
            }}
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
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

       function contactUser($connection,$mail,$textInput,$subject){
            $to=$mail;
            $message=$textInput;
            $from='Sqwirrel';
            $fromMail='support@sqwirrel.com';
            if(!mail ($to ,$subject , $message,"From: $from <$fromMail>",'Content-type: text/plain; charset=utf-8' . "\r\n"))
                echo "Fehler bei der Übermittlung!";
            else
                echo "Email erfolgreich gesendet!";
        }
        function editUser($connection,$username,$mail){
            $checkMail= mysqli_fetch_object(mysqli_query($connection,"SELECT mail FROM users WHERE username='$username'"));
            if($checkMail->mail != $mail){
                if(mysqli_query($connection,"UPDATE users SET mail='$mail' WHERE username='$username'")){
                   echo "Die Email ".$mail." von User ".$username." wurde erfolgreich geändert.";
                }else{
                    echo "Die Email ".$mail." von User ".$username." konnte nicht geändert werden.";
                }
            }else{
                echo "Bitte &auml;ndern Sie den Wert bevor Sie speichern!";
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
            case 15: setActive($connection,$username,$active);
                break;
            case 16: upgradeAccount($connection,$username,$type);
                break;
            case 17: updateMaximum($connection,$username,$maximum);
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
            case 25: showEditNoticeForm($id,$active);
                break;
            case 26: setActiveNotice($connection,$id,$active);
                break;
            case 30: delete($connection,"DELETE FROM rating WHERE ID='$textInput'","rating","ID",$textInput);
                break;
            case 31: search($connection,"SELECT * FROM rating WHERE author LIKE '%$textInput%' OR content LIKE '%$textInput%' OR drawee LIKE '%$textInput%'","rating");
                break;
            case 32: search($connection,"SELECT * FROM rating WHERE author LIKE '%$textInput%'","rating");
                break;
            case 33: search($connection,"SELECT * FROM rating WHERE content LIKE '%$textInput%'","rating");
                break;

            case 35: search($connection,"SELECT * FROM rating WHERE drawee LIKE '%$textInput%'","rating");
                break;
            case 36: setActiveRating($connection,$id,$active);
                break;
            case 37: showEditRatingForm($id,$active);
                break;                
            case 40: delete($connection,"DELETE FROM categories WHERE ID='$textInput'","categories","ID",$textInput);
                break;
            case 41: search($connection,"SELECT * FROM categories WHERE type LIKE '%$textInput%'","categories");
                break;
            case 42: addCategory($connection,$textInput);
                break;
            case 43: showEditCategoryForm($type);
                break;
            case 44: changeCategories($connection,$type,$typeNew);
                break;
            case 501: showContactForm($mail,$firstname,$sirname);
                break;   
            case 502: showEditUserForm($username,$mail,$isActivated,$isRetailer,$maximum);
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