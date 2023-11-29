<?php
// テーマサポート
function custom_theme_support() {
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support('editor-styles');
  add_editor_style();

  // ナビゲーションメニュー
  register_nav_menus(
    array(
      'main-manu' => 'メインメニュー',
    )
  );
}
add_action('after_setup_theme', 'custom_theme_support');

// タイトル出力
function portfolio_title($title) {
  if(is_front_page() && is_home()) {
    $title = get_bloginfo('name', 'display');
  } elseif(is_singular()) {
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'portfolio_title');

// ファイル読み込み
function add_files() {
  // フォント
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap', array());
  // CSS
  wp_enqueue_style('reset-css', get_theme_file_uri('/css/reset.css'), array(), false, 'all');
  wp_enqueue_style('main-css', get_theme_file_uri('/css/style.css'), array('reset-css'), '1.0.0');
  wp_enqueue_style('style-css', get_theme_file_uri('/style.css'), array(), '1.0.0');
  // // gsap
  // // The core GSAP library
  wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.3', false );
  // // ScrollTrigger - with gsap.js passed as a dependency
  wp_enqueue_script( 'gsap-st', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.3', false );
  // // Your animation code file - with gsap.js passed as a dependency
  wp_enqueue_script( 'gsapjs', get_theme_file_uri('/js/gsap.js'), array('gsap'), '',  array('strategy' => 'defer', 'in_footer' => false));
  // JavaScript
  wp_enqueue_script('mainjs', get_theme_file_uri('/js/main.js'), array(), '1.0.0', array('strategy' => 'defer', 'in_footer' => false));
}
add_action('wp_enqueue_scripts', 'add_files');

// ユーザー情報画面にSNSリンクをつける
function my_user_sns($sns) {
  $sns['buildup'] = 'BuildUp';
  $sns['codepen'] = 'CodePen';
  $sns['github'] = 'GitHub';

  return $sns;
}
add_filter('user_contactmethods', 'my_user_sns', 10, 1);