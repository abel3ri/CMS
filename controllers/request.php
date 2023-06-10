<?php 
    include "../controllers/db_connect.php";
    session_start();
    if(isset($_SESSION['idNumber'])){
        $idNumber = $_SESSION['idNumber'];

        // Fetch data from database about the current user in order to associate this exact user with the request
       try {
        $sql = "SELECT name FROM users WHERE id_number = '$idNumber';";

        $result = mysqli_query($conn, $sql);

        if($result){
           $userData = mysqli_fetch_assoc($result);
           $name = mysqli_real_escape_string($conn, $userData['name']);

           // Write data into requests database with default value of waiting for status 

           $sql = "INSERT INTO requests (id_number, name, status) vALUES ('$idNumber', '$name', 'waiting');";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("location:../pages/dashboard.php?val=success");
            } 
        }
       } catch(Exception $e){
            if($e->getCode() == 1062){
                header("location:../pages/dashboard.php?val=re_submission");
            } else {
                header("location:../pages/dashboard.php?val=failed");
            }
       }
    }
   
?>