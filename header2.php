<?php 
  include 'header.php';
?>
<div id="deepak" class="main-container">
  <div id="header-bottom">
    <div id="header-bottom1">
      <div>
        <a href="next-page.php?id=1"><img class="nextImg" src="image/pizza1.jpeg" height="260" width="260"></a>
      </div>
      <div>
        <a href="next-page.php?id=2"><img class="nextImg" src="image/pizza3.jpeg" height="260" width="260"></a>
      </div>
      <div>
        <a href="next-page.php?id=3"><img class="nextImg" src="image/pizza4.jpeg" height="260" width="260"></a>
      </div>
      <div>
        <a href="next-page.php?id=14"><img class="nextImg" src="image/pizza6.jpeg" height="260" width="260"></a>
      </div>
      <div>
        <a href="next-page.php?id=10"><img class="nextImg" src="image/pizza7.jpeg" height="260" width="260"></a>
      </div>
      <div>
        <a href="next-page.php?id=20"><img class="nextImg" src="image/pizza8.jpeg" height="260" width="260"></a>
      </div>
      <span onclick="nextImage()" class="next-image">&#8611;</span>
    </div>
  </div>

  <!-- <link href="css/style.css" rel="stylesheet"> -->

  <div id="header2">
    <h1>40 restaurants</h1>
    <a class="header2-link" href="index.php">Relevanse</a>
    <a class="active" href="delevery.php">Delevery Time</a>
    <a class="active" href="rating.php">Raiting</a>
    <a class="active" href="low-to-high.php">Cost: Low to High</a>
    <a class="active" href="high-to-low.php">Cost: High to Low</a>
    <span onClick="ShowFilter()">Filter<img src="image/filter.png" height="18" width="18"></span>
  </div>

  <div class="filter1">
    <div class="innerfilter">
      <form action="filter-show.php" method="post">
        <table>
          <tr>
            <td>
              <header>
                <h3><span class="close-popup" onClick="HideFilter()">X</span> Filters</h3>
              </header>

              <label class="container">Pizza
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="pizza">
                <span class="checkmark"></span>
              </label>
              <label class="container">Bakery
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="bakery">
                <span class="checkmark"></span>
              </label>
              <label class="container">Biryani
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="biryani">
                <span class="checkmark"></span>
              </label>
              <label class="container">Chaat
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="chat">
                <span class="checkmark"></span>
              </label>
              <label class="container">Gol Gappa
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="gol gappa">
                <span class="checkmark"></span>
              </label>
              <label class="container">Bati Chokha
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="bati chokha">
                <span class="checkmark"></span>
              </label>
              <label class="container">Solo Pizza
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="solo pizza">
                <span class="checkmark"></span>
              </label>
              <label class="container">KFG
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="kfg">
                <span class="checkmark"></span>
              </label>
              <label class="container">Cake
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="cake">
                <span class="checkmark"></span>
              </label>
              <label class="container">Burger
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="burger">
                <span class="checkmark"></span>
              </label>
              <label class="container">Vada Pav
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="vada pav">
                <span class="checkmark"></span>
              </label>
              <label class="container">Sweets
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="sweet">
                <span class="checkmark"></span>
              </label>
              <label class="container">Mc Donald's
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="mcdonald">
                <span class="checkmark"></span>
              </label>
            </td>
            <td>
              <label class="container">Rollarappaa
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="rollarappa">
                <span class="checkmark"></span>
              </label>
              <label class="container">Pav Bhaji
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="Pav Bhaji">
                <span class="checkmark"></span>
              </label>
              <label class="container">Cake
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="cake">
                <span class="checkmark"></span>
              </label>
              <label class="container">Plaza
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="Plaza">
                <span class="checkmark"></span>
              </label>
              <label class="container">Pizza Hut
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="pizza hut">
                <span class="checkmark"></span>
              </label>
              <label class="container">ice creame
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="ice creame">
                <span class="checkmark"></span>
              </label>
              <label class="container">Ice Cream Cakes
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]">
                <span class="checkmark"></span>
              </label>
              <label class="container">Burger King
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="burger king">
                <span class="checkmark"></span>
              </label>
              <label class="container">Solo Pizza
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="solo pizza">
                <span class="checkmark"></span>
              </label>
              <label class="container">Bhaji
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="bhaji">
                <span class="checkmark"></span>
              </label>
              <label class="container">Al Balk Pro
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="al balk pro">
                <span class="checkmark"></span>
              </label>
              <label class="container">Chhola Bhatora
                <input type="checkbox" onclick="enableMe()" class="checkme" name="check[]" value="chhola">
                <span class="checkmark"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn1" onclick="ClearAll()"><b>CLEAR</b></button>
            </td>
            <td>
              <button class="btn2" onclick="isChecked()" type="submit"><b>SHOW Dishes</b></button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="javascript/change.js"></script>
  <script type="text/javascript" src="javascript/scroll.js"></script>
  <script type="text/javascript" src="javascript/loginShow.js"></script>