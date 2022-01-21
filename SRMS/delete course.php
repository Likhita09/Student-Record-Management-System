<?php

include "Connection.php";

$deletequery = "delete from courses where Course_Id = '" . $_GET['id'] . "' ";
$query = mysqli_query($con, $deletequery);

header('location:manage course.php')

?>