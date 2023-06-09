<?php  
  include "../controllers/db_request.php";
  // print_r($userData);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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
    <div class="profile">
      <div>
        <h2>Name</h2>
        <h2> <?php echo htmlspecialchars($userData['name']) ?></h2>
      </div>
      <hr />
      <div>
        <h2>Registered email</h2>
        <h2><?php echo htmlspecialchars($userData['email']) ?></h2>
      </div>
      <hr />
      <div>
        <h2>Id number</h2>
        <h2><?php echo htmlspecialchars($userData['id_number']) ?></h2>
    </div>
      <hr />
      <div>
        <h2>Date joined</h2>
        <h2><?php 
          echo explode(" ", htmlspecialchars($userData['created_at']))[0];
        ?></h2>
    </div>
      <hr />
      <a href="../controllers/logout.php" class="logout">Logout</a>
    </div>
  </body>
</html>
