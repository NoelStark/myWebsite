const theBox = document.getElementsByClassName("text");
const box1 = document.getElementById("a");
const box2 = document.getElementById("b");
const box3 = document.getElementById("c");
const box4 = document.getElementById("d");
function checkA() {
  if (box1.style.display == "inline") {
    setTimeout(function () {
      box1.style.opacity = "0";
    }, 100);
    box1.style.display = "none";
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
      box2.style.opacity = "0";
    }, 100);
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
    }, 100);
    box3.style.display = "none";
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
    }, 100);
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
        
        for(let j = 0; j < theBox.length; j++) {
          
          if(j == 0)
          {
            theBox[j].style.height = "440px"
          }
          else
          {
            theBox[j].style.display = "none";
          }
        }

      } else {
        for(let j = 0; j < theBox.length; j++) {
          
          theBox[j].style.height = "180px"
          theBox[j].style.display = "inline-block";
          
        }
      }
      checkA();
    } else if (i == 1) {
      if (theBox[i].style.height == "180px") {
        
        for(let j = 0; j < theBox.length; j++) {
          
          if(j == 1)
          {
            theBox[j].style.height = "440px"
          }
          else
          {
            theBox[j].style.display = "none";
          }
        }

      } else {
        for(let j = 0; j < theBox.length; j++) {
          
          theBox[j].style.height = "180px"
          theBox[j].style.display = "inline-block";
          
        }
      }
      checkB();
    } else if (i == 2) {
      if (theBox[i].style.height == "180px") {
        
        for(let j = 0; j < theBox.length; j++) {
          
          if(j == 2)
          {
            theBox[j].style.height = "440px"
          }
          else
          {
            theBox[j].style.display = "none";
          }
        }

      } else {
        for(let j = 0; j < theBox.length; j++) {
          
          theBox[j].style.height = "180px"
          theBox[j].style.display = "inline-block";
          
          
        }
      }
      checkC();
    } 
    else if (i == 3) {
      if (theBox[i].style.height == "180px") {
        
        for(let j = 0; j < theBox.length; j++) {
          
          if(j == 3)
          {
            theBox[j].style.height = "440px !important"
          }
          else
          {
            theBox[j].style.display = "none";
          }
        }

      } else {
        for(let j = 0; j < theBox.length; j++) {
          
          theBox[j].style.height = "180px"
          theBox[j].style.display = "inline-block";
          
          
        }
      }
      checkD();
    }
  });
}
var num = 0;
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
  if(n == 1)
  {
    num++;
  }
  else{
    num--;
  }
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesfade");
  var images = document.getElementsByClassName("img");
  var numbertext = document.getElementsByClassName("numbertext");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  document.querySelector(".trailer").style.display = "none";

  for (let i = 0; i < numbertext.length; i++) {
    numbertext[i].style.display = "block";
  }

  for (let i = 0; i < images.length; i++) {
    images[i].style.display = "inline";
  }
  slides[slideIndex - 1].style.display = "block";
}

document.querySelector(".play").addEventListener("click", () => {
  document.querySelector(".video").play();
});

function cancel()
{
    location.href = "login.php";
}

function toggle() {
  
  var images = document.getElementsByClassName("img");
  var numbertext = document.getElementsByClassName("numbertext");
  var video = document.querySelector(".trailer");
  var source = ['videos/ak47.mp4', 'videos/mp9.mp4','videos/duals.mp4','videos/famas.mp4',
    'videos/mp7.mp4', 'videos/m4a1s.mp4', 'videos/usp.mp4', 'videos/ppbizon.mp4', 'videos/g3sg1.mp4',
    'videos/xm1014.mp4', 'videos/mac10.mp4', 'videos/fiveseven.mp4', 'videos/mp5sd.mp4',
    'videos/sawedoff.mp4', 'videos/p2000.mp4', 'videos/mag7.mp4', 'videos/scar20.mp4'];
    

  if (video.style.display == "none") {
    if(num == 17)
    {
      num = 0;
    }
    else if(num == -1)
    {
      num = 16;
    }
    document.getElementById('change').src = source[num];
    video.style.display = "block";

    for (let i = 0; i < images.length; i++) {
      numbertext[i].style.display = "none";
      images[i].style.display = "none";
    }
  } else {
    video.style.display = "none";

    for (let i = 0; i < images.length; i++) {
      numbertext[i].style.display = "block";
      images[i].style.display = "inline";
    }
  }
}
