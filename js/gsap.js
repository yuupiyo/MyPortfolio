
gsap.registerPlugin(ScrollTrigger);

const texts = document.querySelectorAll('.js-title span');
const mainvisual = document.querySelector('.js-mainvisual');
const mainLeft = document.querySelector('.js-mainvisualLeft');
const mainRight = document.querySelector('.js-mainvisualRight');

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
gsap.fromTo(mainLeft, 
  {
    x: '-80%',
  },
  {
    x: '-40%',
    delay: 1,
    scrollTrigger: {
      trigger: mainvisual,
      start: 'top top',
      toggleActions: "play none reverse none",
      scrub: true,
    },
  });
  gsap.fromTo(mainRight, 
    {
      x: '65%',
    },
    {
      x: '30%',
      delay: 1,
      scrollTrigger: {
        trigger: mainvisual,
        start: 'top top',
        toggleActions: "play none reverse none",
        scrub: true,
      },
    });