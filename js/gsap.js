
gsap.registerPlugin(ScrollTrigger);

const texts = document.querySelectorAll('.js-title span');
const mainvisual = document.querySelector('.js-mainvisual');

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
  ease: 'power1.out',
  scrollTrigger: {
    trigger: mainvisual,
    start: 'top top',
    end: 'bottom center',
    toggleActions: "play none reverse none",
    scrub: true,
  },
});