<?php
  ob_start();
  if (!isset($_POST['search']))
  {
    header("Location: http://localhost/PHP/swiggy/index.php");
  }
  include 'header.php';
  
  $search = strtolower($_POST['search']);
  include 'config.php';
  $sql = "SELECT *FROM swiggy_rec WHERE name LIKE '%{$search}%'";
  $res = mysqli_query($conn,$sql) or die("Query Failed");

  $count = mysqli_num_rows($res);
  if ($count >= 1)
  echo "<p id='number_of_result'>{$count} result matchs on your Dishes</p>";  
  else
  echo "<p id='number_of_result' style='color:red'>No any Dishes found</p>";  
?>

<div class="product">
  
  <table>
    <?php      
      if (mysqli_num_rows($res)>=1)
      {
        $i = 0;
        while ($row = mysqli_fetch_assoc($res))
        {
          if ($i%4 == 0)
          echo "<tr><td><a href='next-page.php?id={$row['id']} '>";
          else
          echo "<td><a href='next-page.php?id={$row['id']}'>";
          $i = $i+1;
    ?>
    <!-- <tr>
      <td> -->
    <div class="product-part">
      <img src="image/<?php echo $row['image']; ?>" height="160" width="254">
      <div class="pizza-name"><?php echo $row['name']; ?></div>
      <div class="pizza-country"><?php echo $row['country']; ?></div>
      <div class="rating">
        <?php
          $rating = (float)$row['rating'];
          if ($rating >= 3.0){
        ?>
        <span class="rate">&#9733; <?php echo $row['rating']; ?></span>
        <?php }else if($rating >= 2.0){ ?>
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

          if ($i%4 == 0)
          echo "</a></td></tr>";
          else
          echo "</a></td>";
            }
          }
          else{
            echo "<div id='search-not-found'><img src='image/dishes.png'></div>";
          }
          mysqli_close($conn);
          ob_end_flush();
        ?>
    <!-- </td>
    </tr> -->
  </table>
</div>
<script type="text/javascript" src="javascript/scroll-pay.js"></script>