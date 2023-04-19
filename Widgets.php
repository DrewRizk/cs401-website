<?php

class Widgets {

   public static function renderTable ($rows) {
      // $columnNames = array_keys($rows[0]);
      $html = "<table id='review_t'><thead><tr>";
  
      $html .= "<th>Username</th>";
      $html .= "<th>Restaurant Name</th>";
      $html .= "<th>Review Description</th>";
      $html .= "<th>Location</th>";
      $html .= "<th>Rating/5</th>";
      
      $html .= "</tr></thead><tbody>";
      foreach ($rows as $row) {
        $html .= "<tr>";
        foreach($row as $columnName => $item) {
          $html .= "<td>". htmlspecialchars($item) . "</td>";
        }
        // $html .= "<td><a href='add_favorite_handler.php?id={$row['restaurant_name']}'>ADD AS FAVORITE</a></td>" ;
        $html .= "</tr>" ;
      }
      $html .= "</table>";
      return $html;
   }

   public static function renderFavoritesTable ($rows) {
    // $columnNames = array_keys($rows[0]);
    $html = "<table id='review_t'><thead><tr>";

    $html .= "<th>Fav_id</th>";
    $html .= "<th>Restaurant Name</th>";
    $html .= "<th>Date Added</th>";
    $html .= "<th>Username</th>";
    $html .= "<th>Remove Favorite</th>";
    
    $html .= "</tr></thead><tbody>";
    foreach ($rows as $row) {
      $html .= "<tr>";
      foreach($row as $columnName => $item) {
        $html .= "<td>". htmlspecialchars($item) . "</td>";
      }
      $html .= "<td><a href='delete_handler.php?id={$row['favorite_id']}'>X</a></td>" ;
      $html .= "</tr>" ;
    }
    $html .= "</table>";
    return $html;
 }
 public static function renderRestaurantsTable ($rows) {
  // $columnNames = array_keys($rows[0]);
  $html = "<table id='review_t'><thead><tr>";

  $html .= "<th></th>";
  $html .= "<th>Restaurant Name</th>";
  $html .= "<th>Description</th>";
  $html .= "<th>Location</th>";
  $html .= "<th>Rating/5</th>";
  $html .= "<th>Favorite</th>";
  
  $html .= "</tr></thead><tbody>";
  foreach ($rows as $row) {
    $html .= "<tr>";
    foreach($row as $columnName => $item) {
      $html .= "<td>". htmlspecialchars($item) . "</td>";
    }
    $html .= "<td><a href='add_favorite_handler.php?id={$row['restaurant_name']}'>ADD AS FAVORITE</a></td>" ;
    $html .= "</tr>" ;
  }
  $html .= "</table>";
  return $html;
}

 
}