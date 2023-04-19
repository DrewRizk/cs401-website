<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'Dao.php';
$logger = new KLogger ("dao.txt" , KLogger::WARN);



$user_id = $_SESSION['id'];
$restaurant_name = $_GET['id'];
$username = $_SESSION['name'];
$logger->LogWarn("///////////");
// $logger->LogWarn("{$user_id}");
$first_index = reset($user_id);
$logger->LogWarn("{$first_index}");
$logger->LogWarn("{$restaurant_name}");
$logger->LogWarn("{$username}");

// $exists = $dao->getRegisteringUserCredentials($username);
//   if ($exists == true){
//     $_SESSION['message'] = "Username already exists!";
//     $_SESSION['message_type'] = "sad";
//     header("Location: register_user.php"); //user already exists
//   }else{
//     $dao->saveUser($username, $hashed_password);
//     header("Location: login.php"); //new user has been created
//   }
$dao = new Dao();

$exists  = $dao->getRepeatFavorites($first_index, $restaurant_name);
if ($exists == true){
    $_SESSION['message'] = "Restaurant already favorited!";
    $_SESSION['message_type'] = "sad";
    header("Location: restaurants.php");

}else{
    $_SESSION['message'] = "Successfully added restaurant to favorites!";
    $_SESSION['message_type'] = "happy";
    $dao->addFavorite($first_index, $restaurant_name, $username);
    header("Location: restaurants.php");
}

exit();