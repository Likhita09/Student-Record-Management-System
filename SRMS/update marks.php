<?php 
include 'Connection.php';
?>

<?php 
include('sidebar.php');
?>

<style>
<?php include('css/add marks.css'); ?>
</style>


<section>
<div id="maincontent">
        <div class=header><p class=con><b>Update Marks</b></p></div>
   </div>
            
    <div class="card-body">
        <div class="box">
            <form action="" method="POST">
            <div class="form-group">
                <?php
                    $query= "select * from courses";
                    $run=mysqli_query($con,$query);
                    $num=mysqli_num_rows($run);
                ?>
                <select class="form-control" name="getid">
                <option value=" ">--Select--</option>
                <?php
                    while($result=mysqli_fetch_array($run)){
                ?>
                <option value="<?php echo $result["Course_Id"] ?>"><?php echo $result["Course_Name"] ?></option>
                <?php
                    }
                ?>
                </select>
            </div>
                <input type="submit" name="searchbyid" value="search">
            </form>
        </div>
    <?php
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
                                <th>Subject Id</th>
                                <th>Subject Name</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                                    
                        <tbody>
                            <?php 
                                if(mysqli_num_rows($run) > 0){
                                    while($result=mysqli_fetch_array($run)){
                            ?>
                                        <tr>
                                            <td><?php echo $result['Subject_Id']; ?></td>
                                            <td><?php echo $result['Subject_Name']; ?></td>
                                            <td><a href="manage marks.php?id=<?php echo $result['Subject_Id']; ?>"><i class="fas fa-edit"></i></a></td>
                                        </tr>
                                        <?php 
                                            }
                                            }
                                            else{
                                        ?>
                                        <tr>
                                            <td colspan=2>No Data Found</td>
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
     
</section>
</body>
</html>