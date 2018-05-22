
<?php include 'LoginControl.php' ; ?>
<?php include 'LoginVerfication.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-kpxyUW5uLgBOlhLqm8Hga/aWgf7FgZWLhphVqsMgaW0s+G6KF1RZpUb6ygQL3WUE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="main.css">
    <title>SIGN IN</title>
</head>

<body>


    <header>

        <div class="container">
            <h3 class="display-1"><i class="fa fa-shield"> </i>SECURITY MANAGEMENT SYSTEM</h3>
            <hr>
            <div class="row">
                <!-- Sign In-->
                <div class="col-6" id="signin" style="margin-left:305px; ">

                    <div class="card border-#868e96 mb-3" style="max-width: 30rem; ">

                       
                    <div class="card-header" style="font-size:24px;color:#2FA4E7;"> <i class="fa fa-sign-in"> </i> Sign in </div>

                        <form action="login.php" method = "POST">

                            <div id="header" class="card-body">

                                <div class="form-group" id="parent">
                                    <label id="catchmeUsername" class="col-form-label" for="userName"><strong>Username:</strong></label>
                                    <input name="userName" type="text" class="form-control" placeholder="Enter username" id="userName" ">
                                <?php 
                                    if (isset($_REQUEST["signInSubmit"]) == true)
                                        {
                                        $showMsg=' Provide username and try submitting again.';
                                        $userName=$_REQUEST["userName"];
                                        validatingInput($userName,$showMsg); 
                                        }
                                ?>
                                    
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="password"><strong>Password:</strong></label>
                                    <input name = "password" type="password" class="form-control" placeholder="Enter password" id="password">
                                    <?php 
                                    if (isset($_REQUEST["signInSubmit"]) == true)
                                        {
                                        $showMsg=' Provide password and try submitting again.';
                                        $password=$_REQUEST["password"];
                                        validatingInput($password,$showMsg); 
                                        }
                                ?>
                                </div>
                                
                                
                               <?php
                               if (isset($_REQUEST["signInSubmit"]) == true){
                                $userNAme = $_REQUEST["userName"];
                                 $password = $_REQUEST["password"];

                                 proccesingIdenty($userNAme,$password);
                                }

                                    ?>

                            </div>

                            <div class="card-footer">

                                <button type="submit" name="signInSubmit" class="btn btn-primary">Login</button>
                              
                            </div>

                        </form>

                    </div>

                </div>




            </div>
        </div>

    </header>
</body>

</html>