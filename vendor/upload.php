<html>
<head>
    <title>
        Welcome to eBuy
</title>
<style>
    .title
            {
                display: flex;
                justify-content: center;
                background-color: blueviolet;
                color: white;
                height: 90px;
                padding-top:30px;
            }
            input
            {
                display: block;
                margin: 10px;
            }
    </style>
</head>
<body>
<img src="/images/img2.jpeg" height='120px' width='90px' align='right'>
<h1 class="title">Welcome to eBuy!!</h1>
</body>
</html>
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
$username=$_SESSION['username'];
echo "<h1>Welcome $username</h1>";
?>
<html>
<head>
<style>
</style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh=100">
    Please provide the information of your product to be uploaded..    
    <form action="upload_pdt.php" method="post" enctype="multipart/form-data">
        <img src="/images/upload.jpg" align="right" height="350px">
           <input type="text" name="name" id="name" placeholder="Product Name">
           <input type="text" name="price" id="price" placeholder="Product Price">
           <textarea name="details" id="details" cols="30" rows="10" placeholder="Product Description"></textarea>
           <input type="file" name="pdt_image" id="pdt_image" accept="*.jpg">
           <input type="submit">
    </form>
</div>
</body>
</html>