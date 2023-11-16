<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="宮崎県の小さな山村で4人のお母さんをしながら、コーダーを目指す日吉ゆかりのポートフォリオです。">
  <title>Yukari Hiyoshi's Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="./js/main.js" defer></script>
  <script src="./js/gsap.js" defer></script>
</head>
<body>
  <header class="l-header c-background__glass">
    <button class="p-hamburger js-hamburger" type="button">
      <span class="c-background__brown"></span>
      <span class="c-background__brown"></span>
      <span class="c-background__brown"></span>
    </button>
    <nav class="p-nav js-nav">
      <ul class="c-flex__nav c-font-family__en c-color__brown">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="c-background__circle js-circle"></div>
  </header>

  <div class="l-container">
    <div class="p-mainvisual js-mainvisual">
      <div class="p-mainvisual__center">
        <h1 class="p-mainvisual__title c-font-family__en c-color__brown js-title">
          <span>Y</span><span>u</span><span>k</span><span>a</span><span>r</span><span>i</span> <span>H</span><span>i</span><span>y</span><span>o</span><span>s</span><span>h</span><span>i</span>
          <br>
          <span>P</span><span>o</span><span>r</span><span>t</span><span>f</span><span>o</span><span>l</span><span>i</span><span>o</span>
        </h1>
      </div>
      <picture>
        <source srcset="./images/leaf-left.webp" type="image/webp">
        <img class="p-mainvisual__left js-mainvisualLeft" src="./images/leaf-left.png" srcset="./images/leaf-left@2x.png 2x" width="1119" height="802" alt="メインビジュアルの左側に配置されている葉っぱの画像">
      </picture>
      <picture>
        <source srcset="./images/leaf-right.webp" type="image/webp">
        <img class="p-mainvisual__right js-mainvisualRight" src="./images/leaf-right.png" srcset="./images/leaf-right@2x.png 2x" width="1825" height="802" alt="メインビジュアルの右側に配置されている葉っぱの画像">
      </picture>
    </div>
  </div>

  <main class="l-main" ontouchstart="">
    <div class="c-inner">
      <section id="about" class="p-about">
        <h2 class="p-about__title c-font-family__en c-color__brown c-title__h2 js-fadein">About</h2>
        <ul class="c-flex__about">
          <li class="p-about__photo js-fadein">
            <picture class="u-animation">
              <source srcset="./images/myphoto.webp" type="image/webp">
              <img src="./images/myphoto.png" srcset="./images/myphoto@2x.png 2x" width="285" height="453" alt="自分の写真" loading="lazy">
            </picture>
          </li>
          <li class="p-about__info c-background__white c-shadow c-border-radius js-fadein">
            <h3 class="p-about__h3 c-font-family__en c-color__brown c-title__h3 c-border-bottom">Yukari Hiyoshi</h3>
            <p class="c-font-family__ja c-color__brown c-text u-mb__24">43歳東京出身。結婚を機に宮崎県諸塚村へ移住。2022年春から独学でWeb制作の学習開始。コーディングの楽しさを知り、更なるレベルアップを図る為に同年6月オンラインスクールRaiseTech「WordPress副業コース」に入る。同年10月に完走。その後、初案件獲得しました！今も自分のスキルを上げるべく、日々、学習しています。</p>
            <p class="c-font-family__ja c-color__brown c-text">日々の学習記録は、<a class="p-about__span c-font-family__en c-text__buildup" href="https://app.build-up.info/enterprises/bEDI6AXZ/portfolio/bQO1MTMgoTd" target="_blank">「BuildUp」</a>にて更新しております。</p>
            <ul class="p-about__list c-flex__about-icon">
              <li class="c-icon u-hover__popup">
                <p class="c-icon__name c-font-family__en c-color__white c-background__white">CodePen</p>
                <a href="https://codepen.io/your-work" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" class="p-about__icon c-icon__codepen icon icon-tabler icon-tabler-brand-codepen" width="54" height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 15l9 6l9 -6l-9 -6l-9 6"></path>
                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6"></path>
                    <path d="M3 9l0 6"></path>
                    <path d="M21 9l0 6"></path>
                    <path d="M12 3l0 6"></path>
                    <path d="M12 15l0 6"></path>
                  </svg>
                </a>
              </li>
              <li class="c-icon u-hover__popup">
                <p class="c-icon__name c-font-family__en c-color__white c-background__white">GitHub</p>
                <a href="https://github.com/yuupiyo" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" class="p-about__icon icon icon-tabler icon-tabler-brand-github-filled" width="54" height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path class="c-icon__github" d="M5.315 2.1c.791 -.113 1.9 .145 3.333 .966l.272 .161l.16 .1l.397 -.083a13.3 13.3 0 0 1 4.59 -.08l.456 .08l.396 .083l.161 -.1c1.385 -.84 2.487 -1.17 3.322 -1.148l.164 .008l.147 .017l.076 .014l.05 .011l.144 .047a1 1 0 0 1 .53 .514a5.2 5.2 0 0 1 .397 2.91l-.047 .267l-.046 .196l.123 .163c.574 .795 .93 1.728 1.03 2.707l.023 .295l.007 .272c0 3.855 -1.659 5.883 -4.644 6.68l-.245 .061l-.132 .029l.014 .161l.008 .157l.004 .365l-.002 .213l-.003 3.834a1 1 0 0 1 -.883 .993l-.117 .007h-6a1 1 0 0 1 -.993 -.883l-.007 -.117v-.734c-1.818 .26 -3.03 -.424 -4.11 -1.878l-.535 -.766c-.28 -.396 -.455 -.579 -.589 -.644l-.048 -.019a1 1 0 0 1 .564 -1.918c.642 .188 1.074 .568 1.57 1.239l.538 .769c.76 1.079 1.36 1.459 2.609 1.191l.001 -.678l-.018 -.168a5.03 5.03 0 0 1 -.021 -.824l.017 -.185l.019 -.12l-.108 -.024c-2.976 -.71 -4.703 -2.573 -4.875 -6.139l-.01 -.31l-.004 -.292a5.6 5.6 0 0 1 .908 -3.051l.152 -.222l.122 -.163l-.045 -.196a5.2 5.2 0 0 1 .145 -2.642l.1 -.282l.106 -.253a1 1 0 0 1 .529 -.514l.144 -.047l.154 -.03z" stroke-width="0" fill="currentColor"></path>
                  </svg>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </section>

      <section id="skill" class="p-skill">
        <h2 class="p-skill__title c-font-family__en c-color__brown c-title__h2 js-fadein">Skill</h2>
        <ul class="c-flex__section">
          <li class="p-skill__card c-border js-fadein">
            <ul class="c-flex__skill-icon">
              <li class="p-skill__icon01"><img src="./images/html.svg" width="53" height="81" alt="HTMLのアイコン" loading="lazy"></li>
              <li class="p-skill__icon01"><img src="./images/css.svg" width="53" height="81" alt="CSSのアイコン" loading="lazy"></li>
              <li class="p-skill__sass c-flex__sass"><img src="./images/sass.svg" width="61" height="46" alt="Sassのアイコン" loading="lazy"></li>
              <li class="p-skill__icon01"><img src="./images/js.svg" width="53" height="81" alt="Java Scriptのアイコン" loading="lazy"></li>
            </ul>
            <p class="p-skill__text c-text c-font-family__ja c-color__brown">
              セマンティックなマークアップの意識、Sassを使っての作業の効率化、さらにCSS設計(FLOCSS)を取り入れて、メンテナンス性のあるコーディングをするように心がけています。他にもレスポンシブ対応、アニメーション、ハンバーガーメニュー等の動きも実装出来ます。
            </p>
          </li>
          <li class="p-skill__card c-border u-pb__sp js-fadein">
            <img class="p-skill__wordpress" src="./images/WordPress.svg" width="73" height="73" alt="WordPressのアイコン" loading="lazy">
            <p class="p-skill__text c-text c-font-family__ja c-color__brown">
              オリジナルテーマの制作、プラグインを使っての実装の経験があります。
            </p>
          </li>
          <li class="p-skill__card c-border u-pb__sp js-fadein">
            <ul class="c-flex__skill-icon">
              <li class="p-skill__icon02"><img src="./images/vscode.svg" width="67" height="67" alt="VScodeのアイコン" loading="lazy"></li>
              <li class="p-skill__icon02"><img src="./images/github02.svg" width="67" height="67" alt="GitHubのアイコン" loading="lazy"></li>
            </ul>
            <p class="p-skill__text c-text c-font-family__ja c-color__brown">
              コードエディターにはVisual Studio Codeを使用しています。また、GitHubを使ってのバージョン管理、ソースコードの共有も出来ます。
            </p>
          </li>
          <li class="p-skill__card c-border js-fadein">
            <ul class="c-flex__skill-icon">
              <li class="p-skill__figma c-flex__figma"><img src="./images/figma.svg" width="41" height="63" alt="figmaのアイコン" loading="lazy"></li>
              <li class="p-skill__icon02"><img src="./images/XD.svg" width="63" height="63" alt="Adobe XDのアイコン" loading="lazy"></li>
              <li class="p-skill__icon02"><img src="./images/Photoshop.svg" width="63" height="63" alt="Photoshopのアイコン" loading="lazy"></li>
            </ul>
            <p class="p-skill__text c-text c-font-family__ja c-color__brown">
              デザインツールに関しては只今、学習中ですがAdobe XDとFigmaで作成されたデザインカンプからのコーディングが出来ます。今回のポートフォリオに関しましてはAdobe XDを使ってデザインカンプを作成しました。またPhotshopで写真の切り抜きなどの加工の経験はあります。
            </p>
          </li>
        </ul>
      </section>

      <section id="works" class="p-works">
        <h2 class="p-works__title c-font-family__en c-color__brown c-title__h2 js-fadein">Works</h2>
        <ul class="c-flex__section">
          <li class="p-works__card u-hover__works js-fadein">
            <a href="#" class="p-works__card-inner c-border c-border-radius">
              <div class="p-works__card-front c-border-radius">
                <h3 class="p-works__h3 c-font-family__en c-color__brown">My Portfolio</h3>
                <picture>
                  <source srcset="./images/portfolio.webp" type="image/webp">
                  <img src="./images/portfolio.jpg" srcset="./images/portfolio@2x.jpg 2x" width="411" height="244" alt="このサイトの写真です!" loading="lazy">
                </picture>
                <button class="p-works__button c-button__works c-font-family__en" type="button">Read More</button>  
              </div>
              <div class="p-works__card-back c-border__back c-border-radius c-background__white">
                <p class="c-font-family__ja c-color__brown c-text">自身のポートフォリオです。企画、デザイン、コーディング、WordPress化、サーバーへのデプロイまで行いました。セマンティックなマークアップ、保守性のあるCSS設計をするように意識して制作しました。</p>
              </div>
            </a>
          </li>
          <li class="p-works__card u-hover__works js-fadein">
            <a href="#" class="p-works__card-inner c-border c-border-radius">
              <div class="p-works__card-front c-border-radius">
                <h3 class="p-works__h3 c-font-family__en c-color__brown">Hamburger-site</h3>
                <picture>
                  <source srcset="./images/hamburger.webp" type="image/webp">
                  <img src="./images/hamburger.jpg" srcset="./images/hamburger@2x.jpg 2x" width="411" height="244" alt="RaiseTech WordPress副業コースの最終課題の写真です" loading="lazy">
                </picture>
                <button class="p-works__button c-button__works c-font-family__en" type="button">Read More</button>
              </div>
              <div class="p-works__card-back c-border__back c-border-radius c-background__white">
                <p class="c-font-family__ja c-color__brown c-text">RaiseTech「WordPress副業コース」の最終課題で制作しました。Adobe XDのデザインカンプからのコーディング、WordPress化、サーバーへのデプロイまで行いました。又、CSS設計にFLOCSSを学び、作業の効率化と保守性のある命名規則を意識しています。</p>
              </div>
            </a>
          </li>
          <li class="p-works__card u-hover__works js-fadein">
            <a href="#" class="p-works__card-inner c-border c-border-radius">
              <div class="p-works__card-front c-border-radius">
                <h3 class="p-works__h3 c-font-family__en c-color__brown">RaiseTech</h3>
                <picture>
                  <source srcset="./images/raisetech.webp" type="image/webp">
                  <img src="./images/raisetech.jpg" srcset="./images/raisetech@2x.jpg 2x" width="411" height="244" alt="RaiseTech WordPress副業コースの模写課題の写真です" loading="lazy">
                </picture>
                <button class="p-works__button c-button__works c-font-family__en" type="button">Read More</button>
              </div>
              <div class="p-works__card-back c-border__back c-border-radius c-background__white">
                <p class="c-font-family__ja c-color__brown c-text">RaiseTech「WordPress副業コース」の2回目の課題で旧公式サイトの模写コーディングを行いました。デベロッパーツールの使い方、HTML/CSS/Sass/jQueryを学びながら制作していきました。</p>
              </div>
            </a>
          </li>
        </ul>
      </section>

      <section id="contact" class="p-contact js-fadein">
        <h2 class="p-contact__title c-font-family__en c-color__brown c-title__h2">Contact</h2>
        <div class="p-contact__drop-right c-drop__right"></div>
        <section class="p-contact__drop-center c-drop__center u-hover__drop">
          <h3 class="p-contact__h3 c-font-family__ja--bold c-color__brown c-title__h3--contact">お問い合わせはこちらから</h3>
          <button class="c-button c-font-family__ja--bold" type="button">お問い合わせフォームへ</button>
        </section>
        <div class="p-contact__drop-left c-drop__left"></div>
      </section>
    </div>
  </main>

  <footer class="p-footer">
    <p class="p-footer__text c-font-family__en c--color__white"><small>©︎2023 Yukari Hiyoshi</small></p>
  </footer>
  
</body>
</html>