<?php 
include 'Connection.php';
if(isset($_POST['submit'])){
   if(!empty($_POST['subid'])&& !empty($_POST['subname'])){
       $cid= $_POST['id'];
       $sid= $_POST['subid'];
       $sname= $_POST['subname'];
       $d= "select * from courses where Course_Id= '$cid'";
       $run=mysqli_query($con,$d);
       $result=mysqli_fetch_array($run);
       $dep=$result['Dep_Id'];

       $query= "insert into subjects(Dep,C_Id,Subject_Id,Subject_Name) values('$dep','$cid', '$sid', '$sname')";
       $run=mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));
    
    if($run){
        $_SESSION['status']="**Data Added Successfully";
   }
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
        <div class=header><p class=con><b>Add Subject</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post">
         <h2>SUBJECT</h2>
         <?php
         if(isset($_SESSION['status'])){
         ?>
         <p style="color: #006622; margin: 3% 0 5% 28%; font-size: 16px"><?php echo $_SESSION['status'];?></p>
         <?php
            unset($_SESSION['status']);
         }
         ?>
            <div class="form-group">
                <label>Course:</label>
                <?php
                    $query= "select * from courses";
                    $run=mysqli_query($con,$query);
                    $num=mysqli_num_rows($run);
                ?>
                <select class="form-control" name="id">
                <option value=" ">--Select--</option>
                <?php
                    while($result=mysqli_fetch_array($run)){
                ?>
                <option value="<?php echo $result["Course_Id"] ?>"><?php echo $result["Course_Id"] ?></option>
                <?php
                    }
                ?>
                </select>
            </div>
          <div class="form-group">
             <label>Subject Id:</label><input type="text" class="form-control" name="subid" placeholder="Id" required>
          </div>
          <div class="form-group">
             <label>Subject Name:</label><input type="text" class="form-control" name="subname" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">ADD</button>
       </form>
   </div>
</section>
</body>
</html>