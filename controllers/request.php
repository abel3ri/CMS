<?php 
    include "../controllers/db_connect.php";

    if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];

        // Fetch data from database about the current user in order to associate this exact user with the request
       try {
        $sql = "SELECT id_number, name FROM users WHERE id = '$id';";

        $result = mysqli_query($conn, $sql);
        if($result){
           $userData = mysqli_fetch_assoc($result);
           $idNumber = mysqli_real_escape_string($conn, $userData['id_number']);
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