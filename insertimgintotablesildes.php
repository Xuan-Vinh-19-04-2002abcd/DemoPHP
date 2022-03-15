<?php
require_once('./connect.php');
$sql = "INSERT INTO sildes(img) 
values ('./img/slide-2.jpg'),('./img/slide-3.jpg'),('./img/slide-4.jpg'),('./img/slide-5.jpg')";  
if($conn -> query($sql)=== true){
    echo "Inserted susscessfuly";

}
else{
    echo "Error: Could not able to exute";
}
?>
<img src="" alt="">