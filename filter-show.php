<?php 
  ob_start();
  include 'header.php';
  if (!isset($_POST['check'])) {
    header("Location: http://localhost/PHP/swiggy/index.php");
  }

?>
<div class="product" id="data-area">
  <table>
  <?php
    include 'config.php';

    $data = $_POST['check'];
    $f = 0;
    $b = 0;
    for ($j=0; $j<count($data); $j++)
    {
      //$name = "";
      $name = "%".$data[$j]."%";
      // echo $name;
      $sql = "SELECT *FROM swiggy_rec WHERE name LIKE '{$name}'";
    
      $res = mysqli_query($conn,$sql) or die("Query Failed");

      if (mysqli_num_rows($res)>=1)
      {
        $i = 0;
        $f = $f+1;
        while ($row = mysqli_fetch_assoc($res))
        {
          
          if ($i%4 == 0 && $b%4 == 0)
          echo "<tr><td><a href='next-page.php?id={$row['id']} '>";
          else
          echo "<td><a href='next-page.php?id={$row['id']}'>";
          $i = $i+1;
          $b = $b+1;
      ?>
    <div class="product-part">
      <img src="image/<?php echo $row['image']; ?>" height="160" width="254">
      <div class="pizza-name"><?php echo $row['name']; ?></div>
      <div class="pizza-country"><?php echo $row['country']; ?></div>
      <div class="rating">
        <?php
        $rating = (float)$row['rating'];
        if ($rating >= 4.0){
      ?>
        <span class="rate">&#9733; <?php echo $row['rating']; ?></span>
        <?php }else if($rating >= 3.0){ ?>
        <span class="rate" style="background-color: orange" ;>&#9733; <?php echo $row['rating']; ?></span>
        <?php }else{ ?>
        <span class="rate" style="background-color: red;">&#9733; <?php echo $row['rating']; ?></span>
        <?php } ?>

        <span>.</span>
        <span><?php echo $row['time']; ?> MIN</span>
        <span>.</span>
        <span>&#x20B9; <?php echo $row['price']; ?> FOR TWO</span>
      </div>
      <div class="offer">
        <?php echo $row['offer']; ?>% OFF | Use Party
      </div>
      <div class="payment">Up to 100 Paytm Cashback</div>
      <div class="quick-view">
        <a href="#">QUICK VIEW</a>
      </div>
    </div>
    <?php

        if ($i%4 == 0 && $b%4 == 0)
        echo "</a></td></tr>";
        else
        echo "</a></td>";

          }
        }
      }
      if ($f <= 0)
      echo "<div id='filter-cart'><div><a href='index.php'><img src='image/dishes.png'></a></div></div>";
      mysqli_close($conn);
      ob_end_flush();
    ?>
  </table>
</div>
<script type="text/javascript" src="javascript/filter.js"></script>