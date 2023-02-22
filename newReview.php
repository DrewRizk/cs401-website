
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class ="navbar">
        <div class="button">
          <button class="button-attributes"> Drew R. </button>
        </div>
        <div class="navbar-left-list">
          <ul>
            <li><img id="favicon" src="https://icons.iconarchive.com/icons/sonya/swarm/256/Pizza-icon.png"/></li>
            <li><h1> RestuarantMania </h1> </li>
          </ul>
        </div>
    </div>
       <div class="subnav-bar">
         <ul>
           <li><a href="index.php">Home</a></li>
           <li class="active"><a href="newReview.php">New Review</a></li>
           <li><a href="favorites.php">Favorites</a></li>
         </ul>
      </div>
  <div id="content">
    <h4> Create a new review using the form below: </h4>
  </div>
    <div class="container">
     <form id="newReview_form" action="newReview_handler.php" method="get">
      <div class="row">
        <div class="col-25">
          <label for="fname">Username</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Your RestuarantMania Username...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Restuarant Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Put the name of the restuarant here...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Location</label>
        </div>
        <div class="col-75">
          <select id="country" name="country">
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
          <input type="number" step="0.01" id="rating" name="number" placeholder="Rating out of 5...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Enter Review Here..." style="height:200px"></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
  </form>
</div>
<?php include("footer.php"); ?>