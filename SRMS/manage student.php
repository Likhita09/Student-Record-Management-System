<?php 
include('sidebar.php');
?>

<style>
<?php include('css/update dep.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Manage Students</b></p></div>
   </div>
    <div class="card-body">
        <div class="box">
            <form action="" method="POST">
                <input type="text" name="getid" placeholder="Search by Student Id">
                <input type="submit" name="searchbyid" value="search">
            </form>
        </div>
    
        <?php
            include 'Connection.php';
                if(isset($_POST['searchbyid'])){
                    $sid=$_POST['getid'];
                    $query="SELECT * FROM student where S_Id='$sid' ";
                    $run=mysqli_query($con, $query);
        ?>

        <div class="main-div">
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Department</th>
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
                                            <td><?php echo $result['S_Id']; ?></td>
                                            <td><?php echo $result['Fname']; ?></td>
                                            <td><?php echo $result['Dep']; ?></td>
                                            <td><a href="update student.php?id=<?php echo $result['S_Id']; ?>"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="delete student.php?id=<?php echo $result['S_Id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
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