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


$dao = new Dao();
$dao->addFavorite($first_index, $restaurant_name, $username);
header("Location: restaurants.php");
exit();