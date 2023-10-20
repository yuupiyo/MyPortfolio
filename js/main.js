const hamburger = document.querySelector('.c-button__hamburger');
const nav = document.querySelector('.p-nav');
const circle = document.querySelector('.c-background__circle');
const navLinks = document.querySelectorAll('.p-nav a');

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