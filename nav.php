<?php
   session_start();
   if (!isset($_SESSION['auth'])) {
      header("Location: login.php");
      exit();
   } 

?>

<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class ="navbar">
        <div class="button">
          <a href="login.php"><button class="button-attributes"> LOGOUT </button></a>
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
           <li><a href="newReview.php">New Review</a></li>
           <li><a href="favorites.php">Favorites</a></li>
           <li><a href="restaurants.php">Restaurants</a></li>
         </ul>
      </div>