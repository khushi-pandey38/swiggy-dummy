<?php include 'header.php'; ?>
<div class="offer-page-parent">
  <div class="offer-page">
    
    <img src="image/offer1.png">
    <div class="contant">
      <div class="text-offer">Offers for you</div>
      <div class="text1">Explore top deals and offers exclusively for you!</div>
    </div>

  </div>
  <div class="option">
    <a href="offer.php">Restaurant offers</a>
    <a href="#">Payment offers/Coupons</a>
  </div>
</div>

<div class="product">
  <table>
    <?php
      include 'config.php';
      $sql = "SELECT *FROM swiggy_rec ORDER BY offer DESC";
      $res = mysqli_query($conn,$sql) or die("Query Failed");

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
            <span class="rate">&#9733; <?php echo $row['rating']; ?></span>
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

          //echo "</td></tr>";
            }
          }
        ?>
      <!-- </td>
    </tr> -->
  </table>
</div>
