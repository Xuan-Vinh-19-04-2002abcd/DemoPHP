<?php
include("./connect.php");
session_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_GET['quanlity'])){
    $quanlity = $_GET['quanlity'];
}
if(isset($_GET['action'])){
    $action = $_GET['action'] ;
}

$sql = "select * from products where id = $id;";
$results = $conn->query($sql);
$product =mysqli_fetch_assoc($results);
$item = [
    "id" => $product['id'],
    "name" => $product['name_product'],
    "img" => $product['image_product'],
    "price" => $product['price_product'],
    "quanlity" => $quanlity
];
if($action == 'add'){
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quanlity'] += $quanlity;
    }
    else{
        $_SESSION['cart'][$id] = $item;
    }
}
if($action == 'update'){
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quanlity'] = $quanlity;
    }
}
if($action == 'delete'){
    unset($_SESSION['cart'][$id]);
}
header("Location: http://localhost:3000/showcart.php ")

?>
