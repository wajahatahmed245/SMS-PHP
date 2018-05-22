<?php
session_start();
include("databaseConnection.php");

$messageDelteErrror='';
$messageDelteErrror2='';
$id = $_REQUEST['id'];

    //echo $id;
    //echo '<br>';
    //echo $_SESSION["SETID"];
    //echo '<br>';

if ($id == 1) {
    $messageDelteErrror =" cannot delete admin !";
    $messageDelteErrror2= "Switch back"; 
   include "error_delete.php";
}

else if ($id == $_SESSION["SETID"] && $_SESSION["SETID"] != 1) {
    $messageDelteErrror = "cannot delete you are logged in from this id ! ";
    $messageDelteErrror2= "Switch back"; 
    include "error_delete.php";
}

else {
$sqlDelete="DELETE FROM users WHERE userid='$id' ";
$result = mysqli_query($conn,$sqlDelete );

    if (mysqli_query($conn, $sqlDelete)) {
       // echo "Record deleted successfully";
    }

header("Location:userManagement.php");    
}


?>

