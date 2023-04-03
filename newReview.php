
<?php 
include("nav.php"); 
require_once "Widgets.php";
require_once 'Dao.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if(isset($_SESSION['message'])) {
  echo "<div id='message'>" . $_SESSION['message'] . "</div>";
  unset($_SESSION['message']);
}

?>
  <div id="content">
    <h4> Create a new review using the form below: </h4>
  </div>
    <div class="container">
     <form id="newReview_form" action="newReview_handler.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-25">
          <label for="username">Username</label>
        </div>
        <div class="col-75">
          <input type="text" id="username" name="username" placeholder="Your RestuarantMania Username...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="restaurant_name">Restuarant Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="restaurant_name" name="restaurant_name" placeholder="Put the name of the restuarant here...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="location">Location</label>
        </div>
        <div class="col-75">
          <select id="location" name="location">
            <option value="Boise">Boise</option>
            <option value="Boston">Boston</option>
            <option value="Charlston">Charlston</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="rating">Rating out of 5 stars</label>
        </div>
        <div class="col-75">
          <input type="number" step="0.01" id="rating" name="rating" placeholder="Rating out of 5...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="Review">Review Message</label>
        </div>
        <div class="col-75">
          <input type="text" step="0.01" id="Review" name="review" placeholder="Enter your review message here...">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
  </form>
 
</div>
<?php include("footer.php"); ?>