<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
<body>
	<header>
		<div class="container">
			<a href="/">logo</a>
		</div>
		<nav>
			<?php wp_nav_menu( array( 
				'theme_location' => 'header-menu',
				'menu_class' => 'navigation__list'
			) );?>
		</nav>
	</header>