<?php

//echo "hellp";
$id = $_REQUEST['id'];
//echo $id;

$loginUp='';
$pwdUp='';
$nameUp='';
$emailUp='';
$isAdminUp='';


include "databaseConnection.php";


$sqlDispalyUp="SELECT * FROM users";
    $result = mysqli_query($conn, $sqlDispalyUp);

for ($i =0;$i< mysqli_num_rows($result);$i++) {  
    $r=mysqli_fetch_assoc($result);
 
    if ($r['userid']==$id) {
        $loginUp=$r['loginU'];
        $pwdUp=$r['passwordU'];
        $nameUp=$r['nameU'];
        $emailUp=$r['email'];

        if ($r['isadmin']==1){
            $isAdminUp='checked=""';

        }
    }
}


if (isset($_REQUEST['btnUserManagementUpdate']) == true)
{
   // echo "<br>";
    //echo "done";
    //echo "<br>";
    //echo "<br>";

    $iA='';

    if (isset($_REQUEST['isAdminUpdate']) == true ) {
        $iA=1;  
    }
    else
    {
        $iA=0;
    }

    $l=$_REQUEST['loginUpdate'];
    $n=$_REQUEST['nameUpdate'];
    $p=$_REQUEST['passwordUpdate'];
    $e=$_REQUEST['emailUpdate'];
    

    $sqlUp = "UPDATE users SET nameU='$n',passwordU='$p' ,loginU='$l' ,email='$e',isadmin ='$iA'  WHERE userid=$id";
    if (mysqli_query($conn, $sqlUp)) {
      //  echo "Record updated successfully";
    } 



    header("location:userManagement.php");



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
    <title>User Management</title>
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
                    <a class="nav-link active show" data-toggle="tab" href="userManagement.php"><i class="fa fa-users"> </i>User Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="RoleManagement.php">Role Management</a>
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
                            <i class="fa fa-users"> </i> User Management </div>

                        <form action="" method = "POST">

                            <div id="header" class="card-body">

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="adminUSername">
                                        <strong>Login:</strong>
                                    </label>
                                    <input name="loginUpdate" value='<?=$loginUp ?>' type="text" value="" class="form-control" placeholder="Enter login" id="adminUSername">
                                    <?php 
                                    if (isset($_REQUEST["btnUserManagementUpdate"]) == true)
                                        {
                                        $showMsg=' Provide login and try submitting again.';
                                        $login=$_REQUEST["loginUpdate"];
                                        validatingInput($login,$showMsg); 
                                        }
                                ?>
                                </div>

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="password">
                                        <strong>Password:</strong>
                                    </label>
                                    <input name="passwordUpdate" value='<?=$pwdUp ?>' type="password" class="form-control" placeholder="Enter password" id="password">
                                    
                                    <?php 
                                    if (isset($_REQUEST["btnUserManagementUpdate"]) == true)
                                        {
                                        $showMsg=' Provide passsword and try submitting again.';
                                        $password=$_REQUEST["passwordUpdate"];
                                        validatingInput($password,$showMsg); 
                                        }
                                ?>
                                </div>

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="name">
                                        <strong>Name:</strong>
                                    </label>
                                    <input name="nameUpdate" type="text" value='<?=$nameUp ?>' class="form-control" placeholder="Enter name" id="name">
                                    <?php 
                                    if (isset($_REQUEST["btnUserManagementUpdate"]) == true)
                                        {
                                        $showMsg=' Provide name and try submitting again.';
                                        $name=$_REQUEST["nameUpdate"];
                                        validatingInput($name,$showMsg); 
                                        }
                                ?>
                                </div>

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="Email">
                                        <strong>Email:</strong>
                                    </label>
                                    <input name ="emailUpdate" value='<?=$emailUp ?>' type="email" class="form-control" placeholder="Enter email" id="Email">
                                    <?php 
                                    if (isset($_REQUEST["btnUserManagementUpdate"]) == true)
                                        {
                                        $showMsg=' Provide email and try submitting again.';
                                        $email=$_REQUEST["emailUpdate"];
                                        validatingInput($email,$showMsg); 
                                        }
                                ?>
                                </div>

                                <div class="form-group">
                                    <label id="catchmeUsername" class="col-form-label" for="country">
                                        <strong>Country:</strong>
                                    </label>

                                    <select class="custom-select" id="country">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>

                               <hr>
                               <div class="form-check">
                               <label class="form-check-label">
                                 <input class="form-check-input" name ="isAdminUpdate" type="checkbox" <?= $isAdminUp ?> >
                               <strong>Is Admin</strong>  
                               </label>
                             </div>

                            </div>

                            <div class="card-footer">

                                <button type="reset" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Clear all fields">Clear</button>
                                <button type="submit" name="btnUserManagementUpdate" class="btn btn-primary" style="margin-left:240px;">update</button>
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