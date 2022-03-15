<?php 
    require_once('./connect.php');
    $sql = "Create table products(
        id INT not null Primary Key Auto_Increment,
        name_product varchar(30) NOT NUll,
        type_product varchar(30) NOT NUll,
        image_product varchar(1000) NOT NULL ,
        price_product int NOT NULL,
        quanlity_product int NOT NULL,
        discount_product int NOT NULL
    )";
    if($conn -> query($sql)=== true){
        echo "Table create susscessfuly";
    }
?>