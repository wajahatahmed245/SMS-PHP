<?php include "databaseConnection.php";?>

<?php

//PermissionC=
//RoleC=

if (isset($_REQUEST["btnUserRoleManagement"]) == true)
{
   
$rolesURM=$_REQUEST["roleURM"];
$userURM=$_REQUEST["userURM"];

/*

$sqlDispalyPM="SELECT * FROM permissions";
    $result = mysqli_query($conn, $sqlDispalyPM);

    
for ($i =0;$i< mysqli_num_rows($result);$i++) {  
    $r=mysqli_fetch_assoc($result);
   echo '<tr>';
   echo  '<td scope="row">'.$r["userid"].'</td>';
   echo     '<td>'.$r["nameP"].'</td>';
   echo        '<td>'.$r["descriptionP"].'</td>';
   echo     '<td>';
   echo '<a href=updat
*/


$sqlRM = "INSERT INTO user_role (roleid, userid)
VALUES ('$rolesURM' ,'$userURM')";

    if (mysqli_query($conn, $sqlRM)) {
        //echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sqlRM . "<br>" . mysqli_error($conn);
    }



}



?>

