<?php get_header();?>
	<main class="container">
		<section>
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
						<div class="post-card__link-container">
							<a class="post-card__link" href="<?php the_permalink();?>">
								<img src="<?php the_post_thumbnail_url(); ?>">
							</a>
						</div>
						<h2 class="entry-title"><?php the_title( sprintf( '<a class="post-card__title-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );?>
						</h2>
						<span>
							<?php _e( 'Категория: ', 'textdomain' ); the_category( ', ' ); ?>
						</span>
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
			</div>
			<div class="post-card__button-container">
				<a class="post-card__button button" href="<?php echo get_category_link(4); ?>">Смотреть все посты </a>	
			</div>			
		</section>
		
		<section>
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
						<div class="post-card__link-container">
							<a class="post-card__link" href="<?php the_permalink();?>">
								<img src="<?php the_post_thumbnail_url(); ?>">
							</a>
						</div>
						<h2 class="entry-title"><?php the_title( sprintf( '<a class="post-card__title-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );?>
						</h2>
				        <span>
				        	<?php _e( 'Категория: ', 'textdomain' ); the_category( ', ' ); ?>
				        </span>
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
			</div>
			<div class="post-card__button-container">
				<a class="post-card__button button" href="<?php echo get_category_link(3); ?>">Смотреть все посты </a>	
			</div>			
		</section>

	</main>
<?php get_footer();?>