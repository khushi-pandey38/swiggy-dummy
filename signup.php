<?php include 'header.php'; ?>
<div class="main-box">
  <div class="main-box1">
    <div onclick="close()" class="cross">&#10060;</div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="login-name">
        <h1>Sign up</h1>
        <div>
          <h5>or</h5> <a href="login.php">create an account</a>
        </div>
        <img src="image/a.png" height="100" width="100">
      </div>

      <div class="button-submit">
        <input type="number" class="input-box" placeholder="Phone number" name="number" required>
        <input type="name" class="input-box" placeholder="Name" name="name" required>
        <input type="email" class="input-box" placeholder="Email" name="email" required>
        <input type="password" class="input-box" id="input-box1" placeholder="Password" name="password" required>
        <!-- <input type="password" class="input-box" id="input-box1" placeholder="Password"> -->
        <h4>Have a referral code?</h4>
        <input type="submit" value="SIGNIN" name="SIGNIN">
      </div>

      <div class="term">By clicking on Login, I accept the <a href="term&condition.php">Terms & Conditions & Privacy
          Policy</a></div>
    </form>
    <?php
      ob_start();
      if (isset($_REQUEST['SIGNIN']))
      {
        include 'config.php';
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $number = mysqli_real_escape_string($conn,$_POST['number']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $name = md5($_POST['name']);

        $sql = "INSERT INTO user(name, number, email, password) VALUES('{$name}','{$number}','{$email}','{$password}')";
        setcookie("number",number,time()+(60*60*24*10));
        setcookie("password",password,time()+(60*60*24*10));
        
        mysqli_query($conn, $sql) or die("Connection Failed");
        // header("Location: http://localhost/PHP/swiggy/home.php");
      }
      header("Location: http://localhost/PHP/swiggy/index.php");
      ob_end_flush();
    ?>
  </div>
</div>