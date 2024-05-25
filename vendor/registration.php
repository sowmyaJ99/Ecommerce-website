<?php
include_once '../shared/connection.php';
$uname=$_POST['username'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$phno=$_POST['phno'];
$address=$_POST['address'];

$sql_result=mysqli_query($conn,"select * from user where username='$uname'");
$total_rows=mysqli_num_rows($sql_result);
if($total_rows>0)
{
    echo "<h3>Username already taken.Please try a different username!</h3>";
    die;
}
$cmd="insert into user(username,password,phno,address) values('$uname','$pass1',$phno,'$address')";
$query_status=mysqli_query($conn,$cmd);
if($query_status)
{
    echo "<h2>Thank you for registering with eBuy!</h2> "; 
    echo "<a href='login.html'>Login here</a>";
}
else
{
    echo "Sorry! Your registration failed!";
}
?>