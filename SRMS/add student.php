<?php 
include 'Connection.php';

if(isset($_POST['submit'])){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $phno= $_POST['phno'];
        $sid= $_POST['sid'];
        $dob= $_POST['dob'];
        $cid= $_POST['cid'];
        $gender= $_POST['gender'];
        $d= "select * from courses where Course_Id= '$cid'";
        $run=mysqli_query($con,$d);
        $result=mysqli_fetch_array($run);
        $dep=$result['Dep_Id'];
 
        $query= "INSERT INTO `student`(`S_Id`, `Fname`, `Lname`, `Email`, `Phno`, `Dob`, `Dep`, `Cid`, `Gender`) values ('$sid','$fname','$lname','$email','$phno','$dob','$dep','$cid','$gender')";
        $run=mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));

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
<?php include('css/add student.css'); ?>
</style>



<section>
<div id="maincontent">
        <div class=header><p class=con><b>Add Student</b></p></div>
</div>
    <div class="container">
        <div class="title"><b>Student Details</b></div>
        <?php
         if(isset($_SESSION['status'])){
         ?>
         <p style="color: #006622; margin: 3% 0 5% 28%; font-size: 16px"><?php echo $_SESSION['status'];?></p>
         <?php
            unset($_SESSION['status']);
         }
         ?>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="fname" placeholder="Enter First name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" placeholder="Enter last username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phno" placeholder="Enter phone number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Student Id</span>
                        <input type="text" name="sid" placeholder="Enter StudentId" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="text" name="dob" placeholder="yyyy-mm-dd" required>
                    </div>

                    <div class="input-box">
                        <span class="details"><label>Course:</label></span>
                        <?php
                            $query= "select * from courses";
                            $run=mysqli_query($con,$query);
                            $num=mysqli_num_rows($run);
                        ?>
                        <select class="form-control" name="cid" required>
                        <option value="">--Select--</option>
                        <?php
                            while($result=mysqli_fetch_array($run)){
                        ?>
                        <option value="<?php echo $result["Course_Id"] ?>"><?php echo $result["Course_Id"] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="gender-details">
                <span class="gender-title">Gender</span><br>
                <div class="category">
                     <label><input type="radio" name="gender" value="male" required>Male</label>
                     <label><input type="radio" name="gender" value="female">Female</label>
                </div>
            </div>
            <div class="button">
            <input type="submit" name="submit" value="Register">
            </div>
        </form>
        </div>
    </div>
</section>


</body>
</html>
