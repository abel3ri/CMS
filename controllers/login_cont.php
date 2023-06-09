<?php 
    include "../controllers/db_connect.php";
    if(isset($_POST['login'])){
        try{
            $idNumber = mysqli_real_escape_string($conn, $_POST['idNumber']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            
            $sql = "SELECT * FROM users WHERE id_number = '$idNumber'";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                // user found
                $userData = mysqli_fetch_assoc($result);
                if($userData){
                    if($userData['password'] != $password) {
                        header("location:../pages/login.php?val=no_match");
                        // echo "Password do not match";
                    } else {
                        header("location:../pages/dashboard.php");
                        // echo "Password matches";
                    }
                } else {
                    // user not found
                    header("location:../pages/login.php?val=user_not_found");
                }
            } 

        } catch(Exception $e){
            echo $e->getMessage() . $e->getCode();
        }
        
    }
?>