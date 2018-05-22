<?php 
include "databaseConnection.php";

$sqlDispalyRM="SELECT * FROM permissions";
    $result = mysqli_query($conn, $sqlDispalyRM);



for ($i =0;$i< mysqli_num_rows($result);$i++) {  
     $r=mysqli_fetch_assoc($result);
    echo '<option value='.$r["permissionId"] .'>'.$r["nameP"].'</option>';

}


?>