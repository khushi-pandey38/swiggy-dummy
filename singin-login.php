  <!-- Used in login -->
  <div class="main-box">
    <form action="login-query.php" method="post">
      <div class="main-box1">
        <div class="main-box1-child">
          <div onclick="CloseLogin()" class="cross">&#10060;</div>

          <div class="login-name">
            <h1>Log In</h1>
            <div>
              <h5>or</h5> <span onclick="ShowSignup()">create an account</span>
            </div>
            <img src="image/a.png" height="100" width="100">
          </div>

          <div class="button-submit">
            <input type="number" placeholder="Phone number" name="number" required>
            <input type="submit" value="LOGIN" name="LOGIN">
          </div>
          <div class="term">By clicking on Login, I accept the <a href="term&condition.php">Terms & Conditions & Privacy
              Policy</a></div>
        </div>  
      </div>
    </form>
  </div>

  <!-- Signin Page -->
  <div class="main-box3">
    <div class="main-box1">
      <div class="main-box1-child">
        <div onclick="CloseSignup()" class="cross">&#10060;</div>
        <form action="signin-query.php" method="post">
          <div class="login-name">
            <h1>Sign Up</h1>
            <div>
              <h5>or</h5><span onclick="OpenLogin()"> create an account</span>
            </div>
            <img src="image/a.png" height="100" width="100">
          </div>

          <div class="button-submit">
            <input type="number" class="input-box" placeholder="Phone number" name="number" required>
            <input type="name" class="input-box" placeholder="Name" name="name" required>
            <input type="email" class="input-box" placeholder="Email" name="email" required>
            <input type="password" class="input-box" id="input-box1" name="password" placeholder="Password" required>
            <!-- <input type="password" class="input-box" id="input-box1" placeholder="Password"> -->
            <h4>Have a referral code?</h4>
            <input type="submit" value="LOGIN">
          </div>

          <div class="term">By clicking on Login, I accept the <a href="term&condition.php">Terms & Conditions & Privacy
              Policy</a></div>
        </form>
      </div>
    </div>
  </div>