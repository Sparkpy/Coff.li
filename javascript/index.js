var i = 0;
var txt = 'All you need to make quality homebrew coffee.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("subtext").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
