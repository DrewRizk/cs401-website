
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>RestuarantMania</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  </head>
  <body>
    <div class ="navbar">
        <div class="button">
          <button class="button-attributes"> LOGIN </button>
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
           <li class="active"><a href="index.php">Home</a></li>
           <li><a href="newReview.php">New Review</a></li>
           <li><a href="favorites.php">Favorites</a></li>
         </ul>
      </div>
  <div id="content">
  <h4 id="homepage-restuarant-path"><a href="index.php">Home</a> > Tony's Pizza</h4>
   <h4> This page shows what Tony's Pizza's profile looks like I guess you could say. Ideally, each restuarant would have a profile like this.</h4>
  </div>
  <div class="profile-panel">
      <div class="top-of-panel">
        <div class="profile-pic">
                <h1>Profile Picture</h1>
        </div>
        <div class="button">
                <button id="add-to-favorites-button" class="button-attributes"><a href="favorites.php">Add to favorites</a> </button>
        </div>
     </div>
     <div class="profile-panel-textbox">
         Tony's Pizza specializes in pizza, calzones, and anything else Italian! Started by Tony Sr. in 1923, it became 
         very popular for its authentic Italian cusine. Tony came over from Venice in 1921, meaning it took him 
         about 2 years to realize there was no true Italian food in the United States. 
    </div>
    <div class="button">
                <button id="profile-panel-write-a-review-button" class="button-attributes"><a href="newReview.php">Write a Review</a></button>
    </div>
    <div class="restaurant-images">
        <div class="restaurant-images-image">
            Image 1
        </div>
        <div class="restaurant-images-image">
            Image 2
        </div>
    </div>
 </div>


</body>

</div>
<?php include("footer.php"); ?>