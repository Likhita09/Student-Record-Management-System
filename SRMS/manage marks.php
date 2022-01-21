<?php 
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>


<?php
include 'connection.php';
$query="select * from marks where s_id = '" . $_GET['id'] . "'";
$getdata = mysqli_query($con,$query) or die('Error: ' . mysqli_error($con));

if (isset($_POST['submit'])){
$id = 1;
while($row = mysqli_fetch_assoc($getdata)){
    $birth_no= $row['std_id'];
    $sub= $row['s_id'];
    if(isset($_POST['a'.$id])) {
        $status = $_POST['a'.$id]; 
        if(!empty($status)){
            $query= "update marks set std_id='$birth_no', s_id='$sub', mark='$status' where std_id='$birth_no' and s_id ='" . $_GET['id'] . "'";
            
            if($query_run = mysqli_query($con,$query)){
                echo "<script>window.alert('Data Saved Successfully');</script>";
            }
            else{
                echo "<script>window.alert('Data Not Inserted');</script>";
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
        <div class=header><p class=con><b>Update Marks</b></p></div>
    </div>
    <form action="" method = "POST">  
        <div class="main-div">
            <div class="center-div">
                <div class="table-responsive">
                <table>
                <thead>
                    <tr>
                        <th>SNo</th>
                        <th>Student Id</th>
                        <th>Subject Id</th>
                        <th>Marks</th>
                    </tr>
                </thead>
               <?php
                $id = 1;
                while($row = mysqli_fetch_assoc($getdata)){
                    $birth_no= $row['std_id'];
                    $name = $row['s_id'];
                    $mark = $row['mark'];
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $birth_no ?></td>
                        <td><?php echo $name ?></td>
                        <td>
                            <input type="text" name="a<?php echo $id; ?>" value="<?php echo $mark; ?>">
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
            <input type="submit"  name="submit" class="button" value="SAVE"> 
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