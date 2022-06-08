moscow = new ScrollEvent("shop_Moscow", "shop--open", -400);
petersburg = new ScrollEvent("shop_Petersburg", "shop--open", 200);
pyatigorsk = new ScrollEvent("shop_Pyatigorsk", "shop--open", 700);
nizhny_novgorod = new ScrollEvent("shop_Nizhny_Novgorod", "shop--open", 1200);
veliky_novgorod = new ScrollEvent("shop_Veliky_Novgorod", "shop--open", 1700);

window.addEventListener('scroll', function(e) {
  moscow.check();
  petersburg.check();
  pyatigorsk.check();
  nizhny_novgorod.check();
  veliky_novgorod.check();
});
