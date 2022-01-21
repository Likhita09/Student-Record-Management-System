
<style>
<?php include('\xampp\htdocs\SRMS\css\view department.css'); ?>
</style>

<?php 
            session_start();
            include '\xampp\htdocs\SRMS\Connection.php';
            $user=$_SESSION["AdminLoginId"];
            $query= "select * from marks where std_id='$user'";
            $run=mysqli_query($con,$query);
?>

<div class="main">
        <div class="h"><p class=con><b>Marks</b></p></div>
</div>
<div class="main-div">
    <div class="center-div">
        <div class="table-responsive">
            <table>
            <thead>
                <tr>
                    <th>Subject Id</th>
                    <th>Marks</th>
                </tr>
            </thead>

            <tbody>
           <?php
            while($result=mysqli_fetch_array($run)){
            ?>
                <tr>
                    <td><?php echo $result['s_name']?></td>
                    <td><?php echo $result['mark']?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    <div class="lin">
               <button class=btn><a href="profile.php">Profile</a></button>
               <button class=btn><a href="std Logout.php">Logout</a></button>
            </div>
</div>
<style>
.main{
    background-color: #00B0FF;
    width: 100%;
    height: 100px;
    margin-top: 0;
}

.main .h .con{
    color: snow;
    font-size: 40px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    padding-top: 20px;
}

.lin{
                float: right;
                display: flex;
                align-items: center;
                text-align: center;
                margin-top: 5%;
                margin-right: 2%;
            }

            a{
                display: block;
                color: white;
                text-decoration: none;
            }

            a:hover{
                color:black;
            }

            .btn{
                height: 35px;
                width: 100px;
                margin-left:30px;
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

</body>
</html>