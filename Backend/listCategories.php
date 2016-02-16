<?php
include_once("dbCon.inc"); 
$result=mysqli_query($connection,"SELECT * FROM categories");
if($result){
    while($row = mysqli_fetch_array($result)){
        $shE="shEdForm('".$row[1]."')";
        $glyphEdit='<span id="'.$row[1].'" onclick="'.$shE.'" class="glyphicon glyphicon-pencil" aria-hidden="true">'; 
            echo '<div class="col-xs-4"><h2>'.$row[1].' '.$glyphEdit.'</h2></div>';
            
    }
}
?>