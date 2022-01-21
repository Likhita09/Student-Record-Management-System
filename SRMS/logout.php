<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogOut</title>
</head>
<body>
    <?php
    session_start();
    include 'Connection.php';
    if(session_destroy()){
        header("location: Admin Login.php");
    }
    ?>
</body>
</html>