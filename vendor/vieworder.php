<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .title
            {
                display: flex;
                justify-content: center;
                background-color: blueviolet;
                color: white;
                height: 100px;
                padding-top:30px;
            }
    .heading
    {
        display:flex;
        justify-content:space-around;
        
    }
    button
    {
        border:none;
        background-color:white;
        color:brown;
    }
</style>
<body>
<h2 class="title">eBuy-The place you can trust!</h2>
    <div class="heading">
    <button><h2>Order_id</h2></button>
    <button><h2>client_id</h2></button>
    <button><h2>Product_id</h2></button>
    <button><h2>Order_Date</h2></button>
    </div>
    <hr>
    <br>
</body>
</head>
    </html>
<?php
include_once "../shared/connection.php";
session_start();
$cmd="select * from order_table";
$sql_result=mysqli_query($conn,$cmd);
while($row=mysqli_fetch_assoc($sql_result))
{
    $var1=$row['orderid'];
    $var2=$row['client_id'];
    $var3=$row['pid'];
    $var4=$row['ordered_time'];
    
    echo"
    <div class='heading'>
    <button><h4>$var1</h4></button>
    <a href='client_info.php?client_id=$var2'>
    <button><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$var2</h4></button>
    </a>
    <button><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$var3</h4></button>
    <button><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$var4</h4></button>
    </div>";
    echo"<hr>";
}
?>
