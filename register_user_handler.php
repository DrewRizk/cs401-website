<?php

session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 
  require_once 'Dao.php';

  $username = $_POST['new_username'];
  $password = $_POST['new_password'];
  $_SESSION['inputs'] = $_POST;

  if (strlen($username) > 32) {
    $_SESSION['message'] = "Username too long!";
    header("Location: register_user.php");
    exit();
  }
  if (strlen($password) > 32) {
    $_SESSION['message'] = "Password too long!";
    header("Location: register_user.php");
    exit();
  }

  if (empty($username)) {
    $_SESSION['message'] = "Please enter a username";
    header("Location: register_user.php");
    exit();
  }
  if (empty($password)) {
    $_SESSION['message'] = "Please enter a password";
    header("Location: register_user.php");
    exit();
  }

  $dao = new Dao();
  $exists = $dao->getRegisteringUserCredentials($username);
  if ($exists == true){
    $_SESSION['message'] = "Username already exists!";
    header("Location: register_user.php"); //user already exists
  }else{
    $dao->saveUser($username, $password);
    header("Location: login.php"); //new user has been created
  }
  
  exit();