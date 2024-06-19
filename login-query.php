<?php
  ob_start();
  include 'config.php';
  $number = mysqli_real_escape_string($conn,$_POST['number']);

  $sql = "SELECT *FROM user WHERE number={$number}";
  $res = mysqli_query($conn, $sql) or die("Connection Failed");

  if ($res >=1 )
  {
    setcookie("number",$number,time()+(60*60*24*10));
   
  }
  mysqli_close($conn);
  header("Location: http://localhost/PHP/swiggy/index.php");
  ob_end_flush();
?>