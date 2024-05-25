<?php
session_start();
$uid=$_SESSION['userid'];
$uname=$_SESSION['username'];
$id=$_GET['pid'];
include_once "../shared/connection.php";
$sql_result=mysqli_query($conn,"select * from cart where client_id=$uid and pid=$id");
$total_rows=mysqli_num_rows($sql_result);
if($total_rows>0)
{
    echo "Product already added to cart!";
    die;
}
$cmd="insert into cart(client_id,username,pid) values($uid,'$uname',$id)";
$sql_status=mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "Added to cart successfully!";
    header('location:view.php');
}
else
{
    echo "Failed to add to cart!";
}
?>