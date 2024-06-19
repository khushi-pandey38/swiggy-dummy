<?php 
  ob_start();
  include 'header3.php';
  if (!isset($_COOKIE['name']) && !isset($_COOKIE['qty'])){
?>

<div class="fullpage">
  <img src="image/emptylogo.png" id="emptylogo">

  <div class="emptycontent">Your cart is empty</div>
  <div class="homecontent">You can go to home page to view more restaurants</div>

  <a href="index.php" id="btn_rest">SEE RESTAURENTS NEAR YOU</a>
</div>
<?php }else{ ?>
<div class="parent-box">
  <div class="parent-box1">
    <div class="box">
      <!-- <div class="box-child"> -->
      <div class="subbox">
        <div class="h1">
          <h1>Account</h1>
        </div>
        <div class="img"><img src="image\a.png"></div>
        <div class="img-text">To place your order now, log in to your existing account or sign up</div>
        <?php if (!isset($_COOKIE['number'])){ ?>
        <button class="btn" onclick="ShowLoginPay()">Have an account?<br><b>LOG IN</b></button>
        <button class="btn" onclick="ShowSigninPay()">new to swiggy?<br><b>SIGN UP</b></button>

        <div class="pay-login">
          <form action="login-query1.php" method="post">
            <div class="pay-login-child">
              <p>Enter login details or <span onclick="ShowSigninPay()">create an account</span></p>
              <input type="number" name="number" max="9999999999" min="1000000000" required placeholder="Phone number">
              <input type="submit" name="btn" value="Login">
              <div class="term">By clicking on Login, I accept the <a href="term&condition.php"><b>Terms & Conditions &
                    Privacy
                    Policy</b></a></div>
            </div>
          </form>
        </div>

        <div class="pay-login1">
          <form action="signin-query1.php" method="post">
            <div class="pay-login-child">
              <p>Enter login details or <span onclick="ShowLoginPay()">create an account</span></p>
              <input type="number" class="input-box" id="input-box3" placeholder="Phone number" name="number" required>
              <input type="name" class="input-box" placeholder="Name" name="name" required>
              <input type="email" class="input-box" placeholder="Email" name="email" required>
              <input type="password" class="input-box" id="input-box1" name="password" placeholder="Password" required>
              <input type="submit" name="btn" value="Login">
              <div class="term">By clicking on Login, I accept the <a href="term&condition.php"><b>Terms & Conditions &
                    Privacy
                    Policy</b></a></div>
            </div>
          </form>
        </div>
        <?php }else { ?>
        <a href="pay.php" class="pay-money">Pay</a>
        <?php } ?>
        <div class="admin-img"><img src="image\admin3.png" height="40" width="40"></div>
      </div>



      <div class="subbox" id="subbox">
        <h1>Delivery address</h1>
        <div class="admin-img1"><img src="image\loc3.jpeg" height="40" width="40"></div>
      </div>
      <div class="subbox" id="subbox">
        <h1>Payment</h1>
        <div class="admin-img2"><img src="image\pay3.jpeg" height="40" width="40"></div>
      </div>
      <!-- </div> -->
    </div>

    <script type="text/javascript" src="javascript/payment.js"></script>

    <!-- payment area-->
    <div class="subbox1">
      <div class="header-part">

        <div class="cart-item1">
          <div id="subbox1-img">
            <img src="image/<?php echo $_COOKIE['my-image-name']; ?>" id="setProduct" height="45" width="45">
            <span id="setItemName">Chiss Pizza</span>
          </div>
        </div>

        <div class="text-div">
          <input type="checkbox" class="checkbox">
          <span class="span-text">
            <p class="text">Opt in for No-contact Delivery </p>
            Unwell, or avoiding contact? Please select no-contact delivery. Partner will safely place the order outside
            your door (not for COD)
          </span>
        </div>

        <div class="bill-details">
          <h5>Bill Details</h5>
          <div>
            <span>Item Total</span>
            <span id="money">Rs. <b id='total-cost'></b></span>
          </div>
          <div>
            <span>Delevery Fee | 1.0kms</span>
            <span id="delevery">Rs. 10</span>
          </div>
          <div id="t-tax">
            <span>taxes and charges</span>
            <span id="tax">Rs. <b id="tax-tax1"></b></span>
          </div>
        </div>
        <div id="to-pay">
          <strong>To Pay</strong>
          <strong id="to-pay-money"></strong>
        </div>
      </div>
    </div>
    <div id="line-cross"></div>
  </div>
</div>
<?php 
  } 
  ob_end_flush();
?>
<script type="text/javascript" src="javascript/payment.js"></script>
<script type="text/javascript" src="javascript/scroll-pay.js"></script>