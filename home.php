<?php get_header();?>

<?php 
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
<?php get_footer();?>