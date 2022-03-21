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
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssform.css">
</head>
<body>
<form action="adddata.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
            <p>Tên sản phẩm</p>
            <input type="text" name = "nameproduct" value="<?php echo $row['name_product']?>">
            <p>Danh mục sản phẩm </p>
            <select name="type_product" id="">
                <?php
                $sql = "Select* FROM danhmucthoitrang";
                $result = mysqli_query($conn,$sql);
                if($result == true){
                    while ($roww = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $roww['id']?>">
                        <?php echo $roww['tendanhmuc'] ?>
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
        
                        <input type="text" name = "price_product" value="<?php echo $row['price_product']?>">
                    </td>
                    <td>
                        <p>Phần trăm giảm (nếu có)</p>
        
                        <input type="text" name = "persen" value="<?php echo $row['discount_product']?>">
                    </td>
                </tr>
            </table>
            <p>Số lượng sản phẩm </p>
            <input type="text" name = "quanlity" value="<?php echo $row['quanlity_product']?>">
            <p>Chọn hình ảnh của sản phẩm</p>
            <input type="file" name ="img" value="<?php echo $img?>">
            <p>Nhập từ cho khách hàng tìm kiếm</p>
            <input type="text">    
            <p>Mô tả sản phẩm</p>    
            <textarea name="" id="" cols="30" rows="5"></textarea>
            <br>
            <input type="submit" name = "edit"value="Sửa">
</form>

</body>
</html>