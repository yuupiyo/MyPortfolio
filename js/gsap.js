
gsap.registerPlugin(ScrollTrigger);

const paragraph = document.querySelector('.js-title');
const textContent = paragraph.innerHTML;

const newTextContent = textContent
  .split(/(\s|<br>)/) 
  .map((char) => {
    if (char === ' ' || char === '<br>') {
      return char; 
    } else {
      return [...char]
        .map((c) => `<span class="js-span">${c}</span>`)
        .join("");
    }
  })
  .join("");

paragraph.innerHTML = newTextContent;

const isTopPage = window.location.pathname === '/portfolio/' || window.location.pathname === '/portfolio/front-page.php'; // トップページかどうかを判定する例

if (isTopPage) {
  // トップページの場合のGSAP ScrollTriggerの設定
  const texts = document.querySelectorAll('.js-span');
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
    } else {
      // 下層ページの場合の処理
      // 通常のページ内リンクを使って特定のセクションに移動するためのコードを記述する
      // ページ内の全てのアンカーリンクを取得
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();

          const targetId = this.getAttribute('href').substring(1); // リンク先のセクションのIDを取得
          const targetElement = document.getElementById(targetId); // リンク先のセクションの要素を取得

          if (targetElement) {
            // スクロール処理を実行
            targetElement.scrollIntoView({
              behavior: 'smooth' // スムーズなスクロールを有効化
            });
          }
        });
      });
    }
