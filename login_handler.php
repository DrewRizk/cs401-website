<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'Dao.php';

require_once 'KLogger.php';
$logger = new KLogger ("dao.txt" , KLogger::WARN);


$username = $_POST['username'];
$password = $_POST['password'];
//hash inputted password and compare it to the password in database
$salt = "mysalt";
$hashed_password = crypt($password, $salt);
$logger->LogWarn($hashed_password);
$_SESSION['name'] = $username;
$_SESSION['inputs'] = $_POST;

if (empty($username) && empty($password)) {
  $_SESSION['message'] = "*Please enter a username \n*Please enter a passsword";
  $_SESSION['message_type'] = "sad";
  header("Location: login.php");
  exit();
}

if (empty($username)) {
  $_SESSION['message'] = "*Please enter a username";
  $_SESSION['message_type'] = "sad";
  header("Location: login.php");
  exit();
}
if (empty($password)) {
  $_SESSION['message'] = "*Please enter a password";
  $_SESSION['message_type'] = "sad";
  header("Location: login.php");
  exit();
}


$dao = new Dao();
// $id = $dao->getCurrentUserId($username);
$exists = $dao->getUserCredentials($username, $hashed_password);
$user_id = $dao->getCurrentUserId($username);
$first_index = reset($user_id);

if ($user_id == true){
  $_SESSION['id'] = $first_index;
  // header("Location: newReview.php"); //user already exists
}

if ($exists == true){
  $logger = new KLogger("dao.txt" , KLogger::WARN);
  $logger->LogWarn("Good");
  $_SESSION['auth'] = true;
  header("Location: newReview.php"); //user already exists
}else{
  $logger->LogWarn("Bad");
  // $_SESSION['message'] = "Username does not exist";
  header("Location: login.php"); //new user has been created
}

exit();