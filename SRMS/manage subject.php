<?php 
include('sidebar.php');
?>

<style>
<?php include('css/update dep.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Manage Subjects</b></p></div>
   </div>
    <div class="card-body">
        <div class="box">
            <form action="" method="POST">
                <input type="text" name="getid" placeholder="Search by Course Id">
                <input type="submit" name="searchbyid" value="search">
            </form>
        </div>
    
        <?php
            include 'Connection.php';
                if(isset($_POST['searchbyid'])){
                    $id=$_POST['getid'];
                    $query="SELECT * FROM subjects where C_Id='$id' ";
                    $run=mysqli_query($con, $query);
        ?>

        <div class="main-div">
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Subject Id</th>
                                <th>Subject Name</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                                    
                        <tbody>
                            <?php 
                                if(mysqli_num_rows($run) > 0){
                                    while($result=mysqli_fetch_array($run)){
                            ?>
                                        <tr>
                                            <td><?php echo $result['C_Id']; ?></td>
                                            <td><?php echo $result['Subject_Id']; ?></td>
                                            <td><?php echo $result['Subject_Name']; ?></td>
                                            <td><a href="update subject.php?id=<?php echo $result['Subject_Id']; ?>"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="delete subject.php?id=<?php echo $result['Subject_Id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <?php 
                                            }
                                            }
                                            else{
                                        ?>
                                        <tr>
                                            <td colspan=3>No Data Found</td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
            }       
        ?>
    </div>
</section>
</body>
</html>