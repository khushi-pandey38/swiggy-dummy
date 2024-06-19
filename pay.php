<?php
  ob_start();
  if (!isset($_COOKIE['name']) && !isset($_COOKIE['qty'])){
    header("Location: http://localhost/PHP/swiggy/index.php");
  }
  else
  {
    setcookie("img","",time()-(60*60*48));
    setcookie("name","",time()-(60*60*48));
    setcookie("price","",time()-(60*60*48));
    setcookie("qty","",time()-(60*60*48));

    echo "<div style='position: absolute; top: 40%; left:40%;'><hr>";
    echo "<h1><a href='index.php' style='text-decoration:none; color:green;'>Payment is Successfull</a></h1>";
    echo "<hr></div>";
?>
<script type="text/javascript" src="javascript/remove-all.js"></script>

<?php
  }
  ob_end_flush();
?>