<?php include "databaseConnection.php";?>

<?php

if (isset($_REQUEST["btnPermissionManagement"]) == true)
{
   
$permissionNamePM=$_REQUEST["permissionName"];
$descriptionPM=$_REQUEST["permissionDescripion"];
$x= $_SESSION["SETID"];
    
$sqlRM = "INSERT INTO permissions (nameP, descriptionP,createdBy)
VALUES ('$permissionNamePM' ,'$descriptionPM','$x')";

    if (mysqli_query($conn, $sqlRM)) {
        //echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sqlRM . "<br>" . mysqli_error($conn);
    }



}



?>

