<?php include "databaseConnection.php";?>

<?php

//PermissionC=
//RoleC=

if (isset($_REQUEST["btnRolePermissionManagement"]) == true)
{
   
$rolesRPM=$_REQUEST["rolesRPM"];
$permissionRPM=$_REQUEST["permissionRPM"];

/*

$sqlDispalyPM="SELECT * FROM permissions";
    $result = mysqli_query($conn, $sqlDispalyPM);

    
for ($i =0;$i< mysqli_num_rows($result);$i++) {  
    $r=mysqli_fetch_assoc($result);
   echo '<tr>';
   echo  '<td scope="row">'.$r["permissionId"].'</td>';
   echo     '<td>'.$r["nameP"].'</td>';
   echo        '<td>'.$r["descriptionP"].'</td>';
   echo     '<td>';
   echo '<a href=updat
*/


$sqlRM = "INSERT INTO role_permission (roleid, permissionid)
VALUES ('$rolesRPM' ,'$permissionRPM')";

    if (mysqli_query($conn, $sqlRM)) {
        //echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sqlRM . "<br>" . mysqli_error($conn);
    }



}



?>

