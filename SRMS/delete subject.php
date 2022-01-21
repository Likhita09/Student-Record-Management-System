
<?php

include "Connection.php";

$deletequery = "delete from subjects where Subject_Id = '" . $_GET['id'] . "' ";
$query = mysqli_query($con, $deletequery);

header('location:manage subject.php')

?>