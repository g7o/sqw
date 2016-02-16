<?php
include_once("dbCon.inc"); 
$result=mysqli_query($connection,"SELECT * FROM categories");
if($result){
    while($row = mysqli_fetch_array($result)){
        $shE="shEdCategoryForm('".$row[1]."')";
        $glyphEdit='<span id="'.$row[1].'" onclick="'.$shE.'" class="pencil-smaller glyphicon glyphicon-pencil" aria-hidden="true">'; 
            echo '<div class="col-xs-12 col-md-4"><h3 class="cat-h3">'.$row[1].' '.$glyphEdit.'</h3></div>';
            
    }
}
?>