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
    <title>User Role Management</title>
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
                    <a class="nav-link " data-toggle="tab" href="userManagement.php"> User Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="RoleManagement.php">Role Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="PermissionManagement.php">Permission Management</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="tab" href="RolePermissionManagement.php">Role Permission Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="UserRolemanagement.php"><i class="fa fa-street-view"> </i>User Role Management</a>
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
                        <i class="fa fa-street-view"> </i> User Role Management </div>

                        <form action="userManagement.php">

                            <div id="header" class="card-body">

                            <div class="form-group">
                                    <label id="catchmeUsername" class="col-form-label" for="Role">
                                        <strong>Role:</strong>
                                    </label>

                                    <select name="roleURM" class="custom-select" id="Role" required>
                                        <option  value= "" selected="">Open this select menu</option>
                                       <?php include "roleData.php"; ?>
                                    </select>
                                </div>                                

                                <div class="form-group">
                                    <label id="catchmeUsername" class="col-form-label" for="User">
                                        <strong>User:</strong>
                                    </label>

                                    <select name="userURM" class="custom-select" id="User" required>
                                        <option value = "" selected="">Open this select menu</option>
                                        <?php include "userData.php"; ?>
                                        
                                    </select>
                                </div>

                            </div>

                            <div class="card-footer">

                                <button type="reset" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Clear all fields">Clear</button>
                                <button type="submit" name="btnUserRoleManagement" class="btn btn-primary" style="margin-left:260px;">save</button>
                            </div>

                        </form>

                    </div>

            </div>
            </section>



            <div class="col-8">
               <?php include 'UserRolemanagementList.php'; ?>
            </div>





        </div>
    </div>
</body>

</html>