<?php include_once "PermissionManagementDB.php"; ?>
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
$sqlDispalyPM="SELECT * FROM permissions";
    $result = mysqli_query($conn, $sqlDispalyPM);



for ($i =0;$i< mysqli_num_rows($result);$i++) {  
     $r=mysqli_fetch_assoc($result);
    echo '<tr>';
    echo  '<td scope="row">'.$r["permissionId"].'</td>';
    echo     '<td>'.$r["nameP"].'</td>';
    echo        '<td>'.$r["descriptionP"].'</td>';
    echo     '<td>';
    echo '<a href=updatePermissionManagement.php?id=' .$r['permissionId'].'  >';
    echo       ' <button type="submit" class="btn btn-warning btn-sm">Edit </button>';
    echo '</a>';
    echo     '</td>';
    echo     '<td>';
    echo '<a href=deletePermissionManagement.php?id=' .$r['permissionId'].' onclick=" return deleteRecordConformation()" >';
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