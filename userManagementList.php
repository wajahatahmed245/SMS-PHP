<?php include_once "userManagementDB.php"; ?>
<aside>


    <table class="table table-hover">

        <thead>
        
        <tr>
       
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        
        </tr>
       
        </thead>

    <tbody>

<script>

    function deleteRecordConformation(){
        return confirm("you want to delete this record ?");
            
    }

</script>


<?php
$sqlDispaly="SELECT * FROM users";
    $result = mysqli_query($conn, $sqlDispaly);



for ($i =0;$i< mysqli_num_rows($result);$i++) {  
     $r=mysqli_fetch_assoc($result);
    echo '<tr>';
    echo  '<td scope="row">'.$r["userid"].'</td>';
    echo     '<td>'.$r["nameU"].'</td>';
    echo        '<td>'.$r["email"].'</td>';
    echo     '<td>';
    echo '<a href=updateUserManagement.php?id=' .$r['userid'].'  >';
    echo       ' <button type="submit" class="btn btn-warning btn-sm">Edit </button>';
    echo '</a>';
    echo     '</td>';
    echo     '<td>';
    echo '<a href=deleteUserMAnagement.php?id=' .$r['userid'].' onclick=" return deleteRecordConformation()" >';
    echo         '<button name="btnDelete" type="submit"  class="btn btn-danger btn-sm">Delete</button>';
    echo '</a>';
    echo     '</td>';
    echo  '</tr>';

   
    //echo "loginid: " . $r["loginU"]. " - pasword: " . $r["passwordU"]." - Usrid: " . $r["userid"] ."<br>";
     }   

?>
    </tbody>
    
    </table>

</aside>