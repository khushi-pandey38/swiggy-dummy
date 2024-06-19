<?php include 'header2.php' ?>

<div class="product">
  <table>
    <?php
      include 'config.php';
      $sql = "SELECT *FROM swiggy_rec ORDER BY price";
      $res = mysqli_query($conn,$sql) or die("Query Failed");

      if (mysqli_num_rows($res)>=1)
      {
        $i = 0;
        while ($row = mysqli_fetch_assoc($res))
        {
          if ($i%4 == 0)
          echo "<tr><td><a href='next-page.php?id={$row['id']}'>";
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

          if ($i%4 == 0)
          echo "</a></td></tr>";
          else
          echo "</a></td>";

          //echo "</td></tr>";
            }
          }
          mysqli_close($conn);
        ?>
    <!-- </td>
    </tr> -->
  </table>
</div>