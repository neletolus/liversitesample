<?php
add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'register_menu');
function register_menu()
{
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

add_theme_support('custom-logo');

add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('news', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => 'ニュース', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'news',    // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => false, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    'supports' => array('title', 'editor', 'thumbnail')
  ]);
}
