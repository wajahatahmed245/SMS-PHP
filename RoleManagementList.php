
    <?php include_once "RoleManagementDB.php"; ?>
<aside>
                    <table class="table table-hover">

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
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
$sqlDispalyRM="SELECT * FROM roles";
    $result = mysqli_query($conn, $sqlDispalyRM);



for ($i =0;$i< mysqli_num_rows($result);$i++) {  
     $r=mysqli_fetch_assoc($result);
    echo '<tr>';
    echo  '<td scope="row">'.$r["roleId"].'</td>';
    echo     '<td>'.$r["nameR"].'</td>';
    echo        '<td>'.$r["descriptionR"].'</td>';
    echo     '<td>';
    echo '<a href=updateRoleManagement.php?id=' .$r['roleId'].'  >';
    echo       ' <button type="submit" class="btn btn-warning btn-sm">Edit </button>';
    echo '</a>';
    echo     '</td>';
    echo     '<td>';
    echo '<a href=deleteRoleManagement.php?id=' .$r['roleId'].' onclick=" return deleteRecordConformation()" >';
    echo         '<button name="btnDelete" type="submit"  class="btn btn-danger btn-sm">Delete</button>';
    echo '</a>';
    echo     '</td>';
    echo  '</tr>';

   
    //echo "loginid: " . $r["loginU"]. " - pasword: " . $r["passwordU"]." - Usrid: " . $r["roleId"] ."<br>";
     }   
  
?>




                           
                        </tbody>
                        </table>
                </aside>