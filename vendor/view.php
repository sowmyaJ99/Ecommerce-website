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
            justify-content:space-between;
        }
        .action-edit
        {
           background-color:yellow;
           padding:5px 14px;
           border-radius:5px;
           border:none;
           cursor:pointer;
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
    </body>
    </html>
<?php
include_once "../shared/connection.php";
$cmd="select * from products";
$sql_result=mysqli_query($conn,$cmd);
while($row=mysqli_fetch_assoc($sql_result))
{
    $imgpath=$row['imgpath'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $pid=$row['pid'];
    echo "
    <div class='product'>
    <div class='name' id='name'>$name</div>
    <div class='price' id='price'>Price=$price Rs</div>
    <img src='$imgpath' class='image'>
    <div class='details' id='details'>$details</div>
    <br>
    <br>
    <div class='action'>
        <button class='action-edit'>Edit</button>
        <a href='delete_product.php?pid=$pid'>
        <button class='action-delete'>Delete</button>
        </a>
    </div>
    </div>
    ";
}
?>