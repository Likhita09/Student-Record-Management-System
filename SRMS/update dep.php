
<?php 
include('sidebar.php');
?>

<style>
<?php include('css/add department.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Edit Department details</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post">
         <h2>DEPARTMENT</h2>
         <?php 
            include 'Connection.php';
            
            $showquery = "SELECT * FROM department WHERE Department_Id = '" . $_GET['id'] . "'";
            $showdata=mysqli_query($con, $showquery)  or die( mysqli_error($con));
            $arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['submit'])){
               if(!empty($_POST['id'])&& !empty($_POST['name'])){
                  $id= $_POST['id'];
                  $name= $_POST['name'];

                  //$query= "insert into department (Department_Id,Department_Name) values('$id','$name')";
                  $query= "update department set Department_Id='$id', Department_Name='$name' where Department_Id='" . $_GET['id'] . "'";
                  $run=mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));

                  if($run){
                     echo "<script>window.alert('Data Saved Successfully');</script>";
                  }
               }
               else{
                  echo "All fields required";
               }
            }
         ?>

          <div class="form-group">
             <label>Department Id:</label><input type="text" class="form-control" name="id" value="<?php echo $arrdata['Department_Id']; ?>" placeholder="ID" required>
          </div>
          <div class="form-group">
             <label>Department Name:</label><input type="text" class="form-control" name="name" value="<?php echo $arrdata['Department_Name']; ?>" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">SAVE</button>
       </form>
   </div>
</section>

</body>
</html>