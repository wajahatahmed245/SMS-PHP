
<?php include_once "UserRolemanagementDB.php"; ?>

<aside>
                    <table class="table table-hover">

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Role</th>
                                
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
$sqlDispalyRPM="SELECT rp.*, r.nameR role_name, p.nameU perm_name " . 
"FROM user_role rp " . 
"INNER JOIN roles r ON r.roleId = rp.roleid ". 
"INNER JOIN users p ON p.userid = rp.userid; ";

$result = mysqli_query($conn, $sqlDispalyRPM);


for ($i =0;$i< mysqli_num_rows($result);$i++) {  

    $r=mysqli_fetch_assoc($result);
   

    echo '<tr>';
    echo  '<td scope="row">'.$r["userroleId"].'</td>';
    echo     '<td>'.$r["perm_name"].'</td>';
    echo     '<td>'.$r["role_name"].'</td>';
    echo     '<td>';
    echo '<a href=updateRolePermissionManagement.php?id=' .$r['userroleId'].'  >';
    echo       ' <button type="submit" class="btn btn-warning btn-sm">Edit </button>';
    echo '</a>';
    echo     '</td>';
    echo     '<td>';
    echo '<a href=deleteRolePermissionManagement.php?id=' .$r['userroleId'].' onclick=" return deleteRecordConformation()" >';
    echo         '<button name="btnDelete" type="submit"  class="btn btn-danger btn-sm">Delete</button>';
    echo '</a>';
    echo     '</td>';
    echo  '</tr>';

   
    //echo "loginid: " . $r["loginU"]. " - pasword: " . $r["passwordU"]." - Usrid: " . $r["permissionId"] ."<br>";
     }
       
     


     ?>
                        </tbody>
</table>
                </aside>