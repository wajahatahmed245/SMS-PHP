

<?php

//echo "hellp";
$id = $_REQUEST['id'];
//echo $id;

$roleNameUp='';
$descriptionUp='';

include "databaseConnection.php";


$sqlDispalyUpRM="SELECT * FROM roles";
    $result = mysqli_query($conn, $sqlDispalyUpRM);

for ($i =0;$i< mysqli_num_rows($result);$i++) {  
    $r=mysqli_fetch_assoc($result);
 
    if ($r['roleId']==$id) {
        $roleNameUp=$r['nameR'];
        $descriptionUp=$r['descriptionR'];
       

        
    }
}


if (isset($_REQUEST['btnRoleManagementUpdate']) == true)
{
   // echo "<br>";
    //echo "done";
    //echo "<br>";
    //echo "<br>";

    
    $rN=$_REQUEST['roleNameUpdate'];
    $d=$_REQUEST['descripionUpdate'];
    

    $sqlUp = "UPDATE roles SET nameR='$rN',descriptionR='$d' WHERE roleId=$id";
    if (mysqli_query($conn, $sqlUp)) {
      //  echo "Record updated successfully";
    } 



    header("location:RoleManagement.php");



}
?>



















<?php
session_start();

if(isset($_SESSION["SET1"])==false){
    header("location:login.php");
}

?>
<?php include 'LoginControl.php' ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-kpxyUW5uLgBOlhLqm8Hga/aWgf7FgZWLhphVqsMgaW0s+G6KF1RZpUb6ygQL3WUE"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container-fluid">
        <nav>
            <!--NAV BAR STARTS-->
            <ul id="navbar" class="nav nav-tabs" style="font-size:19px;width:1600px;  height:52px;border: 0px;margin: 0px;">

                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="Home.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="userManagement.php">User Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="RoleManagement.php"><i class="fa fa-user-circle-o"> </i>Role Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="PermissionManagement.php">Permission Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="RolePermissionManagement.php">Role Permission Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="UserRolemanagement.php">User Role Management</a>
                </li>

                <form action="logout.php"  method = "POST" >
                   
                <li class="nav-item" id="PULL">
                <a>
                <button name="logoutHome" type="submit" class="btn btn-primary">Logout</button>
                </a>
                </li>
            </form>

            </ul>


        </nav>
        <!--NAV BAR ENDS-->
        <button type="button" class="btn btn-success" style = " width: 220px;font-size:20px;"><i class="fa fa-universal-access" style="font-size:24px"> </i><?= strtolower($_SESSION["SET1"]);?></button>
    
        <!-- FORM -->

        <div class="row" style="margin-top:65px">



            <div class="col-4" id="signin">
                <section>

                    <div class="card border-#868e96 mb-3" style="max-width: 30rem; ">

                        <div class="card-header" style="font-size:24px;color:#2FA4E7;">
                        <i class="fa fa-user-circle-o"> </i> Role Management </div>

                        <form action="" method = "POST">

                            <div id="header" class="card-body">

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="adminUSername">
                                        <strong>Role Name:</strong>
                                    </label>
                                    <input name="roleNameUpdate" value='<?=$roleNameUp ?>' type="text" class="form-control" placeholder="Enter role name" id="adminUSername">
                                    <?php 
                                    if (isset($_REQUEST["btnRoleManagementUpdate"]) == true)
                                        {
                                        $showMsg=' Provide role name and try submitting again.';
                                        $roleName=$_REQUEST["roleNameUpdate"];
                                        validatingInput($roleName,$showMsg); 
                                        }
                                ?>
                                </div>

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="descripion">
                                        <strong>Description:</strong>
                                    </label>
                                    <input name="descripionUpdate" value='<?=$descriptionUp ?>' type="descripion" class="form-control" placeholder="Enter descripion" id="descripion">
                                    
                                    <?php 
                                    if (isset($_REQUEST["btnRoleManagementUpdate"]) == true)
                                        {
                                        $showMsg=' Provide descripion and try submitting again.';
                                        $descripion=$_REQUEST["descripionUpdate"];
                                        validatingInput($descripion,$showMsg); 
                                        }
                                ?>
                                </div>

                               

                            </div>

                            <div class="card-footer">

                                <button type="reset" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Clear all fields">Clear</button>
                                <button type="submit" name="btnRoleManagementUpdate" class="btn btn-primary" style="margin-left:230px;">update</button>
                            </div>

                        </form>

                    </div>

            </div>
            </section>



            <div class="col-8">
              
            </div>

            



        </div>
    </div>
</body>

</html>