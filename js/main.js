const hamburger = document.querySelector('.js-hamburger');
const nav = document.querySelector('.js-nav');
const circle = document.querySelector('.js-circle');
const navLinks = document.querySelectorAll('.js-nav a');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('is-active');
  nav.classList.toggle('is-panelactive');
  circle.classList.toggle('is-circleactive');
});

navLinks.forEach((navLink) => {
  navLink.addEventListener('click', () => {
    hamburger.classList.remove('is-active');
    nav.classList.remove('is-panelactive');
    circle.classList.remove('is-circleactive');
  });
});

window.addEventListener('resize', () => {
  hamburger.classList.remove('is-active');
  nav.classList.remove('is-panelactive');
  circle.classList.remove('is-circleactive');
});