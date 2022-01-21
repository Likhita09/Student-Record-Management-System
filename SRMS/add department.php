

<?php 
include 'Connection.php';
if(isset($_POST['submit'])){
   if(!empty($_POST['id'])&& !empty($_POST['name'])){
       $id= $_POST['id'];
       $name= $_POST['name'];

       $query= "insert into department(Department_Id,Department_Name) values('$id','$name')";
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
        <div class=header><p class=con><b>Add Department</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post" onclick="return myfunction()">
         <h2>DEPARTMENT</h2>
         <?php
         if(isset($_SESSION['status'])){
         ?>
         <p style="color: #006622; margin: 3% 0 5% 28%; font-size: 16px"><?php echo $_SESSION['status'];?></p>
         <?php
            unset($_SESSION['status']);
         }
         ?>
          <div class="form-group">
             <label>Department Id:</label><input type="text" class="form-control" name="id" placeholder="ID" required>
          </div>
          <div class="form-group">
             <label>Department Name:</label><input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">ADD</button>
       </form>
   </div>
</section>

</body>
</html>