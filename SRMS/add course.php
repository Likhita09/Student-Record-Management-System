<?php 
include 'Connection.php';
if(isset($_POST['submit'])){
   if(!empty($_POST['courseid'])&& !empty($_POST['coursename'])){
       $did= $_POST['id'];
       $cid= $_POST['courseid'];
       $cname= $_POST['coursename'];

       $query= "insert into courses(Course_Id,Dep_Id,Course_Name) values('$cid', '$did', '$cname')";
       $run=mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));
    }
   if($run){
      $_SESSION['status']="**Data Added Successfully";
   }
   else{
      echo "All fields required";
   }
}
?>

<?php 
include('sidebar.php');
?>

<style>
<?php include('css/add department.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Add Course</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post">
         <h2>COURSE</h2>
            <div class="form-group">
                <label>Department:</label>
                <?php
                    $query= "select * from department";
                    $run=mysqli_query($con,$query);
                    $num=mysqli_num_rows($run);
                ?>
                <select class="form-control" name="id">
                <option value=" ">--Select--</option>
                <?php
                    while($result=mysqli_fetch_array($run)){
                ?>
                <option value="<?php echo $result["Department_Id"] ?>"><?php echo $result["Department_Id"] ?></option>
                <?php
                    }
                ?>
                </select>
            </div>
          <div class="form-group">
             <label>Course Id:</label><input type="text" class="form-control" name="courseid" placeholder="Id" required>
          </div>
          <div class="form-group">
             <label>Course Name:</label><input type="text" class="form-control" name="coursename" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">ADD</button>
       </form>
   </div>
</section>
</body>
</html>