<html>

<head>
  <title>Order food online from India's best food Delevery</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<script type="text/javascript" src="javascript/change.js"></script> 
<script type="text/javascript" src="javascript/loginShow.js"></script>

<body id="dk">
  <div id="header">
    <a href="index.php"><img src="image/swiggy.png" id="swiggy-header" height="49" width="32"></a>
    <ul>
      <li><span onclick="ShowLocation()">Location</span></li>
      <li class="set-link"><span onclick="ShowSearchBox()"><img class="icon" src="image/search.png" heaght="20"
            width="20">Search</span>
      </li>
      <li><a href="offer.php"><img class="icon" id="icon-offer" src="image/offer.png" heaght="20" width="20"> Offer</a></li>
      <li><a href="help&support.php"><img class="icon" src="image/helpcare.png" heaght="20" width="20"> Help</a></li>
      <li>
        <?php if (!isset($_COOKIE['number'])){ ?>
        <span onclick="OpenLogin()" class="sideshow"><img class="icon" src="image/admin1.png" heaght="20"
            width="20">Sign In</span>
        <?php }else{ ?>
        <a href="logout.php" class="sideshow">Log Out</a>
        <?php } ?>
      </li>
      <li><a href="add2cart.php"><img class="icon" id="icon" src="image/add-to-cart.png" heaght="20" width="20"> Cart</a></li>
    </ul>
  </div>

  <?php include 'singin-login.php'; ?>
  
  <!-- Here we used search box -->
  <div class="main-div">
    <div class="main-div1">
      <div class="second-div">
        <form action="search-result.php" method="post">
          <button type="submit"><img src="image/search.png" height="30" width="30" id="search-box"></button>
          <input type="search" placeholder="Search For Restorant or Dishes" name="search" class="input-class" required/>
        </form>
      </div>
      <div class="icon-div" onclick="HideSearchBox()"><b>&#10005;</b>
        <p class="p-text">ESC</p>
      </div>
    </div>
  </div>


  <!-- Header Location Part-->
  <div class="location">
    <div class="location-child">
      <div class="location-second-div">
        <p onclick="HideLocation()" class="cross-icon">&#10005;</p>
        <div class="input-div">
          <input type="search" placeholder="Search for area, street name..">
        </div>

        <div class="div-location-area">
          <p class="location-icon">&#9881;</p>
          <div class="text1">Get current location</div>
          <div class="text2">Using GPS</div>
        </div>
      </div>
    </div>
  </div>