<?php 
include "./db_connect.php";
if(isset($_POST['signup'])){
   try {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $idNumber = mysqli_real_escape_string($conn, $_POST['idNumber']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO users(name, id_number, email, password) VALUES ('$name', '$idNumber', '$email', '$password');";

    $result = mysqli_query($conn, $sql);
     if($result){
         session_start();
         $_SESSION['idNumber'] = $idNumber;
         header("location:../pages/dashboard.php");
     } 
   }
   catch(Exception $e){
        if($e->getCode() == 1062){
         header("location:../pages/sign_up.php?val=taken");
        }
   }     
}

?>