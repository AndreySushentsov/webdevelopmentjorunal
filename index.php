<?php get_header();?>
	<main class="container category__container">
		<div class="category__sidebar-container">
			<?php get_sidebar();?>	
		</div>
		<div class="category__post-card-container">
			<?php while (have_posts()) : the_post();?>
 
			<div class="category__post-card">
				<div class="category__img-container">
					<a class="category__post-card-link" href="<?php the_permalink();?>">
						<img src="<?php the_post_thumbnail_url(); ?>">
					</a>
				</div>
				<dir>
					<h2><?php the_title( sprintf( '<h2 class="entry-title"><a class="post-card__title-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>
					</h2>
					<span class="category__post-card-span">
						<?php _e( 'Категория: ', 'textdomain' ); the_category( ', ' ); ?>
					</span>
				</dir>
			</div>
			<?php endwhile; wp_reset_query();?>	
		</div>
	</main>
<?php get_footer();?>
