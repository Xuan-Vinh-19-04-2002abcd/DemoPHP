<?php
include("./connect.php");
if(isset($_POST['sendcontact'])){
    if(!empty($_POST['contact-name'])&&!empty($_POST['contact-email'])&&!empty($_POST['contact-subject'])&& !empty($_POST['contact-content'])){
       
       $name = $_POST['contact-name'];    
       $email = $_POST['contact-email'];
       $subject = $_POST['contact-subject'];
       $content = $_POST['contact-content'];
            
        
        $sql = "INSERT INTO lienhe(name,email,content,Description) 
        values ('$name','$email','$subject','$content')"; 
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