
<?php 
include('sidebar.php');
?>

<style>
<?php include('css/add department.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Edit Course Details</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post">
         <h2>COURSE</h2>
         <?php 
            include 'Connection.php';
            
            $showquery = "SELECT * FROM courses WHERE Course_Id= '" . $_GET['id'] . "'";
            $showdata=mysqli_query($con, $showquery)  or die( mysqli_error($con));
            $arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['submit'])){
               if(!empty($_POST['id'])&& !empty($_POST['name'])){
                  $did= $_POST['did'];
                  $id= $_POST['id'];
                  $name= $_POST['name'];

         
                  $query= "update courses set Dep_Id='$did', Course_Id='$id', Course_Name='$name' where Course_Id='" . $_GET['id'] . "'";
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
                <label>Department:</label>
                <?php
                    $query= "select * from department";
                    $run=mysqli_query($con,$query);
                    $num=mysqli_num_rows($run);
                ?>
                <select class="form-control" name="did" >
                <option value="<?php echo $arrdata["Dep_Id"] ?>"><?php echo $arrdata["Dep_Id"] ?></option>
                
                <?php
                    
                    for($i=1; $i<=$num; $i++){
                       $result=mysqli_fetch_array($run);
                       if($result["Department_Id"]==$arrdata["Dep_Id"]){
                          continue;
                       }
                       else{
                ?>
                <option value="<?php echo $result["Department_Id"] ?>"><?php echo $result["Department_Id"];?></option>
                <?php
                       }
                    }
                ?>
                </select>
            </div>
            
          <div class="form-group">
             <label>Course Id:</label><input type="text" class="form-control" name="id" value="<?php echo $arrdata['Course_Id']; ?>" placeholder="ID" required>
          </div>
          <div class="form-group">
             <label>Course Name:</label><input type="text" class="form-control" name="name" value="<?php echo $arrdata['Course_Name']; ?>" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">SAVE</button>
       </form>
   </div>
</section>
</body>
</html>