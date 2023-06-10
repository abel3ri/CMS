<?php
include "../controllers/db_connect.php";
    session_start();
    try{
        if(isset($_SESSION['idNumber'])){
            $idNumber = $_SESSION['idNumber'];
            $sql = "SELECT name, request_date, status FROM requests WHERE id_number = '$idNumber';";
    
            $result = mysqli_query($conn, $sql);
    
            if($result){
                $clearanceData = mysqli_fetch_assoc($result);
            }
        }
    } catch(Exception $e){
        echo $e->getMessage();
    }
?>