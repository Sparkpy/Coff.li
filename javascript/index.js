const subtext = document.getElementById("subtext");

var i = 0;
var txt = "All you need to make homebrew coffee."; /* The text */
var speed = 25; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    subtext.innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter()