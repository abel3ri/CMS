<?php 
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
    <title>Sign up</title>
    <link rel="stylesheet" href="../styles/form_style.css" />
  </head>
  <body>
    <section class="form-container">
      <div class="error-pop-up" data-show="<?php echo $val ?>">
        <p>ID number already in use.</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>

      </div>
      <h1>Welcome!</h1>
      <form method="POST" action="../controllers/sign_up_cont.php">
        <div class="input-container">
          <div class="error"></div>
          <input
            type="text"
            placeholder="Name"
            name="name"
            class="form-input"
            required
          />
        </div>
        <div class="input-container">
          <div class="error"></div>
          <input
            type="text"
            placeholder="Id number"
            name="idNumber"
            class="form-input"
          />
        </div>
        <div class="input-container">
          <div class="error"></div>
          <input
            type="email"
            placeholder="E-mail"
            name="email"
            class="form-input"
            required
          />
        </div>
        <div class="input-container">
          <div class="error"></div>
          <input
            type="password"
            placeholder="Password"
            name="password"
            class="form-input"
          />
        </div>
        <div class="input-container">
          <div class="error"></div>
          <input
            type="password"
            placeholder="Re-enter Password"
            name="rePassword"
            class="form-input"
          />
        </div>

        <div class="btns">
          <input
            type="submit"
            value="Sign up"
            name="signup"
            class="submit-btn"
          />
          <a href="../pages/index.html" class="cancel-btn"> Cancel </a>
        </div>
      </form>
      <div>
        <p>Already have an account?</p>
        <a class="sign-up" href="./login.html">Login</a>
      </div>
    </section>
    <script src="../scripts/formValidator.js"></script>
  </body>
</html>
