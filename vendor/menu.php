<?php
include_once "../shared/connection.php";
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
        .action-edit
        {
           background-color:yellow;
           padding:5px 14px;
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
           <a href="vieworder.php">
            <button class="text-white btn-primary px-5 py-2">View Orders</button> 
           </a> 
           <a href="upload.php">
            <button class="text-white btn-primary px-5 py-2">Upload Products</button> 
           </a> 
</div>
<img src="/Project1/img3.jpg" height="350px" width="1150px">
</body>
</html>