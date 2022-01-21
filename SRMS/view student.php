<?php 
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>

<section>
<div id="maincontent">
        <div class=header><p class=con><b>Student Details</b></p></div>
   </div>
<div class="main-div">
    <div class="center-div">
        <div class="table-responsive">
            <table>
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Phone No</th>
                </tr>
            </thead>

            <tbody>
            <?php 
            include 'Connection.php';
            $query= "select * from student";
            $run=mysqli_query($con,$query);
            $num=mysqli_num_rows($run);
            while($result=mysqli_fetch_array($run)){
            ?>
                <tr>
                    <td><?php echo $result['S_Id']?></td>
                    <td><?php echo $result['Fname']?></td>
                    <td><?php echo $result['Cid']?></td>
                    <td><?php echo $result['Email']?></td>
                    <td><?php echo $result['Phno']?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</body>
</html>