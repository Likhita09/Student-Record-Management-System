<?php 
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>

<section>
<div id="maincontent">
        <div class=header><p class=con><b>Department</b></p></div>
   </div>
<div class="main-div">
    <div class="center-div">
        <div class="table-responsive">
            <table>
            <thead>
                <tr>
                    <th>Department Id</th>
                    <th>Department Name</th>
                </tr>
            </thead>

            <tbody>
            <?php 
            include 'Connection.php';
            $query= "select * from department";
            $run=mysqli_query($con,$query);
            $num=mysqli_num_rows($run);
            while($result=mysqli_fetch_array($run)){
            ?>
                <tr>
                    <td><?php echo $result['Department_Id']?></td>
                    <td><?php echo $result['Department_Name']?></td>
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