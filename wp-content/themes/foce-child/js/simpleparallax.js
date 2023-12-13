//Créer effet parallax sur video et sur le logo

const video = document.querySelector('video');
//console.log('image logo : ', video)
new simpleParallax(video, {
  orientation: 'right',
  scale: 1.6

});

const logo = document.getElementById('logo');
new simpleParallax(logo, {
  orientation: 'left',
  scale: 1.8
});

