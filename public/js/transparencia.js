var icone = document.getElementById("barra");

window.addEventListener("scroll", function() {
  var iconeRect = icone.getBoundingClientRect();
  
  if (iconeRect.top <= 0) {
    icone.style.opacity = "0.7";
  } else {
    icone.style.opacity = "1";
  }
});
