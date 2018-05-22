<?php
session_start();
include("databaseConnection.php");


$id = $_REQUEST['id'];

    //echo $id;
    //echo '<br>';
    //echo $_SESSION["SETID"];
    //echo '<br>';

$sqlDeleteRM="DELETE FROM roles WHERE roleId='$id' ";
$result = mysqli_query($conn,$sqlDeleteRM );

    if (mysqli_query($conn, $sqlDeleteRM)) {
       // echo "Record deleted successfully";
    }

header("Location:RoleManagement.php");    



?>

