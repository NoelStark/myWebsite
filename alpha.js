const theBox = document.getElementsByClassName("text");
const box1 = document.getElementById("a");
const box2 = document.getElementById("b");
const box3 = document.getElementById("c");
const box4 = document.getElementById("d");
function checkA() {
  if (box1.style.display == "inline") {
    setTimeout(function () {
      box1.style.opacity = "0";
      box2.style.opacity = "0";
    }, 100);
    box1.style.display = "none";
    box2.style.display = "none";
  } else {
    setTimeout(function () {
      box1.style.opacity = "1";
    }, 100);
    box1.style.display = "inline";
  }
}

function checkB() {
  if (box2.style.display == "inline") {
    setTimeout(function () {
      box1.style.opacity = "0";
      box2.style.opacity = "0";
    }, 100);
    box1.style.display = "none";
    box2.style.display = "none";
  } else {
    setTimeout(function () {
      box2.style.opacity = "1";
    }, 100);
    box2.style.display = "inline";
  }
}

function checkC() {
  if (box3.style.display == "flex") {
    setTimeout(function () {
      box3.style.opacity = "0";
      box4.style.opacity = "0";
    }, 100);
    box3.style.display = "none";
    box4.style.display = "none";
  } else {
    setTimeout(function () {
      box3.style.opacity = "1";
    }, 100);
    box3.style.display = "flex";
  }
}

function checkD() {
  if (box4.style.display == "flex") {
    setTimeout(function () {
      box4.style.opacity = "0";
      box3.style.opacity = "0";
    }, 100);
    box3.style.display = "none";
    box4.style.display = "none";
  } else {
    setTimeout(function () {
      box4.style.opacity = "1";
    }, 100);
    box4.style.display = "flex";
  }
}
for (let i = 0; i < theBox.length; i++) {
  theBox[i].style.height = "180px";
  theBox[i].addEventListener("click", function () {
    if (i == 0) {
      if (theBox[i].style.height == "180px") {
        theBox[i + 2].style.opacity = "0";
        theBox[i].style.height = "420px";
        
      } else {
        theBox[i].style.height = "180px";
        theBox[i + 1].style.height = "180px";
        theBox[i + 2].style.opacity = "1";
      }
      checkA();
    } else if (i == 1) {
      if (theBox[i].style.height == "180px") {
        theBox[i].style.height = "420px";
        theBox[i + 1].style.display = "none";
        theBox[i + 2].style.display = "none";
      } else {
        theBox[i].style.height = "180px";
        theBox[i - 1].style.height = "180px";
        theBox[i + 1].style.display = "inline-block";
        theBox[i + 2].style.display = "inline-block";
      }
      checkB();
    } else if (i == 2) {
      if (theBox[i].style.height == "180px") {
        theBox[i].style.height = "420px";
        theBox[i - 1].style.display = "none";
        theBox[i - 2].style.display = "none";
      } else {
        theBox[i].style.height = "180px";
        theBox[i + 1].style.height = "180px";
        theBox[i - 1].style.display = "inline-block";
        theBox[i - 2].style.display = "inline-block";
      }
      checkC();
    } else if (i == 3) {
      if (theBox[i].style.height == "180px") {
        theBox[i].style.height = "420px";
        theBox[i - 2].style.display = "none";
        theBox[i - 3].style.display = "none";
      } else {
        theBox[i].style.height = "180px";
        theBox[i - 1].style.height = "180px";
        theBox[i - 2].style.display = "inline-block";
        theBox[i - 3].style.display = "inline-block";
      }
      checkD();
    }
  });
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}
