<?php 
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>

<section>
<div id="maincontent">
        <div class=header><p class=con><b>Courses</b></p></div>
   </div>
<div class="main-div">
    <div class="center-div">
        <div class="table-responsive">
            <table>
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Course Id</th>
                    <th>Course Name</th>
                </tr>
            </thead>

            <tbody>
            <?php 
            include 'Connection.php';
            $query= "select * from courses";
            $run=mysqli_query($con,$query);
            $num=mysqli_num_rows($run);
            while($result=mysqli_fetch_array($run)){
            ?>
                <tr>
                    <td><?php echo $result['Dep_Id']?></td>
                    <td><?php echo $result['Course_Id']?></td>
                    <td><?php echo $result['Course_Name']?></td>
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