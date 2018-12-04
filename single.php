<?php get_header();?>
<div class="container post-page__container">
	<div class="post__container">
			<?php	
 	while (have_posts()) : the_post();?>
 
<!--в этой строке выводится название статьи и ссылка на неё-->
	<h2><?php the_title(); ?></h2>

<!--здесь выводится миниатюра записи-->
	<div class="thumbnail post__thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
	<?php the_content(); ?>
	<?php 
	endwhile;
	wp_reset_query();

?>

	<p><?php the_tags(); ?></p>
	<div>
		<?php 
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>	
	</div>


	<div class="comments__container">
	<?php 					// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>
	</div>

	</div>
	<div class="sidebar-container">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>