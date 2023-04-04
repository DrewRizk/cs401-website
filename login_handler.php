<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'Dao.php';

require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);


$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['name'] = $username;

$_SESSION['inputs'] = $_POST;
// $logger->LogDebug("User [{$username}] attempting to log in");


$dao = new Dao();
// $id = $dao->getCurrentUserId($username);
$exists = $dao->getUserCredentials($username, $password);
$user_id = $dao->getCurrentUserId($username);
$first_index = reset($user_id);

if ($user_id == true){
  $_SESSION['id'] = $first_index;
  // header("Location: newReview.php"); //user already exists
}
// }else{
//   header("Location: login.php"); //valid login
// }
// $id = 
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