<?php
$cartid=$_GET['cartid'];
session_start();
$userid=$_SESSION['userid'];
include_once "../shared/connection.php";
$sql_status=mysqli_query($conn,"delete from cart where client_id=$userid and cart_id=$cartid");
if($sql_status)
{
    echo "product deleted from cart successfully!";
    header('location:viewcart.php');
}  
else
{
    echo "Failed to delete product from cart!";
}
?>