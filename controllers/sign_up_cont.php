<?php 
include "./db_connect.php";
if(isset($_POST['signup'])){
   try {
    
    $name = $_POST['name'];
    $idNumber = $_POST['idNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name, id_number, email, password) VALUES ('$name', '$idNumber', '$email', '$password');";

    $result = mysqli_query($conn, $sql);
     if($result){
        header("location:../pages/dashboard.html");
     } 
   }
   catch(Exception $e){
        if($e->getCode() == 1062){
            header("location:../pages/sign_up.php?val=taken");
        }
   }
     
}

?>