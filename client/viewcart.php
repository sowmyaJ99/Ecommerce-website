<?php
session_start();
if(!isset($_SESSION['login']))
{
    echo "Illegal access!<br>Login First!";
    die;
}
if($_SESSION['login']==false)
{
    echo "Login Failed!";
    die;
}
?>
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
        .product
        {
            width:300px;
            height:fit-content;
            border:2px solid grey;
            display:inline-block;
            padding:20px;
            margin:10px;
        }
        .image
        {
            width:100%;
            height:150px;
        }
        .name
        {
            font-family:verdana;
            font-size:24px;
        }
        .action
        {
            display:flex;
            justify-content:center;
        }
        .action-delete
        {
            background-color:tomato;
            padding:5px 8px;
            border-radius:5px;
            border:none;
            cursor:pointer;
        }
    </style>
</head>
<body>
<h2 class="title">eBuy-The place you can trust!</h2>
<div class="d-flex py-3 bg-primary justify-content-around">
            <a href="view.php">
            <button class="text-white btn-primary px-5 py-2">View Products</button> 
           </a>
           <a href="viewcart.php">
            <button class="text-white btn-primary px-5 py-2">View Cart</button> 
           </a>
           <a href="logout.php">
            <button class="text-white btn-primary px-5 py-2">log out</button> 
           </a>
        </div>
<h4> Items in your cart:</h4>
    </body>
    </html>
<?php
include_once "../shared/connection.php";
$uid=$_SESSION['userid'];
$cmd="select * from cart join products on cart.pid=products.pid where client_id=$uid";
$sql_result=mysqli_query($conn,$cmd);
$sum=0;
while($row=mysqli_fetch_assoc($sql_result))
{
    $imgpath=$row['imgpath'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $pid=$row['pid'];
    $cartid=$row['cart_id'];
    echo "
    <div class='product'>
    <div class='name' id='name'>$name</div>
    <div class='price' id='price'>Price=$price Rs</div>
    <img src='$imgpath' class='image'>
    <div class='details' id='details'>$details</div>
    <br>
    <br>
    <div class='action'>
        <a href='deletecart.php?cartid=$cartid'>
        <button class='action-delete'>Remove</button>
        </a>
    </div>
    </div>
    ";
    $sum=$sum+$price;
}
echo "<br>";
echo "<h4>Total=$sum</h4>";
?>
<html>
<head>
<style>
    
</style>
<script>
    </script>
</head>
<body>
    <form action="success.php" method="post">
        <textarea name="address" id="address" placeholder="Enter your address" required></textarea>
<br>
<button class="bg-warning px-5">Place Order</button>
</form>
</html>