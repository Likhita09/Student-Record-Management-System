<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="imag">
<img src="images/students.png">
</div>

<div class="lin">
<div><h1>Login as</h1></div>
<button class=btn><a href="student/Student Login.php">Student</a></button>
<button class=btn><a href="Admin Login.php">Admin</a></button>
</div>
</body>
<style>


.imag{
    float:left;
    display: flex;
}

img{
	position: fixed;
	height: 100%;
	z-index: -1;
}

.lin{
    float: right;
	display: flex;
	align-items: center;
	text-align: center;
    margin-top: 20%;
    margin-right: 15%;

    
}
h1{
    float: right;
    bottom:0;
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
</html>