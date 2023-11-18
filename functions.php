<?php
// ファイル読み込み
function add_files() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap', array());
  wp_enqueue_style('reset-css', get_theme_file_uri('/css/reset.css'), array(), false, 'all');
  wp_enqueue_style('main-css', get_theme_file_uri('/css/style.css'), array('reset-css'), '1.0.0');
  wp_enqueue_style('style-css', get_theme_file_uri('/style.css'), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_files');

