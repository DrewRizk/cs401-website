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

  //$_SESSION['inputs'] = $_POST;

  // if (empty($username)) {
  //   $errors[] = "Username cannot be empty";
  //   $_SESSION['message'] = "Please enter a username";
  //   header("Location: newReview.php");
  //   exit();
  // }

  // if (empty($review)) {
  //   $errors[] = "Review is too long";
  //   $_SESSION['message'] = "Please enter a review";
  //   header("Location: newReview.php");
  //   exit();
  // }

  // if (empty($review)) {
  //   $errors[] = "Review field cannot be empty";
  //   header("Location: newReview.php");
  //   exit();
  // }


// if (sizeof($errors) > 0) {
//   foreach($errors as $error)
//   {
//       printf("<li>%s</li>", $error);
//   }
// }
// else {
//   print "Your data is OK!";
//   // Do whatever you want with the data.
// }

$logger = new KLogger ("dao.txt" , KLogger::WARN);
// $first_index = reset($username);
// $first_index2 = reset($restaurant_name);
// $logger->LogWarn($first_index);
// $logger->LogWarn($first_index2);
$logger->LogWarn($username);
$logger->LogWarn($restaurant_name);
$logger->LogWarn($location);
$logger->LogWarn($rating);
$logger->LogWarn($review);
// foreach ($username as &$value) {
//   $logger->LogWarn("{$value}");
// }

  $dao = new Dao();
  $dao->saveReview($username, $restaurant_name, $review, $location, $rating);
  header("Location: newReview.php");
  exit();
