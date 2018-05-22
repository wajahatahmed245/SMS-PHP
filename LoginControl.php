<?php 

function validatingInput($inputValue,$msg){
    if ( $inputValue =="") { 
        echo '<div class="alert alert-dismissible alert-danger">';
        // echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo '<strong>EMPTY!</strong>' . $msg .'<a href="login.php" class="alert-link"></a>';
        echo '</div>';
    }
}










?>