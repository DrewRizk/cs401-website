
<html>
<?php include("nav.php"); 
require_once 'Dao.php';
require_once "Widgets.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
  <div id="content">
   <h4> Browse all of the restuarants that have had reviews and are in our database! </h4>
   <!-- <h4> Click below to see what a page of an actual restaurant will look like! <h4>
   <a href="restuarant-page.php">Tony's Pizza</a> -->
  </div>
  <div id = "review_table">
  <?php
    $dao = new Dao();
    $review = $dao->getReviews();
    echo Widgets::renderTable($review);

    ?>
  </div>
<?php include("footer.php"); ?>