
gsap.registerPlugin(ScrollTrigger);

const paragraph = document.querySelector(".js-title");
const textContent = paragraph.innerHTML;

const newTextContent = textContent
  .split(/(\s|<br>)/) // 空白または<br>タグで分割
  .map((char) => {
    if (char === " " || char === "<br>") {
      return char; // 空白または<br>タグの場合はそのまま返す
    } else {
      return [...char]
        .map((c) => `<span>${c}</span>`)
        .join(""); // 文字を<span>タグで囲んで返す
    }
  })
  .join("");

paragraph.innerHTML = newTextContent;


const texts = document.querySelectorAll('.js-title span');
const mainvisual = document.querySelector('.js-mainvisual');
const mainLeft = document.querySelector('.js-mainvisualLeft');
const mainRight = document.querySelector('.js-mainvisualRight');

// mainvisual
gsap.fromTo(texts, 
{
  y: 0,
  autoAlpha: 1,
},
{
  y: 25,
  autoAlpha: 0,
  stagger: 0.05,
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
    xPercent: -80,
  },
  {
    xPercent: -40,
    delay: 0.5,
    scrollTrigger: {
      trigger: mainvisual,
      start: 'top top',
      toggleActions: "play none reverse none",
      scrub: true,
    },
  });
  gsap.fromTo(mainRight, 
    {
      xPercent: 65,
    },
    {
      xPercent: 30,
      delay: 0.5,
      scrollTrigger: {
        trigger: mainvisual,
        start: 'top top',
        toggleActions: "play none reverse none",
        scrub: true,
      },
    });

    // fadein
    const fadeinItems =document.querySelectorAll('.js-fadein');

    fadeinItems.forEach((fadeinItem) => {
      gsap.fromTo(fadeinItem, 
        {
          y: 150,
          autoAlpha: 0,
        },
        {
          y: 0,
          autoAlpha: 1,
          scrollTrigger: {
            trigger: fadeinItem,
            start: 'top bottom',
            end: 'top center',
            scrub: true,
          },
        });
    });