<?php 
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>

<?php
include 'connection.php';
$query="select * from student where cid = '" . $_GET['id'] . "'";
$getdata = mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));

if (isset($_POST['submit'])){
$id = 1;
while($row = mysqli_fetch_assoc($getdata)){
    $stdid= $row['S_Id'];
    $dep= $row['Dep'];
    $cid= $row['Cid'];
    $sub= $_POST['sub'];
    $d= "select * from subjects where Subject_Name= '$sub'";
    $run=mysqli_query($con,$d);
    $result=mysqli_fetch_array($run);
    $su=$result['Subject_Id'];
    
    $s = "SELECT * FROM marks WHERE std_id='$stdid' and s_id='$su'";
    $res_u = mysqli_query($con, $s);
    if (mysqli_num_rows($res_u)>0) {
        echo "<script>window.alert('Marks already entered');</script>"; 	
    }	
    else{
    if(isset($_POST['a'.$id])) {
        $status = $_POST['a'.$id]; 
        if(!empty($status)){
            $query = "INSERT INTO marks(std_id,dep,cid,s_name,s_id,mark) VALUES ('$stdid','$dep','$cid','$sub','$su','$status')";
            if($query_run = mysqli_query($con,$query)){
                echo "<script>window.alert('Data inserted Successfully');</script>";
            }
            else{
                echo "<script>window.alert('Data Not Inserted');</script>";
            }                   
        }
        else{
            echo 'Please enter all fields';
        }
    }
}
    $id ++;
}
}
else {
?>   
<section>
    <div id="maincontent">
        <div class=header><p class=con><b>Add Marks</b></p></div>
    </div>
    <form action="" method = "POST">
        <div class="box">
            <div class="form-group">
                    <?php
                        include 'Connection.php';
                        $query= "select * from subjects where C_Id='" . $_GET['id'] . "'";
                        $run=mysqli_query($con,$query);
                        $num=mysqli_num_rows($run);
                    ?>
                    <select class="formc" name="sub" required>
                    <option value="">--Select--</option>
                    <?php

                        while($result=mysqli_fetch_array($run)){
                    ?>
                    <option value="<?php echo $result["Subject_Name"] ?>"><?php echo $result["Subject_Name"] ?></option>
                    <?php
                        }
                    ?>
                    </select>
            </div>
        </div>
        
        
        <div class="main-div">
            <div class="center-div">
                <div class="table-responsive">
                <table>
                <thead>
                    <tr>
                        <th>SNo</th>
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Marks</th>
                    </tr>
                </thead>
                <?php
                $id = 1;
                while($row = mysqli_fetch_assoc($getdata)){
                    $stdid= $row['S_Id'];
                    $name = $row['Fname'];
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $stdid ?></td>
                        <td><?php echo $name ?></td>
                        <td>
                            <input type="text" name="a<?php echo $id; ?>">
                        </td>
                    </tr>
                </tbody>
                <?php
                    $id ++;
                } 
                ?>
                </table>
                </div>
            </div>
            <input type="submit" name="submit" class="button" value="Submit"> 
        </div>
        
    </form>
    <style>
    .formc{
        margin-top: 80px;
        margin-left: 44%;
        width: 190px;
        height: 50px;
        border-radius:10px;
        justify-content: center;
        align-items: center;
    }
    input{
        height:25px; 
        width:150px; 
        text-align: center;
        font-size:20px;
        
    }
    .button {
        margin-top: 20px;
        margin-bottom: 90px;
        height: 8%;
        width: 10%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #71b7e6, #00B0FF);
        }
                    
    </style>
    <?php    
        } 
    ?>
</section>