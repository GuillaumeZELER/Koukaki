const burger = document.getElementById('burger-btn');
const fullscreenMenu = document.getElementById('menu-fullscreen');

burger.addEventListener('click', () => {
    
     if (burger.classList.contains('active')) {

            burger.classList.remove('active');
            burger.classList.add('inactive');
    } else {

            burger.classList.remove('inactive');
            burger.classList.add('active');
    }
    fullscreenMenu.classList.toggle('active'); 


});

const menuLinks = document.querySelectorAll("#menu-fullscreen ul li a");

menuLinks.forEach((link) => {
    link.addEventListener('click', () => {
        burger.classList.remove('active');
        burger.classList.add('inactive');
        fullscreenMenu.classList.remove('active');
    });
});
