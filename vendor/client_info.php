<?php
include_once "../shared/connection.php";
session_start();
$var2=$_GET['client_id'];
$cmd="select * from client where userid=$var2";
$sql_result=mysqli_query($conn,$cmd);
print_r(mysqli_fetch_assoc($sql_result));
?>
<html>
<head>
<style>
</style>
</head>
<body>
    <a href="vieworder.php">Go Back</a>
</body>
</html>