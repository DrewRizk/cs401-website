
<html>
<?php 
session_start();
include("nav.php"); 
require_once 'Dao.php';
require_once "Widgets.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);?>
  <div id="content">
  <h4> Take a look at all restaurants in our database so far! </h4>
  </div>

  <div id="review_table">
  <?php
    $username = $_SESSION['name'];
    
    $dao = new Dao();
    $restaurants = $dao->getRestaurants();
    echo Widgets::renderRestaurantsTable($restaurants);

    ?>
  </div>
<?php include("footer.php"); ?>