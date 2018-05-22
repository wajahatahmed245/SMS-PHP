<?php
session_start();

$navbar='';
$loginhistory='';

function proccesingIdenty($userNAme, $password){
    $pwd=$_REQUEST["password"];
    
$msg="password or username , try submitting again.";

    if (isset($_REQUEST["signInSubmit"]) == true){
        include 'databaseConnection.php' ; 
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        
            $isWrong=0;
            for ($i =0;$i< mysqli_num_rows($result);$i++) {   
                $r=mysqli_fetch_assoc($result);
              //echo "loginid: " . $r["loginU"]. " - pasword: " . $r["passwordU"]." - Usrid: " . $r["userid"] ."<br>";
                if ($userNAme == $r["loginU"] && $pwd==$r["passwordU"]){
                    header("location:Home.php");
                    $_SESSION["SET1"]=$r["loginU"];
                    $_SESSION["SETID"]=$r["userid"];
                    if ($r["isadmin"] == 1) {
                        $_SESSION["navbar"]='navbar.php';
                        $_SESSION["loginhistory"]='loginhistory.php';
                    }
                    // echo "session = " . $_SESSION["SETID"]; 
                     //echo "<br>";
                     //echo "session set = " . $_SESSION["SET1"]; 
                  
                    }   

                elseif(!($userNAme == '') && !($pwd == '') && $userNAme != $r["loginU"] && $pwd != $r["passwordU"] ) {
                    $isWrong=1;
                   
                } 
            }
        
            if ( $isWrong==1){
                echo '<div class="alert alert-dismissible alert-danger">';
                // echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                echo '<strong>WRONG!</strong>' . $msg .'<a href="login.php" class="alert-link"></a>';
                echo '</div>';

        }
    }
}

}
                                                ?>