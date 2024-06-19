<?php
  ob_start();
  include 'config.php';
  $number = mysqli_real_escape_string($conn,$_POST['number']);

  $sql = "SELECT number FROM `user` WHERE number='{$number}'";
  // echo $sql;
  $res = mysqli_query($conn, $sql) or die("Connection Failed");

  if (mysqli_num_rows($res)>=1)
  {
    setcookie("number",$number,time()+(60*60*24*10));
  }
  header("Location: http://localhost/PHP/swiggy/payment.php");
  mysqli_close($conn);
  ob_end_flush();
?>