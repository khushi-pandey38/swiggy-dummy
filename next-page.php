<?php
  ob_start();
  include 'header.php';
  if (!isset($_GET['id']))
  header("Location: http://localhost/PHP/swiggy/index.php");
  else
  {
?>
<div class="view-part">
  <div class="view-part1">
    <?php
    $id = $_GET['id'];
    include 'config.php';
    
    $sql = "SELECT *FROM swiggy_rec WHERE id={$id}";
    //echo $sql;
    $res = mysqli_query($conn,$sql) or die("Query Failed");

    if (mysqli_num_rows($res)>=1)
    {
      $i = 0;
      while ($row = mysqli_fetch_assoc($res))
      {
        // session_start();
        setcookie("my-image-name",$row['image'],time()+(60*60*48));
        //$_SESSION['myimagename'] = $row['image'];
    ?>
    <img src="image/<?php echo $row['image']; ?>" class="offer-img" height="165" width="254">
    <table>
      <tr class="p-name">
        <td colspan="3"><?php echo $row['name']; ?></td>
      </tr>

      <tr class="p-country">
        <td colspan="3"><?php echo $row['country']; ?></td>
      </tr>

      <tr class="p-address">
        <td colspan="3">Prayagraj</td>
      </tr>

      <tr class="p-time">
        <td>&#9733; <?php echo $row['rating']; ?></td>
        <td>35 mins</td>
        <td>Rs <?php echo $row['price']; ?></td>
      </tr>

      <tr class="p-time-tr">
        <td>500+ Ratings</td>
        <td>Delevery Time</td>
        <td>Cost for two</td>
      </tr>

    </table>
    <img src="image/offer-sot1.png" class="offer-img1" height="165" width="324">
    <?php }} ?>
  </div>

  <div class="filter">
    <span>
      <input type="search" placeholder="Search">
    </span>

    <span class="filter-span">
      <input type="checkbox">&nbsp; Veg Only
    </span>

    <span class="filter-span">
      <input type="checkbox">&nbsp; Favorate
    </span>
  </div>

</div>



<div class="data">
  <div class="left-data">
    <a href="#link-part2">Recommended</a>
    <a href="#link-part3">Main Course</a>
    <a href="#link-part4">Crishpy Twisters</a>
    <a href="#link-part5">AI-baik Combos</a>
    <a href="#link-part6">AI-baik Backet</a>
    <a href="#link-part1">Dips</a>
  </div>

  <div class="middle-data">
    <h1>Recommended</h1>

    <?php
      include 'config.php';
      $sql = "SELECT *FROM add_extra";
      $res = mysqli_query($conn,$sql) or die("Query Failed");

      if (mysqli_num_rows($res)>=1)
      {
        $i = 0;
        while ($row = mysqli_fetch_assoc($res))
        {

    ?>

    <div class="middle-data-child" id="link-part<?php echo $row['id']; ?>">
      <div class="middle-div">&#9733; Bestseller</div>
      <div class="middle-div1"><?php echo $row['name']; ?></div>
      <div class="middle-div2">&#x20B9; <?php echo $row['rupees']; ?></div>
      <img src="image/<?php echo $row['image']; ?>" width="118" onclick="AddItem(this)" height="96">

      <button id="button-id<?php echo $row['id']; ?>" class="add-button"
        onclick="AddItem(`<?php echo $row['name']; ?>`,<?php echo $row['id']; ?>,<?php echo $row['rupees']; ?>,`<?php echo $row['image']; ?>`)">ADD</button>
      <!-- <a href="next-page.php?id=<php echo $id; ?>&&pass=<php echo $row'id']; ?>" class="add-button">ADD</a> -->
    </div>
    <?php 
        }}
    ?>
  </div>
  <div class="right-data">
    <div class="right-data1">
      <form action="payment.php" method="post">
        <h1>Cart</h1>
        <h5>ITEMS</h5>
        <!-- Here all value print -->
        <div class="cart-item1">

        </div>

        <div class="subtotal">
          <div>Subtotal</div>
          <span class="total">&#8377; <b class="trs">0</b></span>
          <input type="hidden" name="total-rupees" value="">
          <h5>Extra charges may apply</h5>

          <input type="hidden" name="product_img" id="product_img" value="">
          <input type="hidden" name="product_qty" id="product_qty" value="">
          <input type="hidden" name="product_name" id="product_name" value="">
          <input type="hidden" name="product_price" id="product_price" value="">
        </div>
        <input class="checkout" type="submit" value="CHECKOUT &#8594;">
      </form>
    </div>
  </div>
</div>
<?php 
}
ob_end_flush(); 
?>
<script type="text/javascript" src="javascript/orderScroll.js"></script>