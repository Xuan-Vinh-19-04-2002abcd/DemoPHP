<?php
include('./connect.php');
session_start();
$cart = $_SESSION['cart'];
?>
<style>
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
table{
    border-collapse:collapse;
}
td{
    width: 200px;
}
#quanlity{
    max-width: 100px;
    outline: 0;
    border: 2px solid black;
}
button:hover{
    background-color: red;
}
#delete{
    margin-top: 10px;
}
</style>
<div>
    <table  class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Img</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Update</td>
        <td>Delete</td>
        <td>Thành tiền</td>
    </tr>
    <?php $Total = 0; $stt =1 ?>
    <?php foreach($cart as $key => $value):?>
        <?php $Total+= $value['price']*$value['quanlity'] ?>
        <tr>
            <td><?php echo  $stt ++?></td>
            <td><?php echo $value['name']?></td>
            <td><img src="./img/<?php echo $value['img']?>" alt=""></td>
            <td><?php echo $value['price']?></td>
            <form action="./cart.php" method="GET">
            <td>
                <input type = "hidden" name ="action" value="update">
                <input type = "hidden" name ="id" value="<?php echo $value['id']?>">
                <input type="number" id ="quanlity" name = "quanlity"value="<?php echo $value['quanlity']?>">
            </td>
            <td><button type="submit">Update</button></td> 
            </form>   
            <td>
                <form action="./cart.php" method="GET">
                    <input type = "hidden" name ="action" value="delete">
                    <input type = "hidden" name ="id" value="<?php echo $value['id']?>">
                    <button type="submit" id ="delete">Delete</button>
                </form>
            </td>  
            <td><?php echo $value['price']*$value['quanlity']?></td> 
        </tr>
    
    <?php endforeach ?>

        <tr>
            <td colspan="7">Tổng Tiền</td>
            <td><?php echo  $Total?></td>
        </tr>
    </table>
</div>