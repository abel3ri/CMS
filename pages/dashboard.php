<?php
   include "../controllers/db_request.php";
   $val = "";
   if(isset($_GET['val'])){
    $val = $_GET['val'];
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
      <div class="messagePopUp <?php echo $val?>">
    <?php 
      if($val == "success") echo "Your request is submitted successfully!";
      else if($val == "re_submission"){
        echo "You have already submitted a request.";
      } else if($val == "failed") {
        echo "Request failed please try again later";
      }
    ?>
    <button class="closeBtn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
  </div>
      <h1 class="cms"><a class="logo" href="../index.html">CMS</a></h1>
      <ion-icon class="menu" name="menu"></ion-icon>
      <ion-icon class="close" name="close"></ion-icon>
    </nav>
    <section class="header">
      <h1 class="username">Hello, <?php echo $userData['name'] ?></h1>
      <div class="circle-img">
        <ion-icon name="person-circle"></ion-icon>
      </div>
      <div class="btns">
        <a class="btn request-clearance" href="../controllers/request.php?user_id=<?php echo $userData['id']; ?>">Request clearance</a>
        <a class="btn check-clearance" href="#">Check clearacne status</a>
        <a class="btn homepage" href="#">Home page</a>
        <a class="btn logout" href="../controllers/logout.php">Logout</a>
      </div>
    </section>
    <div class="overlay">
      <div class="overlay-content">
        <div>
          <a href="../pages/profile.php"
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
          <a href="../controllers/logout.php"
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
