window.onload = function() {
  var kuulid = document.querySelectorAll(".bead");
  console.log("init");
  for (var i = 0; i < kuulid.length; i++) {
    kuulid[i].onclick = function () {
      if (window.getComputedStyle(this).cssFloat == "left") {
         this.style.cssFloat = "right";
      } else {
                this.style.cssFloat = "left";
      }
    }
  } 
}
