<?php
include_once "../shared/connection.php";
session_start();
$address=$_POST['address'];
$uid=$_SESSION['userid'];
$cmd="select * from cart where cart.client_id=$uid";
$sql_result=mysqli_query($conn,$cmd);
while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['pid'];
    $cmd="INSERT INTO order_table(client_id,pid,address) values($uid,$pid,'$address')";
    $sql_status=mysqli_query($conn,$cmd);
}
if($sql_status)
{
    echo"Order placed successfully!";
}
else
{
    echo "Order failed to get placed!";
}
$sql_status=mysqli_query($conn,$cmd1="delete from cart where cart.client_id=$uid");
if($sql_status)
{
    
}
?>
<html>
    <head>
</head>
<body>
    <a href="viewcart.php">Go to cart</a>
</body>
    </html>