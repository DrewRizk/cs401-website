
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class ="navbar">
        <div class="button">
          <button class="button-attributes"> Drew R. </button>
        </div>
        <div class="navbar-left-list">
          <ul>
            <li><img id="favicon" src="https://icons.iconarchive.com/icons/sonya/swarm/256/Pizza-icon.png"/></li>
            <li><h1> RestuarantMania </h1> </li>
          </ul>
        </div>
    </div>
       <div class="subnav-bar">
         <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="newReview.php">New Review</a></li>
           <li class="active"><a href="favorites.php">Favorites</a></li>
         </ul>
      </div>
  <div id="content">
  <h4> Take a look at your favorited restuarants! </h4>
  </div>

  <table id="restuarant-favorites">
  <tr>
    <th>Name
      </div>
    </th>
    <th>Date Added
      <div class="dropdown">
        <button class="dropbtn">Filter</button>
        <div class="dropdown-content">
            <a href="#">Most recent</a>
            <a href="#">Oldest</a>
       </div>
      </div>
    </th>
  </tr>
  <tr>
    <td>Italian & Co.</td>
    <td>2/1/23 <div class="button">
                <button class="button-attributes"><a href="favorites.php">Delete</a></button>
          </div>
        </td>
  </tr>
  <tr>
    <td>Papa's Pizza</td>
    <td>2/2/23 <div class="button">
                <button class="button-attributes"><a href="favorites.php">Delete</a></button>
          </div>
        </td>
  </tr>
  <tr>
    <td>Charlotte's Calzones</td>
    <td>2/4/23 
      <div class="button">
                <button class="button-attributes"><a href="favorites.php">Delete</a></button>
          </div>
    </td>
  </tr>
  <tr>
    <td>Tony's Shrimp</td>
    <td>2/9/23 <div class="button">
                <button class="button-attributes"><a href="favorites.php">Delete</a></button>
          </div>
        </td>
  </tr>
  <tr>
    <td>Italian & Co.</td>
    <td>2/8/23 <div class="button">
                <button class="button-attributes"><a href="favorites.php">Delete</a></button>
          </div>
        </td>
  </tr>
  <tr>
    <td>Papa's Pizza</td>
    <td>2/10/23 <div class="button">
                <button class="button-attributes"><a href="favorites.php">Delete</a></button>
          </div>
        </td>
  </tr>

</table>
<?php include("footer.php"); ?>