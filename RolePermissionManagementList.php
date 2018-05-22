<?php include_once "RolePermissionManagementListDB.php"; ?>
<aside>
                    <table class="table table-hover">

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Permission</th>
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
$sqlDispalyRPM="SELECT rp.*, r.nameR role_name, p.nameP perm_name " . 
"FROM role_permission rp " . 
"INNER JOIN roles r ON r.roleId = rp.roleid ". 
"INNER JOIN permissions p ON p.permissionId = rp.permissionid; ";

$result = mysqli_query($conn, $sqlDispalyRPM);


for ($i =0;$i< mysqli_num_rows($result);$i++) {  

    $r=mysqli_fetch_assoc($result);
   

    echo '<tr>';
    echo  '<td scope="row">'.$r["RolePermissionId"].'</td>';
    echo     '<td>'.$r["perm_name"].'</td>';
    echo     '<td>'.$r["role_name"].'</td>';
    echo     '<td>';
    echo '<a href=updateRolePermissionManagement.php?id=' .$r['RolePermissionId'].'  >';
    echo       ' <button type="submit" class="btn btn-warning btn-sm">Edit </button>';
    echo '</a>';
    echo     '</td>';
    echo     '<td>';
    echo '<a href=deleteRolePermissionManagement.php?id=' .$r['RolePermissionId'].' onclick=" return deleteRecordConformation()" >';
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