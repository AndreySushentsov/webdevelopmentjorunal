<?php
// Полдключаем стили и скрипты
function add_scripts_styles()
{
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'1.1','all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css',false,'1.1','all');
};
add_action( 'wp_enqueue_scripts', 'add_scripts_styles' );



// Подключаем меню
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 };

add_action( 'init', 'register_my_menus' );

