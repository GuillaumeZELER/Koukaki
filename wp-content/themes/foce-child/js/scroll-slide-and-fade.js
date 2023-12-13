//on récupère les objets à animer
var fadeSections = document.querySelectorAll(".fade-in-section");
var slideH2 = document.querySelectorAll(".toSlide");

//nuages
const bigcloud = document.querySelector(".big-cloud");
const littlecloud = document.querySelector(".little-cloud");


//fonction de fade in des sections
function checkFadeSections() {
  fadeSections.forEach(function (section) {
    var sectionTop = section.getBoundingClientRect().top;

    var windowHeight = window.innerHeight;

    if (sectionTop < windowHeight * 0.8) {
      section.classList.add("show");
    }
  });
}

//fonction de slide des titres
function checkSlideH2() {
  slideH2.forEach(function (slide) {
    var slideTop = slide.getBoundingClientRect().top;

    var windowHeight = window.innerHeight;

    if (slideTop < windowHeight * 0.8) {
      slide.classList.add("slide-in");
    } else {
      slide.classList.remove("slide-in");
    }
  });
}


//fonction de mouvement des nuages
function checkClouds() {
  var cloudsTop = bigcloud.getBoundingClientRect().top;
  var cloudXpos = bigcloud.getBoundingClientRect().x;
  var windowHeight = window.innerHeight;

  if (cloudsTop < windowHeight * 0.8) {
    var scrollPercentage = cloudsTop / windowHeight;
    var decal = -300 + 300 * scrollPercentage;
    bigcloud.style.transform = "translateX(" + decal + "px)";
    littlecloud.style.transform = "translateX(" + decal + "px)";
  }
}


//event listener au scroll
window.addEventListener("scroll", function () {
  checkFadeSections();
  checkSlideH2();
  checkClouds();
});
