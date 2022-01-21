
<?php 
include('sidebar.php');
?>

<style>
<?php include('css/add department.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Edit Subject Details</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post">
         <h2>SUBJECTS</h2>
         <?php 
            include 'Connection.php';
            
            $showquery = "SELECT * FROM subjects WHERE Subject_Id= '" . $_GET['id'] . "'";
            $showdata=mysqli_query($con, $showquery)  or die( mysqli_error($con));
            $arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['submit'])){
               if(!empty($_POST['id'])&& !empty($_POST['name'])){
                  $did= $_POST['did'];
                  $id= $_POST['id'];
                  $name= $_POST['name'];

                  //$query= "insert into department (Department_Id,Department_Name) values('$id','$name')";
                  $query= "update subjects set C_Id='$did', Subject_Id='$id', Subject_Name='$name' where Subject_Id ='" . $_GET['id'] . "'";
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
                    $query= "select * from courses";
                    $run=mysqli_query($con,$query);
                    $num=mysqli_num_rows($run);
                ?>
                <select class="form-control" name="did" >
                <option value="<?php echo $arrdata["C_Id"] ?>"><?php echo $arrdata["C_Id"] ?></option>
                
                <?php
                    
                    for($i=1; $i<=$num; $i++){
                       $result=mysqli_fetch_array($run);
                       if($result["Course_Id"]==$arrdata["C_Id"]){
                          continue;
                       }
                       else{
                ?>
                <option value="<?php echo $result["Course_Id"] ?>"><?php echo $result["Course_Id"];?></option>
                <?php
                       }
                    }
                ?>
                </select>
            </div>
            
            
          <div class="form-group">
             <label>Subject Id:</label><input type="text" class="form-control" name="id" value="<?php echo $arrdata['Subject_Id']; ?>" placeholder="ID" required>
          </div>
          <div class="form-group">
             <label>Subject Name:</label><input type="text" class="form-control" name="name" value="<?php echo $arrdata['Subject_Name']; ?>" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">SAVE</button>
       </form>
   </div>
</section>
</body>
</html>