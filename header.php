<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
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
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/#skill')); ?>">Skill</a></li>
        <li><a href="<?php echo esc_url(home_url('/#works')); ?>">Works</a></li>
        <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
      </ul>
    </nav>

    <div class="c-background__circle js-circle"></div>
  </header>
