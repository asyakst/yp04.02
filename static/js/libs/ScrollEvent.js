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
