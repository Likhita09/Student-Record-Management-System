
<?php 
include('sidebar.php');
?>

<style>
<?php include('css/add student.css'); ?>
</style>

<section>
<div id="maincontent">
        <div class=header><p class=con><b>Edit Student Details</b></p></div>
</div>
    <div class="container">
        <div class="title"><b>Student Details</b></div>
        <div class="content">
            <form action="" method="POST">
         <?php 
            include 'Connection.php';
            $showquery = "SELECT * FROM student WHERE S_Id= '" . $_GET['id'] . "'";
            $showdata=mysqli_query($con, $showquery)  or die( mysqli_error($con));
            $arrdata = mysqli_fetch_array($showdata);

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
            
                    $query= "update `student` set `S_Id`='$sid', `Fname`='$fname', `Lname`='$lname', `Email`='$email', `Phno`='$phno', `Dob`='$dob', `Dep`='$dep', `Cid`='$cid', `Gender`='$gender' where S_Id ='" . $_GET['id'] . "'";
                    $run=mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));

                    if($run){
                        echo "<script>window.alert('Data Added Successfully');</script>";
                    }
                else{
                echo "All fields required";
                }
            }
            ?>

               <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="fname" value="<?php echo $arrdata['Fname']; ?>" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" value="<?php echo $arrdata['Lname']; ?>" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" value="<?php echo $arrdata['Email']; ?>" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phno" value="<?php echo $arrdata['Phno']; ?>" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Student Id</span>
                        <input type="text" name="sid" value="<?php echo $arrdata['S_Id']; ?>" placeholder="Enter StudentId" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="text" name="dob" value="<?php echo $arrdata['Dob']; ?>" placeholder="Enter DOB" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Department</span>
                        <input type="text" name="depart" value="<?php echo $arrdata['Dep']; ?>" placeholder="Enter DOB" disabled>
                    </div>

            <div class="input-box">
                        <span class="details"><label>Course:</label></span>
                        <?php
                            $query= "select * from courses";
                            $run=mysqli_query($con,$query);
                            $num=mysqli_num_rows($run);
                        ?>
                        <select class="form-control" name="cid">
                        <option value="<?php echo $arrdata["Cid"] ?>"><?php echo $arrdata["Cid"] ?></option>
                        <?php
                    
                            for($i=1; $i<=$num; $i++){
                            $result=mysqli_fetch_array($run);
                            if($result["Course_Id"]==$arrdata["Cid"]){
                                continue;
                            }
                            else{
                        ?>
                        <option value="<?php echo $result["Course_Id"] ?>"><?php echo $result["Course_Id"] ?></option>
                        <?php
                             }
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <label>
   
            <div class="gender-details">
            <input type="radio" name="gender" value="male" id="dot-1" required="required" />
            <input type="radio" name="gender" value="female" id="dot-2" required="required" />
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span>Male</span>
            </label>
            <label for="dot-2">
                <span class="dot two"></span>
                <span>Female</span>
            </label>
            </div>
            </div>
            <div class="button">
            <input type="submit" name="submit" value="Submit">
            </div>
       </form>
       </div>
   </div>
</section>
</body>
</html>