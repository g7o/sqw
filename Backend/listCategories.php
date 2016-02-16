<?php
include_once("dbCon.inc"); 
$result= mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM categories"));
if($result){
    while($row = mysqli_fetch_array($result)){
            echo '<div class="col-xs-4"><h2>'.$row[1].'</h2></div>';
    }
}
?>