
<html>
<?php 
include("nav.php"); 
require_once 'Dao.php';
require_once "Widgets.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);?>
  <div id="content">
  <h4> Take a look at your favorited restuarants! </h4>
  </div>

  <div id = "review_table">
  <?php
    $username = $_SESSION['name'];
    // echo "$username";
    
    $dao = new Dao();
    // $id = $dao->getCurrentUserId($username);
    // if ($id == true){
    //   $_SESSION['id'] = $id;
    //   header("Location: newReview.php"); //user already exists
    // }else{
    //   // $_SESSION['message'] = "Username does not exist";
    //   header("Location: login.php"); //new user has been created
    // }
    $favorites = $dao->getFavorites($username);
    echo Widgets::renderFavoritesTable($favorites);

    ?>
  </div>
<?php include("footer.php"); ?>