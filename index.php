<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <link rel="stylesheet" href="/static/css/scrollbar.css">
    <link rel="stylesheet" href="/static/css/animate.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <script src="/static/js/libs/ScrollEvent.js" type="text/javascript"></script>
    <script src="/static/js/index.js" type="text/javascript"></script>
    <link rel="icon" href="/static/images/logo.svg">
    <title>ARVINE</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "includes/header.php" ?>
      <main class="main">
        <section class="preview">
          <div class="preview__main">
            <img class="preview__background" src="/static/images/preview-background.png" alt="">
            <a href="#vineyards">
              <img class="preview__image-small" src="/static/images/Bestvineyards.png" alt="">
            </a>
            <img class="preview__image-main" src="/static/images/bottle_shadow.png" alt="">
            <a href="#ingridients">
              <img class="preview__image-small" src="/static/images/Bestingridients.png" alt="">
            </a>
          </div>
          <div class="preview__continue">
            <span class="preview__span">CONTINUE</span>
            <img class="preview__arrow" src="/static/images/icons/down.svg" alt="">
          </div>
        </section>
        <section id="vineyards" class="view">
          <img id="vineyards-image" height="1035" width="265" class="view__image" src="/static/images/vine.png" alt="">
          <video class="view__video" src="/static/video/Vineyard.mp4" autoplay muted loop></video>
          <div class="view__lore">
            <img class="view__lore-img" src="/static/images/Bestvineyards.png" alt="">
            <span class="view__lore-text">Arvine is one of the top wine producers, with the majority of its 400 acres of vineyards dedicated to all kind of grape sorts. The estate is surrounded by the classic Black and Azov Seas, hills, it’s region that is home to some of the most beautiful wineries in Krym</span>
          </div>
        </section>
        <section id="ingridients" class="view">
          <img id="ingridients-image" height="1035" width="265" class="view__image" src="/static/images/vine2.png" alt="">
          <div class="view__lore">
            <img class="view__lore-img" src="/static/images/Bestingridients.png" alt="">
            <span class="view__lore-text">We concern a lot about the taste of our product, that’s why we raise only the best grape varieties. The best pickers go to the vineyard, harvesting the prime harvest. Our product is stored in barrels made of exclusively tested and high-quality wood</span>
          </div>
          <video class="view__video" src="/static/video/Ingridients.mp4" autoplay muted loop></video>
        </section>
      </main>
      <?php include "includes/footer.php" ?>
    </div>
  </body>
</html>
