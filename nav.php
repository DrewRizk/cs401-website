<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 
 require_once 'KLogger.php';
  $logger = new KLogger ("dao.txt" , KLogger::WARN);
   session_start();
    $auth = $_SESSION['auth'];
    // $logger->LogWarn($auth);
   if (!isset($_SESSION['auth'])) {
    $logger->LogWarn("In nav and its not saying its set");
    header("Location: login.php");
    exit();
 } 
  
  //  if (!$_SESSION['auth']) {
  //     $auth = $_SESSION['auth'];
  //     $logger->LogWarn($auth);
  //     $logger->LogWarn("Auth failed");
  //     header("Location: login.php");
  //     exit();
  //  } 


   $index = "myButtons";
   $newReview = "myButtons";
   $favorites = "myButtons";
   $restaurants = "myButtons";

   $menuLinkID = basename($_SERVER['PHP_SELF'], ".php");

   $logger->LogWarn($menuLinkID);
   if ($menuLinkID == "index"){
     $index = 'myActiveButton';
   }else if ($menuLinkID == "newReview"){
     $newReview = 'myActiveButton';
   }
   else if ($menuLinkID == "favorites"){
    $favorites = 'myActiveButton';
   }
   else if ($menuLinkID == "restaurants"){
   $restaurants = 'myActiveButton';
   }

?>

<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/mania.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class ="navbar">
        <div class="button">
          <a href="logout.php"><button class="button-attributes"> LOGOUT </button></a>
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
           <li><a class="<?php echo $index;?>" href="index.php">Home</a></li>
           <li><a class="<?php echo $newReview;?>" href="newReview.php">New Review</a></li>
           <li><a class="<?php echo $favorites;?>" href="favorites.php">Favorites</a></li>
           <li><a class="<?php echo $restaurants;?>" href="restaurants.php">Restaurants</a></li>
         </ul>
      </div>
  </body>