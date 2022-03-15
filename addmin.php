<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     require_once('./connect.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>Số thứ tự</th>
            <th>Tên sản phẩm</th>
            <th>Mã danh muc</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Giảm giá</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
            $sql = "Select* FROM products";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while ($row = mysqli_fetch_assoc($result)){
                        $img = "./img/".$row['image_product'];
                        ?>
                        <tr> 
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name_product']?></td>
                            <td><?php echo $row['type_product']?></td>
                            <td class = "img-fuild  "><img src="<?php echo $img ?>" alt=""></td>
                            <td><?php echo $row['price_product']?></td>
                            <td><?php echo $row['quanlity_product']?></td>
                            <td><?php echo $row['discount_product']?></td>
                            <td><a href="./product-edit.php?id=<?php echo $row['id']?>">Chỉnh sửa</a></td>
                            <td><a href="./adddata.php?idProducts=<?php echo $row['id']?>">Xóa</a></td>
                            
                        </tr>
                        <?php
                    }
                }
            ?>
    </table>
</body>
</html>