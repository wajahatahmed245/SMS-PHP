<?php
session_start();

if(isset($_SESSION["SET1"])==false){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
            <?php include "navbar.php"; ?>   
                <!-- LOGOUT -->

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
       
        <h1 class="admin-home">
            <i class="fa fa-user"></i>Welcome <?= $_SESSION["SET1"]; ?></h1>



            
 <div class="container">

    



<?php include "loginhistory.php" ?>






</div>
    </div>
</body>

</html>