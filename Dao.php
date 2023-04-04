<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'KLogger.php';
$logger = new KLogger ("dao.txt" , KLogger::WARN);
// $logger->LogWarn("Making it to top in Dao.php");

// Dao.php
// class for saving and getting comments from MySQL
class Dao {

  private $host = "us-cdbr-east-06.cleardb.net";
  private $db = "heroku_b592ca53113e7d3";
  private $user = "b4d97d845bc720";
  private $pass = "0ce3ee12";
  //private $port = 8889;

  public function getConnection () {
    // $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    // $cleardb_server = $cleardb_url["host"];
    // $cleardb_username = $cleardb_url["user"];
    // $cleardb_password = $cleardb_url["pass"];
    // $cleardb_db = substr($cleardb_url["path"],1);
    // $active_group = 'default';
    // $query_builder = TRUE;
    // mysql://b4d97d845bc720:0ce3ee12@us-cdbr-east-06.cleardb.net/heroku_b592ca53113e7d3?reconnect=true
    // UN: b4d97d845bc720
    //PASSWORD: 0ce3ee12
    //HOST: us-cdbr-east-06.cleardb.net
  //   return
  //     new PDO("mysql:host=$cleardb_server;dbname=$cleardb_db", $cleardb_username,
  //         $cleardb_password);
  // }

  return
  new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
      $this->pass);
  }

        

  public function deleteReview ($id) {
    $conn = $this->getConnection();
    $deleteReview =
        "DELETE FROM review
        WHERE id = :id";
    $q = $conn->prepare($deleteReview);
    $q->bindParam(":id", $id);
    $q->execute();
  }

  public function saveReview ($username, $restaurant_name, $review, $location, $rating) {

    $conn = $this->getConnection();
    $logger = new KLogger("dao.txt" , KLogger::WARN);
    $logger->LogWarn([$username]);
    $logger->LogWarn([$restaurant_name]);
    $logger->LogWarn([$review]);
    $logger->LogWarn([$location]);
    $logger->LogWarn([$rating]);
    if ($conn->connect_error) {
        $logger->LogWarn("Connection has failed in saveReview");
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO review (username, restaurant_name, review_description, location, rating) VALUES (:username, :restaurant_name, :review, :location, :rating)";

    $q = $conn->prepare($sql);
    $q->bindParam(":username", $username);
    $q->bindParam(":restaurant_name", $restaurant_name);
    $q->bindParam(":review", $review);
    $q->bindParam(":location", $location);
    $q->bindParam(":rating", $rating);
    $q->execute();

  }

  public function getReviews () { //get all of the reviews from the review table
    $conn = $this->getConnection();
    return $conn->query("SELECT username, restaurant_name, review_description,
    location, rating FROM review")->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getRestaurants () { //get all of the reviews from the review table
    $conn = $this->getConnection();
    return $conn->query("SELECT * FROM restaurant")->fetchAll(PDO::FETCH_ASSOC);
  }


  public function getFavorites ($username) { //get all of the favorites from the favorites table for a given user 
    $conn = $this->getConnection();
    $logger = new KLogger ("dao.txt" , KLogger::WARN);
    // $logger->LogWarn("{$username}");
    $q = $conn->prepare("SELECT favorite_id, restaurant_name, datetime_entered, username FROM favorite WHERE username = ?");
    $q->execute([$username]);
    return $q->fetchAll(PDO::FETCH_ASSOC);

  }

  public function getCurrentUserId ($username) {  
    $conn = $this->getConnection();
    $logger = new KLogger ("dao.txt" , KLogger::WARN);
    // $logger->LogWarn("{$username}");
    $q = $conn->prepare("SELECT user_id FROM user WHERE username = ?");
    $q->execute([$username]);
    return $q->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function getRegisteringUserCredentials($username) {
    $conn = $this->getConnection();
    $q = $conn->prepare("SELECT username FROM user WHERE username = :username");
    $q->bindParam(':username', $username);
    $q->execute();

    if($q->rowCount() > 0){
        echo "exists!";
        return true;
    } else {
        echo "non existant";
        return false;
    }
  }

  public function getUserCredentials($username, $password) {
    $conn = $this->getConnection();
    $q = $conn->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
    $q->bindParam(':username', $username);
    $q->bindParam(':password', $password);
    $q->execute();

    if($q->rowCount() > 0){

        echo "exists!";
        return true;
    } else {
        echo "non existant";
        return false;
    }
  }


  public function saveUser ($username, $password) {

    $conn = $this->getConnection();
    // $logger = new KLogger("dao.txt" , KLogger::WARN);
    // $logger->LogWarn("Connection is secured");
    if ($conn->connect_error) {
        // $logger->LogWarn("Connection has failed in saveReview");
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";

    $q = $conn->prepare($sql);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $password);
    $q->execute();

  }


  public function addFavorite ($user_id, $restaurant_name, $username) {

    $conn = $this->getConnection();
   
    if ($conn->connect_error) {
       
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO favorite (user_id, restaurant_name, username) VALUES (:user_id, :restaurant_name, :username)";
    $q = $conn->prepare($sql);
    $q->bindParam(":user_id", $user_id);
    $q->bindParam(":restaurant_name", $restaurant_name);
    $q->bindParam(":username", $username);
    $q->execute();

  }


  public function deleteFavorite ($id) {
    $conn = $this->getConnection();
    $deleteFav =
        "DELETE FROM favorite
        WHERE favorite_id = :id";
    $q = $conn->prepare($deleteFav);
    $q->bindParam(":id", $id);
    $q->execute();
  }
} // end Dao
