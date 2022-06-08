vineyards = new ScrollEvent("vineyards-image", "view__image--animate", -400);
ingridients = new ScrollEvent("ingridients-image", "view__image--animate", 600);

window.addEventListener('scroll', function(e) {
  vineyards.check();
  ingridients.check();
});
