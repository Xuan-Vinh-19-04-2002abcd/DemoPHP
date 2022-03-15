<?php 
    require_once('./connect.php');
    $sql = "Create table sildes(
        id INT not null Primary Key Auto_Increment,
        img varchar(70) not null
    )";
    if($conn -> query($sql)=== true){
        echo "Table create susscessfuly";
    }
    else{
        echo "Fail";
    }
?>