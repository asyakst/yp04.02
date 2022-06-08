class ScrollEvent {
  constructor(id, className, offset) {
    this.id = id,
    this.offset = offset,
    this.className = className,
    this.trigger = false
  }

  static height = window.innerHeight;

  check() {
    if (ScrollEvent.height + this.offset < window.scrollY && this.trigger == false) {
      this.trigger = true;
      document.getElementById(this.id).classList.add(this.className);
    }
  }
}

vineyards = new ScrollEvent("vineyards-image", "view__image--animate", -400);
ingridients = new ScrollEvent("ingridients-image", "view__image--animate", 600);

window.addEventListener('scroll', function(e) {
  vineyards.check();
  ingridients.check();
  test.check();
});
