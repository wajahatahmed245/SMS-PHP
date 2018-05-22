<?php include "databaseConnection.php";?>

<?php

if (isset($_REQUEST["btnRoleManagement"]) == true)
{
   
$roleNameRM=$_REQUEST["roleName"];
$descriptionRM=$_REQUEST["descripion"];
$x= $_SESSION["SETID"];
    
$sqlRM = "INSERT INTO roles (nameR, descriptionR,createdBy)
VALUES ('$roleNameRM','$descriptionRM','$x')";

    if (mysqli_query($conn, $sqlRM)) {
        //echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sqlRM . "<br>" . mysqli_error($conn);
    }



}



?>

