<?php

include "Connection.php";

$deletequery = "delete from student where S_Id = '" . $_GET['id'] . "' ";
$query = mysqli_query($con, $deletequery);


header('location:manage student.php')

?>