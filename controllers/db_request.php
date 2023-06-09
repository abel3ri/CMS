<?php
    include "../controllers/db_connect.php";
    session_start();
    try {
            if(isset($_SESSION['idNumber'])){
            $idNumber =  mysqli_real_escape_string($conn, $_SESSION['idNumber']);
            $sql = "SELECT * FROM users WHERE id_number = '$idNumber';";
            $result = mysqli_query($conn, $sql);
            if($result){
                $userData = mysqli_fetch_assoc($result);
            }
            }
    } catch (Exception $e) {
        echo $e->getCode();
    }
?>