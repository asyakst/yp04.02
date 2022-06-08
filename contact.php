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
            <span class="product__lore-title">Our Head office is placed at</span>
            <img class="product__lore-img" src="/static/images/bottle_white.png" alt="">
            <span class="product__lore-title">Moscow, Nikolskaya st. 23</span>
          </div>
          <div class="product__slider">
            <div class="slider">
              <div class="slider__container">
                <div class="slider__wrapper">
                  <div class="slider__items">
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <img src="static\images\contact_slider\contact_slider4.png" alt="">
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <img src="/static/images/contact_slider/contact_slider3.png" alt="">
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <img src="/static/images/contact_slider/contact_slider1.png" alt="">
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <img src="static\images\contact_slider\contact_slider2.png" alt="">
                      </div>
                    </div>
                    <div class="slider__item">
                      <div class="product-slider-item">
                        <img src="/static/images/contact_slider/contact_slider5.png" alt="">
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="/static/js/product.js" type="text/javascript"></script>
        </section>
        <section class="positions">
          <div class="positions-item">
            <div class="positions-item__header">
              <img src="static\images\position\position_logo.svg" alt="">
              <strong>OUR EMPLOYEES</strong>
            </div>
            <div class="positions-item__content">
              <div class="positions-item__contact">
                <img src="static\images\position\position_men1.png" alt="">
                <span>CEO</span>
              </div>
              <div class="positions-item__contact">
                <img src="static\images\position\position_men2.png" alt="">
                <span>Marketing Director</span>
              </div>
              <div class="positions-item__contact">
                <img src="static\images\position\position_men3.png" alt="">
                <span>Investment Specialist</span>
              </div>
            </div>
            <div class="positions-item__content">
              <div class="positions-item__contact">
                <img src="static\images\position\position_women1.png" alt="">
                <span>Supervisors</span>
              </div>
              <div class="positions-item__contact">
                <img src="static\images\position\position_women2.png" alt="">
                <span>Financial Analyst</span>
              </div>
              <div class="positions-item__contact">
                <img src="static\images\position\position_women3.png" alt="">
                <span>Director</span>
              </div>
            </div>
          </div>
        </section>
      </main>
      <?php include "includes/footer.php" ?>
    </div>
     <!-- <section class="positions">
      <div class="position">
        <div id="position_Director" class="inner-position">
          <div class-"position__image">
            <img src="/static/images/position/Director" alt="">
          </div>
          <div class="position__lore">
            <span class="position__lore-title style--second-lite">Radislav</span>
            <span class="shop__lore-subtitle style--second-lite">Director</span>
            <span class="shop__lore-subtitle">Moscow is the capital of Russia. Political, economic and cultural center. The most populated city in Russia and Europe. Our largest shop is located on Tverskaya Street, wich is the main street of Moscow and the largest street of the Tverskoy district.</span>
          </div>
         </div>
        </div>
      </section> -->
  </body>
</html>
