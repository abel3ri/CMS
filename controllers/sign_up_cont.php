<?php 
include "./db_connect.php";
if(isset($_POST['signup'])){
   try {
    $name = $_POST['name'];
    $idNumber = $_POST['idNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    print_r($_POST);

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