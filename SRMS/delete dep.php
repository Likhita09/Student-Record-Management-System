<?php

include "Connection.php";

$deletequery = "delete from department where Department_Id = '" . $_GET['id'] . "' ";
$query = mysqli_query($con, $deletequery);


header('location:manage department.php')

?>