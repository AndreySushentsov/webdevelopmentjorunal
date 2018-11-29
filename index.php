<!DOCTYPE html>
<html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
<body>
	<header>
		<div class="container">
			<a href="#">logo</a>
		</div>
		<nav>
			<?php wp_nav_menu( array( 
				'theme_location' => 'header-menu',
				'menu_class' => 'navigation__list'
			) );?>
		</nav>
	</header>
	<main class="container">
		<div class="page__title">Свежие посты в Back End</div>

		<div class="post-card__container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			/* 
			 * Выводит посты из категории Back End
			 */
			if ( in_category( 4 ) ) : ?>
			 
				<div class="post-card">
			        <h2><?php the_title() ?></h2>
			 
			        <small><?php _e( 'Автор ', 'textdomain' ); the_author_posts_link() ?></small>

			 		<div class="entry">
			            <?php the_content() ?>
			        </div>
			
			        <?php _e( 'Категория: ', 'textdomain' ); the_category( ', ' ); ?>
			
				</div>
			<?php endif; ?>
			<?php endwhile; else :
			/*
			 * Если постов в данной категории не найден
			 */
			_e( 'Извените, но пока в данной категории нет ни одного поста. ((', 'textdomain' );
			 // Завершить цикл
			 endif;
			 // Сбросить данные
			 rewind_posts(); 
			?>
		</div>

		<div class="page__title">Свежие посты в Front End</div>

		<div class="post-card__container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			/* 
			 * Выводит посты из категории Font End  
			 */
			if ( in_category( 3 ) ) : ?>
			 
				<div class="post-card">
			        <h2><?php the_title() ?></h2>
			 
			        <small><?php _e( 'Автор: ', 'textdomain' ); the_author_posts_link() ?></small>

			 		<div class="entry">
			            <?php the_content() ?>
			        </div>
			
			        <?php _e( 'Категория ', 'textdomain' ); the_category( ', ' ); ?>
			
				</div>
			<?php endif; ?>
			<?php endwhile; else :
			/*
			 * Если в данной категории нет постов
			 */
			_e( 'Извените на данный момент в этой категории нет постов. ((', 'textdomain' );
			 // Завершить цикл
			 endif;
			?>			
		</div>

	</main>
</body>
</html>
