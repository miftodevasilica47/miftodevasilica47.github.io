function changeColor() {
    var img = document.getElementById('football');
    var hue = Math.floor(Math.random() * 360);
    img.style.filter = 'hue-rotate(' + hue + 'deg)';
    jump();
  }