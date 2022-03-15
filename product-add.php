<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once('./connect.php');
    
    error_reporting(2);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssform.css">
    <title>Document</title>
</head>
<body>
    <div class="form-tt">
        <form action="product-add.php" method="POST" enctype="multipart/form-data">
            <p>Tên sản phẩm</p>
            <input type="text" name = "nameproduct">
            <p>Danh mục sản phẩm </p>
            <select name="type_product" id="">
                <?php
                $sql = "Select* FROM danhmucthoitrang";
                $result = mysqli_query($conn,$sql);
                if($result == true){
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['id']?>">
                        <?php echo $row['tendanhmuc'] ?>
                        </option>
                        <?php
                    }
                }
                ?>  
            </select>
            <table class="center">
                <tr>
                    <td>
                        <p>Giá của sản phẩm</p>
        
                        <input type="text" name = "price_product">
                    </td>
                    <td>
                        <p>Phần trăm giảm (nếu có)</p>
        
                        <input type="text" name = "persen">
                    </td>
                </tr>
            </table>
            <p>Số lượng sản phẩm </p>
            <input type="text" name = "quanlity">
            <p>Chọn hình ảnh của sản phẩm</p>
            <input type="file" name ="img">
            <p>Nhập từ cho khách hàng tìm kiếm</p>
            <input type="text">    
            <p>Mô tả sản phẩm</p>    
            <textarea name="" id="" cols="30" rows="5"></textarea>
            <br>
            <input type="submit" name = "add"value="Thêm" id = "add">
        </form>
    </div>
</body>
<meta charset="utf-8">
<?php
include ('adddata.php');

?>
</html>