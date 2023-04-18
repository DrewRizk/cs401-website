
<?php 
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<html>
  <head>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/mania.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="login-reg-form">
    <h1>Login Page</h1>
    <?php
    if(isset($_SESSION['message'])) {
      echo "<div class='" . $_SESSION['message_type'] . "' id='message'> <div class='close'>X</div>" . $_SESSION['message'] . "</div>";
      unset($_SESSION['message']);
    }
    ?>
    <form method="POST" action="login_handler.php">
       Username 
       <div><input type="text" id="username" name="username"></div>
       Password
       <div><input type="password" id="password" name="password"></div>
       <div><input type="submit" id="login_user_submit" value="Submit"></div>
    </form>

   <a href="register_user.php"> Click here to register now! </a>
  </div>

  </body>
</html>