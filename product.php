<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <link rel="stylesheet" href="/static/css/scrollbar.css">
    <link rel="stylesheet" href="/static/css/animate.css">
    <link rel="stylesheet" href="/static/css/slider.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="icon" href="/static/images/logo.svg">
    <script src="/static/js/libs/slider.min.js" type="text/javascript"></script>
    <title>ARVINE - product</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "includes/header.php" ?>
      <main class="main">
        <section class="product">
          <img class="product__background" src="/static/images/background.png" alt="">
          <div class="product__lore">
            <span class="product__lore-title">Our 100% natural ingridients</span>
            <img class="product__lore-img" src="/static/images/bottle_white.png" alt="">
            <span class="product__lore-title">From most qualified vineyards</span>
          </div>
          <div class="product__slider">
            <div class="slider">
              <div class="slider__container">
                <div class="slider__wrapper">
                  <div class="slider__items">
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <span>"Vernila" grapes. Light rosé wine is best obtained from the squeezed juice of Moldova</span>
                        <img src="/static/images/product_slider/bluegrape.png" alt="">
                        <span>All of these varieties tend to have normal acidity and can be used as Beaujolais Nouveau</span>
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <span>Pinot Noir grapes. Pinot Noir wines are a celebration of taste with velvety tannins, a variety of berry shades and light mineral nuances</span>
                        <img src="/static/images/product_slider/drakbluegrape.png" alt="">
                        <span>Delicate aroma of cherry confiture in your glass. also wines from this special variety are considered the most suitable for romance</span>
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <span>Shiraz (Syrah) grapes. It is believed that the variety is of medium maturation and ripeness</span>
                        <img src="/static/images/product_slider/purplegrape.png" alt="">
                        <span>The wines of this variety are distinguished by a high concentration of tannin, density, and rich color. In the aroma, there are tones of chocolate with black pepper</span>
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <span>Grenache grapes. In addition to a refined and very light red wine, rosé wines are also produced from this sort</span>
                        <img src="/static/images/product_slider/redgrape.png" alt="">
                        <span>This ancient variety is now gaining wild popularity. Wines with a rich fruity aroma with caramel tones and a balanced taste</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="/static/js/product.js" type="text/javascript"></script>
        </section>
      </main>
      <?php include "includes/footer.php" ?>
    </div>
  </body>
</html>
