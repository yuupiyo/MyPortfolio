<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="宮崎県の小さな山村で4人のお母さんをしながら、コーダーを目指す日吉ゆかりのポートフォリオです。">
  <title>Yukari Hiyoshi's Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="./js/main.js" defer></script> -->
  <!-- <script src="./js/gsap.js" defer></script> -->
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
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
