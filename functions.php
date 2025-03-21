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
}
add_action('after_setup_theme', 'custom_theme_support');

// ファイル読み込み
function add_files() {
  // フォント
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap', array());
  // CSS
  wp_enqueue_style('reset-css', get_theme_file_uri('/css/reset.css'), array(), false, 'all');
  wp_enqueue_style('main-css', get_theme_file_uri('/css/style.css'), array('reset-css'), '1.0.0');
  wp_enqueue_style('style-css', get_theme_file_uri('/style.css'), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_files');

function add_custom_scripts() {
  if ( is_front_page() ) { // front-page.phpの場合
    // gsap
    // The core GSAP library
    wp_enqueue_script( 'gsap', get_theme_file_uri('/js/gsap.min.js'),  array(), array('strategy' => 'defer', 'in_footer' => true) );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', get_theme_file_uri('/js/ScrollTrigger.min.js'), array('gsap'),  array('strategy' => 'defer', 'in_footer' => true) );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsapjs', get_theme_file_uri('/js/gsap.js'), array('gsap'), '',  array('strategy' => 'defer', 'in_footer' => true));
    // JavaScript
    wp_enqueue_script('mainjs', get_theme_file_uri('/js/main.js'), array(), '1.0.0', array('strategy' => 'defer', 'in_footer' => true));
  } else {
    wp_enqueue_script('mainjs', get_theme_file_uri('/js/main.js'), array(), '1.0.0', array('strategy' => 'defer', 'in_footer' => true));
  }
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() { 
    ob_start("prefix_output_callback"); 
}

add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() { 
    ob_end_flush(); 
}

function prefix_output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}


// ユーザー情報画面にSNSリンクをつける
function my_user_sns($sns) {
  $sns['buildup'] = 'BuildUp URL';
  $sns['x'] = 'X(旧Twitter) URL';
  $sns['codepen'] = 'CodePen URL';
  $sns['github'] = 'GitHub URL';

  return $sns;
}
add_filter('user_contactmethods', 'my_user_sns', 10, 1);

/* ---------- カスタム投稿タイプを追加 ---------- */
function create_post_type() {

  register_post_type(
    'skill',
    array(
      'label' => 'スキル',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'skill-cat',
    'skill',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'skill-tag',
    'skill',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

}
add_action( 'init', 'create_post_type' );

remove_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );