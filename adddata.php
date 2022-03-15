<?php
require_once('./connect.php');
if(isset($_POST['add'])){
    if(!empty($_POST['nameproduct'])&&!empty($_POST['type_product'])&&!empty($_POST['price_product'])&& !empty($_POST['persen'])&& !empty($_POST['quanlity'])){
        $filename = $_FILES["img"]["name"];
        // $tempname = $_FILES["img"]["tmp_name"];    
        // $folder = "image/".$filename;
        $nameproduct = $_POST['nameproduct'];
        $typeproduct = $_POST['type_product'];
        $priceproduct = $_POST['price_product'];
        $persent = $_POST['persen'];        
            
        $quanlity = $_POST['quanlity'];
        $sql = "INSERT INTO products(name_product,type_product,image_product,price_product,quanlity_product,discount_product) 
        values ('$nameproduct','$typeproduct','$filename','$priceproduct','$quanlity','$persent')"; 
        if($conn -> query($sql)=== true){
            echo "Inserted susscessfuly";
        
        }
        else{
            echo "Fail";
        }
}
    else{
        echo "Enter full Data";
    }
}
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

}
if(isset($_POST['edit'])){
    if(!empty($_POST['nameproduct'])&&!empty($_POST['type_product'])&&!empty($_POST['price_product'])&& !empty($_POST['persen'])&& !empty($_POST['quanlity'])){
        $filename = $_FILES["img"]["name"];
        $nameproduct = $_POST['nameproduct'];
        $typeproduct = $_POST['type_product'];
        $priceproduct = $_POST['price_product'];
        $persent = $_POST['persen'];         
        $quanlity = $_POST['quanlity'];
        $sql = "Update products SET name_product = '$nameproduct', type_product = '$typeproduct',
        image_product = '$filename', price_product = '$priceproduct', quanlity_product = '$quanlity',discount_product = '$persent'  where id = $id"; 
        if($conn -> query($sql)=== true){
            echo header('Location: http://localhost:3000/addmin.php');
        
        }
        else{
            echo "fail";
        }
}
    else{
        echo "Enter full Data";
    }
}
?>
<?php
if(isset($_GET['idProducts'])){
    $idProduct = $_GET['idProducts'];
    $sql = "DELETE FROM products Where id = $idProduct";
    if($conn -> query($sql)=== true){
        echo header('Location: http://localhost:3000/addmin.php');
    
    }
}
?>
