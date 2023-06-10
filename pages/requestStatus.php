<?php  
  include "../controllers/check_status.php";
  // print_r($userData);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Request Details</title>
    <link rel="stylesheet" href="../styles/profile.css" />
  </head>
  <body>
    <nav>
      <a href="../pages/dashboard.php" class="go-back">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </a>

      <h1>CMS</h1>
    </nav>
    <div class="message">
     <h4><?php
      if($clearanceData['status'] == "waiting"){
        $name = $clearanceData['name']; echo  "Hello $name, Please wait patiently till you're approved by the clearance
        approver.";
      } else {
        echo "Congratulations! youre approved to leave the campus.";
      }
     ?></h4>
    </div>
    <div class="profile">
      <div>
        <h2>Name</h2>
        <h2><?php echo htmlspecialchars($clearanceData['name']) ?></h2>
      </div>
      <hr />
      <div>
        <h2>Request Status</h2>
        <h2><?php echo htmlspecialchars($clearanceData['status']) ?></h2>
      </div>
      <hr />
      <div>
        <h2>Requester ID Number</h2>
        <h2><?php echo htmlspecialchars($idNumber) ?></h2>
      </div>
      <hr />
      <div>
        <h2>Date Requested</h2>
        <h2>
          <?php 
          echo explode(" ", htmlspecialchars($clearanceData['request_date']))[0];
        ?>
        </h2>
      </div>
      <hr />
      <a href="../pages//dashboard.php" class="logout">Go back</a>
    </div>
  </body>
</html>
