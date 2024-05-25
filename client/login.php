<?php
include_once "../shared/connection.php";
session_start();
$_SESSION['login']=false;
$uname=$_POST['username'];
$pass1=$_POST['pass1'];
$sql_result=mysqli_query($conn,"select * from client where username='$uname' and password='$pass1'");
$total_rows=mysqli_num_rows($sql_result);
if($total_rows==0)
{
    echo "<h3>User not found <br>Please register first!</h3>";
    die;
}
$rows=mysqli_fetch_assoc($sql_result);
    $_SESSION['login']=true;
    $_SESSION['username']=$rows['username'];
    $_SESSION['userid']=$rows['userid'];
    header('location:menu.html');
?>