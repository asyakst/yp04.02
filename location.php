<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <link rel="stylesheet" href="/static/css/scrollbar.css">
    <link rel="stylesheet" href="/static/css/animate.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="icon" href="/static/images/logo.svg">
    <script src="/static/js/libs/ScrollEvent.js" type="text/javascript"></script>
    <script src="/static/js/location.js" type="text/javascript"></script>
    <title>ARVINE - location</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "includes/header.php" ?>
      <main class="main">
        <section class="location">
          <?php include "includes/map.php" ?>
        </section>
        <section class="shops">
          <div class="shop">
            <div id="shop_Moscow" class="inner-shop">
              <div class="shop__image">
                <img src="/static/images/shops/Moscow.png" alt="">
              </div>
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Moscow</span>
                <span class="shop__lore-subtitle style--second-lite">Tverskaya street, 3k4</span>
                <span class="shop__lore-subtitle">Moscow is the capital of Russia. Political, economic and cultural center. The most populated city in Russia and Europe. Our largest shop is located on Tverskaya Street, wich is the main street of Moscow and the largest street of the Tverskoy district.</span>
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Petersburg" class="inner-shop">
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">St. Petersburg</span>
                <span class="shop__lore-subtitle style--second-lite">Nevsky prospect, 21</span>
                <span class="shop__lore-subtitle">Nevsky Prospekt is the main street of St. Petersburg, one of the most beautiful cities in Russia. This street stretches for 4.5 km from the Admiralty to the Alexander Nevsky Lavra. One of our most atmospheric points is located on this street.</span>
              </div>
              <div class="shop__image">
                <img src="/static/images/shops/Petersburg.png" alt="">
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Pyatigorsk" class="inner-shop">
              <div class="shop__image">
                <img src="/static/images/shops/Pyatigorsk.png" alt="">
              </div>
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Pyatigorsk</span>
                <span class="shop__lore-subtitle style--second-lite">Fucika street, 12</span>
                <span class="shop__lore-subtitle">Officially, Pyatigorsk is the center of the North Caucasian Federal District, and it is the only city that, being it, is not the center of a constituent entity of the Russian Federation. Our store is located on one of the most beautiful streets of this city.</span>
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Nizhny_Novgorod" class="inner-shop">
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Nizhny Novgorod</span>
                <span class="shop__lore-subtitle style--second-lite">Bolshaya Pokrovskaya street, 24</span>
                <span class="shop__lore-subtitle">Nizhny Novgorod is one of the main centers of river tourism in Russia. Our store is located on the main and most popular street that ends with Chkalovskaya staircase, which is the longest in the country. It consists of 560 steps.</span>
              </div>
              <div class="shop__image">
                <img src="/static/images/shops/Nizhny_Novgorod.png" alt="">
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Veliky_Novgorod" class="inner-shop">
              <div class="shop__image">
                <img src="/static/images/shops/Veliky_Novgorod.png" alt="">
              </div>
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Veliky Novgorod</span>
                <span class="shop__lore-subtitle style--second-lite">Bolshaya Moskovskaya street, 32</span>
                <span class="shop__lore-subtitle">One of the most ancient cities in Russia, beautiful and powerful, original and impressive, Veliky Novgorod was founded more than 1000 years ago. Our store is located on the main street of the city, which is one of the main thoroughfares of the city.</span>
              </div>
            </div>
          </div>
        </section>
      </main>
      <?php include "includes/footer.php" ?>
    </div>
  </body>
</html>
