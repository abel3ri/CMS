<?php
  include "../controllers/db_connect.php";
  session_start();
  if($idNumber = $_SESSION['idNumber']){
    $sql = "SELECT * FROM users WHERE id_number = '$idNumber';";
    $result = mysqli_query($conn, $sql);
    if($result){
      $userData = mysqli_fetch_assoc($result);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test</title>
    <link rel="stylesheet" href="../styles/dashboard.css" />
  </head>
  <body>
    <nav class="nav">
      <h1 class="cms">CMS</h1>
      <ion-icon class="menu" name="menu"></ion-icon>
      <ion-icon class="close" name="close"></ion-icon>
    </nav>
    <section class="header">
      <h1 class="username">Hello, <?php echo $userData['name'] ?></h1>
      <div class="circle-img">
        <ion-icon name="person-circle"></ion-icon>
      </div>
      <div class="btns">
        <a class="btn" href="#">Request clearance</a>
        <a class="btn" href="#">Check clearacne status</a>
      </div>
    </section>
    <div class="overlay">
      <div class="overlay-content">
        <div>
          <a href="../pages/profile.html"
            ><ion-icon class="overlay-icon" name="person-circle"></ion-icon>
            Profile</a
          >
        </div>
        <div>
          <a href="#"
            ><ion-icon class="overlay-icon" name="settings"></ion-icon>
            Settings</a
          >
        </div>
        <div>
          <a href="#"
            ><ion-icon class="overlay-icon" name="log-out"></ion-icon> Logout</a
          >
        </div>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script type="text/javascript" src="../scripts/utility.js"></script>
  </body>
</html>
