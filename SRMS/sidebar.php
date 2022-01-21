<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
<body>
<body>
    <input type="checkbox" id="check">  
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
      <nav class="sidebar">
         <div class="text">
         SRMS
         </div>
         <ul>
            <li class="active"><a href="dashboard.php"><i class="fas fa-qrcode"></i> Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn"><i class="fas fa-user-graduate"></i> Students
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="add student.php">Add Student</a></li>
                  <li><a href="view student.php">View Student</a></li>
                  <li><a href="manage student.php">Update</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn"><i class="fas fa-university"></i> Department
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="add department.php">Add Department</a></li>
                  <li><a href="view department.php">View Department</a></li>
                  <li><a href="manage department.php">Update Department</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="course-btn"><i class="fas fa-book"></i> Courses
               <span class="fas fa-caret-down third"></span>
               </a>
               <ul class="course-show">
               <li><a href="add course.php">Add Course</a></li>
                  <li><a href="view course.php">View Course</a></li>
                  <li><a href="manage course.php">Update Course</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="sub-btn"><i class="fas fa-book-open"></i> Subjects
               <span class="fas fa-caret-down fourth"></span>
               </a>
               <ul class="sub-show">
                  <li><a href="add subjects.php">Add Subject</a></li>
                  <li><a href="manage subject.php">Update Subject</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="mark-btn"><i class="fas fa-sliders-h"></i> Marks
               <span class="fas fa-caret-down fifth"></span>
               </a>
               <ul class="mark-show">
                  <li><a href="add marks.php">Add Marks</a></li>
                  <li><a href="update marks.php">Update Marks</a></li>
               </ul>
            </li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
         </ul>
      </nav>
      
      <script>
        $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
        });
        $('.feat-btn').click(function(){
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('.course-btn').click(function(){
            $('nav ul .course-show').toggleClass("show2");
            $('nav ul .third').toggleClass("rotate");
        });
        $('.sub-btn').click(function(){
            $('nav ul .sub-show').toggleClass("show3");
            $('nav ul .fourth').toggleClass("rotate");
        });
        $('.mark-btn').click(function(){
            $('nav ul .mark-show').toggleClass("show4");
            $('nav ul .fifth').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
      </script>
      <body>

</html>

