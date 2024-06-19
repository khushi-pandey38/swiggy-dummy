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
      <li><span id="secure">SECURE CHECKOUT</span></li>
      <li id="shift-right"><a href="help&support.php"><img class="icon" src="image/helpcare.png" heaght="20" width="20"> Help</a></li>
      <li>
        <?php if (!isset($_COOKIE['number'])){ ?>
          <span onclick="OpenLogin()" class="sideshow"><img class="icon" id="icon" src="image/admin1.png" heaght="20" width="20">Sign In</span>
        <?php }else{ ?>
          <a href="logout.php" class="sideshow">Logout</a>
        <?php } ?>
      </li>
    </ul>
  </div>
  <?php include 'singin-login.php'; ?>