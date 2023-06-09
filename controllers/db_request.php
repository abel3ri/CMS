<?php
    include "../controllers/db_connect.php";
    session_start();
    if(isset($_SESSION['idNumber'])){
    $idNumber = $_SESSION['idNumber'];
    $sql = "SELECT * FROM users WHERE id_number = '$idNumber';";
    $result = mysqli_query($conn, $sql);
    if($result){
        $userData = mysqli_fetch_assoc($result);
    }
    }
?>