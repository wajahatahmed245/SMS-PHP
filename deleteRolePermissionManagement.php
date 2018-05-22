<?php
session_start();
include("databaseConnection.php");


$id = $_REQUEST['id'];

    //echo $id;
    //echo '<br>';
    //echo $_SESSION["SETID"];
    //echo '<br>';

$sqlDeleteRPM="DELETE FROM role_permission WHERE RolePermissionId='$id' ";
$result = mysqli_query($conn,$sqlDeleteRPM );

    if (mysqli_query($conn, $sqlDeleteRPM)) {
       // echo "Record deleted successfully";
    }

header("Location:RolePermissionManagement.php");    



?>

