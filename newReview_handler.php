<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'Dao.php';

  // $errors = array();

  $username = $_POST['username'];
  $restaurant_name = $_POST['restaurant_name'];
  $location = $_POST['location'];
  $rating = $_POST['rating'];
  $review = $_POST['review'];

  $_SESSION['inputs'] = $_POST;
  $_SESSION['message_type'] = "happy";

  if (empty($username) && empty($restaurant_name) && empty($review)) {
    $_SESSION['message'] = "*Please enter a username \n*Please enter a restaurant name\n *Please enter a review";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  }else{
    $username = test_input($username);
    $restaurant_name = test_input($restaurant_name);
    $review = test_input($review);
  }

  if (empty($username) && empty($restaurant_name)) {
    $_SESSION['message'] = "*Please enter a username \n*Please enter a restaurant name";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  }else{
    $username = test_input($username);
    $restaurant_name = test_input($restaurant_name);
  }

  if (empty($username) && empty($review)) {
    $_SESSION['message'] = "*Please enter a username \n*Please enter a review";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  }else{
    $username = test_input($username);
    $review = test_input($review);
  }

  if (empty($restaurant_name) && empty($review)) {
    $_SESSION['message'] = "*Please enter a restaurant name \n*Please enter a review";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  }else{
    $restaurant_name = test_input($restaurant_name);
    $review = test_input($review);
  }

  if (empty($username)) {
    $_SESSION['message'] = "*Please enter a username";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  }else{
    $username = test_input($username);
  }
  if (empty($restaurant_name)) {
    $_SESSION['message'] = "*Please enter a review";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  } else {
      $restaurant_name = test_input($restaurant_name);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$restaurant_name)) {
        $_SESSION['message'] = "*Please enter a valid restaurant name that only consists of letters and spaces";
        $_SESSION['message_type'] = "sad";
        header("Location: newReview.php");
        exit();
      }
  }

  if (empty($review)) {
    $_SESSION['message'] = "*Please enter a review";
    $_SESSION['message_type'] = "sad";
    header("Location: newReview.php");
    exit();
  }else{
    $review = test_input($review);
    if (!preg_match("/^[A-Za-z0-9' ]*$/",$review)) {
      $_SESSION['message'] = "*Please enter a valid restaurant review that only consists of letters, numbers, and spaces";
      $_SESSION['message_type'] = "sad";
      header("Location: newReview.php");
      exit();
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$logger = new KLogger ("dao.txt" , KLogger::WARN);

$logger->LogWarn($username);
$logger->LogWarn($restaurant_name);
$logger->LogWarn($location);
$logger->LogWarn($rating);
$logger->LogWarn($review);

  $dao = new Dao();
  $dao->saveReview($username, $restaurant_name, $review, $location, $rating);
  $_SESSION['message'] = "Thanks for posting!";
  header("Location: newReview.php");
  exit();
