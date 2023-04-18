
<?php 
include("nav.php");
require_once "Widgets.php";
require_once 'Dao.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
  <div id="content">
    <h4 class="guidance_messages"> Create a new review using the form below: </h4>
  </div>
  <?php
  if(isset($_SESSION['message'])) {
  // echo "<div class='" . $_SESSION['message_type'] . "' id='message'>" . $_SESSION['message'] . " <div class='close'>X</div></div>";
  echo "<div class='" . $_SESSION['message_type'] . "' id='message'> <div class='close'>X</div>" . $_SESSION['message'] . "</div>";
  // echo "<div class='" . $_SESSION['message_type'] . "' id='message'>" . $_SESSION['message'] . " <span class='close'>X</span></div>";
  unset($_SESSION['message']);
  }
  ?>

    <div class="container">
     <form id="newReview_form" action="newReview_handler.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-25">
          <label for="username">Username</label>
        </div>
        <div class="col-75">
          <input type="text"  id="username" name="username" placeholder="Your RestuarantMania Username..." value="<?php echo isset($_SESSION['inputs']['username']) ? $_SESSION['inputs']['username'] : '' ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="restaurant_name">Restuarant Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="restaurant_name" name="restaurant_name" placeholder="Put the name of the restuarant here..." value="<?php echo isset($_SESSION['inputs']['restaurant_name']) ? $_SESSION['inputs']['restaurant_name'] : '' ?>">
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
            <option value="Charlston">Seattle</option>
            <option value="Charlston">Portland</option>
            <option value="Charlston">Chicago</option>
            <option value="Charlston">New York City</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="rating">Rating out of 5 stars</label>
        </div>
        <div class="col-75">
          <input type="number" step="0.1" min="0" max="5" id="rating" name="rating">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="Review">Review Message</label>
        </div>
        <div class="col-75">
          <input type="text" id="Review" name="review" placeholder="Enter your review message here..." value="<?php echo isset($_SESSION['inputs']['review']) ? $_SESSION['inputs']['review'] : '' ?>">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
  </form>
 
</div>
<?php include("footer.php"); ?>