
<html>
<?php 
include("nav.php");
require_once 'Dao.php';
require_once "Widgets.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);?>
  <div id="content">
  <h4> Take a look at all restaurants in our database so far! </h4>
  </div>
  <?php
  if(isset($_SESSION['message'])) {
    echo "<div class='" . $_SESSION['message_type'] . "' id='message'> <div class='close'>X</div>" . $_SESSION['message'] . "</div>";
    unset($_SESSION['message']);
  }

  ?>

  <div id="review_table">
  <?php
    $username = $_SESSION['name'];
    
    $dao = new Dao();
    $restaurants = $dao->getRestaurants();
    echo Widgets::renderRestaurantsTable($restaurants);

    ?>
  </div>
<?php include("footer.php"); ?>