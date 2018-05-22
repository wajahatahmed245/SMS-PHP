
<?php include "databaseConnection.php";?>

<?php

if (isset($_REQUEST["btnUserManagement"]) == true)
{
   

$IsAdminP=0;
$loginUserMnagement=$_REQUEST["login"];
$passwordUserMnagement=$_REQUEST["password"];
$nameUserMnagement=$_REQUEST["name"];
$emailUserMnagement=$_REQUEST["email"];
$x= $_SESSION["SETID"];

    if (isset($_REQUEST["isAdmin"]) == true){
        $IsAdminP =1;
    }
    
$sql = "INSERT INTO users (loginU, passwordU, nameU,email,isadmin,createdBy)
VALUES ('$loginUserMnagement', '$passwordUserMnagement', '$nameUserMnagement','$emailUserMnagement','$IsAdminP','$x')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



}



?>

