<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
    <?php
    session_start();
    include 'Connection.php';
    if(session_destroy()){
        header("location: student login.php");
    }
    ?>
</body>
</html>