<?php get_header();?>
<div class="container post-page__container">
	<div class="post__container">
			<?php	
 	while (have_posts()) : the_post();?>
 
<!--в этой строке выводится название статьи и ссылка на неё-->
	<h2><?php the_title(); ?></h2>

<!--здесь выводится миниатюра записи-->
	<div class="thumbnail post__thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
	<p><?php the_content(); ?></p>
	<?php 
	endwhile;
	wp_reset_query();
?>
	</div>
	<div class="sidebar-container">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>