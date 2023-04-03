<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
  require_once 'Dao.php';

  $id = $_GET['id'];

  $dao = new Dao();
  $dao->deleteFavorite($id);
  header("Location: favorites.php");
  exit();