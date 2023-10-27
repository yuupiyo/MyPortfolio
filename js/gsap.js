
// gsap.registerPlugin(ScrollTrigger);

const texts = document.querySelectorAll('.js-title span');

gsap.fromTo(texts, 
{
  y: 0,
  autoAlpha: 1,
},
{
  y: 25,
  autoAlpha: 0,
  stagger: 0.05,
  delay: 0.2,
  duration: 0.5,
  ease: 'power1.out',
});