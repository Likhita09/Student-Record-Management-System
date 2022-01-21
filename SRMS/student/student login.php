<?php
  include '\xampp\htdocs\SRMS\Connection.php';
  if(isset($_POST['Login']))
{
	$query="SELECT * FROM `student` WHERE `S_Id`='$_POST[AdminUserId]' AND `Dob`='$_POST[AdminPassword]'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['AdminLoginId']=$_POST['AdminUserId'];
		header("location: profile.php");
	}
	else{
		echo "<script>alert('Incorrect Password');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="/SRMS/css/mycss.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<img class="wave" src="/SRMS/images/wave.jpeg">
	<div class="container">
		<div class="img">
			<img src="/SRMS/images/Student.png">
		</div>
		<div class="login-content" action="">
			<form method="POST">
				<img src="/SRMS/images/Avatar.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" placeholder="Username" name="AdminUserId" required="required">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" placeholder="Password" name=AdminPassword required="required">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" name="Login" value="Login" class="btn">
				</form>
        </div>
    </div>
<body>
</html>