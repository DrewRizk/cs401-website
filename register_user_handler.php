<?php

session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 
  require_once 'Dao.php';

  $username = $_POST['new_username'];
  $password = $_POST['new_password'];
  $_SESSION['inputs'] = $_POST;
  $_SESSION['message_type'] = "happy";


  //hashing logic using crypt and my hardcoded salt value. This is what will be stored in the database.
  $salt = "mysalt";
  $hashed_password = crypt($password, $salt);

  if (empty($username) && empty($password)) {
    $_SESSION['message'] = "*Please enter a username \n*Please enter a passsword";
    $_SESSION['message_type'] = "sad";
    header("Location: register_user.php");
    exit();
  }

  if (empty($username)) {
    $_SESSION['message'] = "*Please enter a username";
    $_SESSION['message_type'] = "sad";
    header("Location: register_user.php");
    exit();
  }
  if (empty($password)) {
    $_SESSION['message'] = "*Please enter a password";
    $_SESSION['message_type'] = "sad";
    header("Location: register_user.php");
    exit();
  }

  if (strlen($username) > 32) {
    $_SESSION['message'] = "*Username too long!";
    $_SESSION['message_type'] = "sad";
    header("Location: register_user.php");
    exit();
  }
  if (strlen($password) > 32) {
    $_SESSION['message'] = "*Password too long!";
    $_SESSION['message_type'] = "sad";
    header("Location: register_user.php");
    exit();
  }

  $dao = new Dao();
  $exists = $dao->getRegisteringUserCredentials($username);
  if ($exists == true){
    $_SESSION['message'] = "Username already exists!";
    $_SESSION['message_type'] = "sad";
    header("Location: register_user.php"); //user already exists
  }else{
    $dao->saveUser($username, $hashed_password);
    header("Location: login.php"); //new user has been created
  }
  
  exit();