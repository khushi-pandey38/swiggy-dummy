<?php include 'header.php'; ?>
<div class="main-box">
  <div class="main-box1">
    <div class="cross">&#10060;</div>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="login-name">
        <h1>Login</h1>
        <div>
          <h5>or</h5> <a href="signup.php">create an account</a>
        </div>
        <img src="image/a.png" height="100" width="100">
      </div>

      <div class="button-submit">
        <input type="text" placeholder="Phone number" required>
        <input type="submit" value="LOGIN" name="LOGIN">
      </div>

      <div class="term">By clicking on Login, I accept the <a href="term&condition.php">Terms & Conditions & Privacy
      Policy</a></div>
    </form>
    <?php
      ob_start();
      if (isset($_REQUEST['LOGIN']))
      {
        $number = mysqli_real_escape_string($conn,$_POST['number']);

        $sql = "SELECT FROM user WHERE number='{$number}'";
        $res = mysqli_query($conn, $sql) or die("Connection Failed");

        if ($res >=1 )
        header("Location: http://localhost/PHP/swiggy/index.php");
      }
      ob_end_flush();
    ?>
  </div>
</div>