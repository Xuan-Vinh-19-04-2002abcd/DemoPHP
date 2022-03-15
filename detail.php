<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        img{ 
            max-width: 600px;
            height: 600px;

        }
        h1{
            color: blue;
        }
        #price{
            color: red;
            font-size: large;
        }
        input{
            outline: 0;
            border: 0;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
include './connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

}
?>
<?php
$sql = "Select* FROM products where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$img = "./img/".$row['image_product'];
echo'
<div class="container">
<img src="'.$img.'" alt="">
<div class="detail">
    <h1>'.$row['name_product'].'</h1>
    <p id ="price"> Giá sản phẩm '.$row['price_product'].' <small>đ</small></p>
    <lable>Số lượng</lable>
    <input type="number" min = 1 max =10>
    <br>
    <br>
    <input type="submit" value="Đặt mua">

    <p>Giao hàng thành công</p>
    <p>Thanh toán khi nhận hàng</p>
    <p>Đổi hàng trong 15 ngày</p>
</div>
</div>';
?> 
