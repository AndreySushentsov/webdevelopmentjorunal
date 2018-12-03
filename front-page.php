<?php get_header();?>
	<main class="container">
		<div class="page__title">Свежие посты в Back End</div>

		<div class="post-card__container">
			<?php 
			$args = array( 
				'posts_per_page' => 4,
				'category__in' => 4
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
			?>
			 
				<div class="post-card">
					<a href="<?php the_permalink();?>">
						<img src="<?php the_post_thumbnail_url(); ?>">
					</a>
					<h2><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>
					</h2>
			        <?php _e( 'Категория: ', 'textdomain' ); the_category( ', ' ); ?>
			
				</div>
			
			<?php endwhile; else :
			/*
			 * Если постов в данной категории не найден
			 */
			_e( 'Извените, но пока в данной категории нет ни одного поста. ((', 'textdomain' );
			 // Завершить цикл
			 endif;
			 // Сбросить данные
			 wp_reset_postdata();
			?>
			<a href="<?php echo get_category_link(4); ?>">Смотреть все посты </a>
		</div>

		<div class="page__title">Свежие посты в Back End</div>

		<div class="post-card__container">
			<?php 
			$args = array( 
				'posts_per_page' => 4,
				'category__in' => 3
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
			?>
			 
				<div class="post-card">
			        <h2><?php the_title() ?></h2>
			 
			        <small><?php _e( 'Автор: ', 'textdomain' ); the_author_posts_link() ?></small>

			 		<div class="entry">
			            <?php the_content() ?>
			        </div>
			
			        <?php _e( 'Категория ', 'textdomain' ); the_category( ', ' ); ?>
			
				</div>
			<?php endwhile; else :
			/*
			 * Если в данной категории нет постов
			 */
			_e( 'Извените на данный момент в этой категории нет постов. ((', 'textdomain' );
			 // Завершить цикл
			 endif;
			?>		
			<a href="<?php echo get_category_link(3); ?>">Смотреть все посты </a>	
		</div>
	</main>
<?php get_footer();?>