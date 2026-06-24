const burger = document.getElementById('burger');
const navMobile = document.getElementById('nav-mobile');

burger.addEventListener('click', function() {
    navMobile.classList.toggle('open');
});