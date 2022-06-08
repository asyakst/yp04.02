<?php
  $url = $_SERVER['REQUEST_URI'];
?>
<header class="header">
  <div class="inner-header">
    <a class="header__button <?php if($url == "/about.php") echo " header--here" ?>" href="/about.php">ABOUT US</a>
    <a class="header__button <?php if($url == "/product.php") echo " header--here" ?>" href="/product.php">PRODUCT</a>
    <a href="/">
      <img class="header__logo" src="/static/images/logoword.png" alt="">
    </a>
    <a class="header__button <?php if($url == "/contact.php") echo " header--here" ?>" href="/contact.php">CONTACT</a>
    <a class="header__button <?php if($url == "/location.php") echo " header--here" ?>" href="/location.php">LOCATION</a>
  </div>
</header>
