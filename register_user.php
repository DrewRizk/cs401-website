
<?php
if(isset($_SESSION['message'])) {
  echo "<div id='message'>" . $_SESSION['message'] . "</div>";
  unset($_SESSION['message']);
}
?>
<html>
  <head>
  </head>
  <body>
    <h1>Registration Page</h1>
    <form method="POST" action="register_user_handler.php">
       Username 
       <div><input type="text" id="username" name="new_username"></div>
       Password
       <div><input type="password" id="password" name="new_password"></div>
       <div><input type="submit" value="Submit"></div>
    </form>

   <a href="login.php"> Click here to go back to login page </a>

  </body>
</html>