<?php
// Полдключаем стили и скрипты
function add_scripts_styles()
{
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'1.1','all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css',false,'1.1','all');
};
add_action( 'wp_enqueue_scripts', 'add_scripts_styles' );


// Подключаем загрузчик файлов в админке
if(!function_exists("main_setup")):
	function main_setup()
	{
		add_theme_support('post-thumbnails');
	}
endif;
add_action('after_setup_theme','main_setup');

// Подключаем меню
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 };

add_action( 'init', 'register_my_menus' );

// подлкючаем сайдбар
function sidebar_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar_main',
        'description'   => __( 'Виджеты для главного сайбара', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widgettitle">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'sidebar_init' );