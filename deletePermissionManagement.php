<?php
session_start();
include("databaseConnection.php");


$id = $_REQUEST['id'];

    //echo $id;
    //echo '<br>';
    //echo $_SESSION["SETID"];
    //echo '<br>';

$sqlDeletePM="DELETE FROM permissions WHERE permissionId='$id' ";
$result = mysqli_query($conn,$sqlDeletePM );

    if (mysqli_query($conn, $sqlDeletePM)) {
       // echo "Record deleted successfully";
    }

header("Location:PermissionManagement.php");    



?>

