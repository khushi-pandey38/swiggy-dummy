<?php
  setcookie("name","",time()-60*60*24*10);
  setcookie("number","",time()-60*60*24*10);
  setcookie("email","",time()-60*60*24*10);
  setcookie("passowrd","",time()-60*60*24*10);

  header("Location: http://localhost/PHP/swiggy/index.php");
?>