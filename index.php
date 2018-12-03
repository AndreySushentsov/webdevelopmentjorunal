<?php get_header();?>
	
<?php	
 	while (have_posts()) : the_post();?>
 
<!--в этой строке выводится название статьи и ссылка на неё-->
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!--здесь выводится миниатюра записи-->
	<div class="thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
	<?php the_content(); // вывод текста записи
	endwhile;
	wp_reset_query();
?>
<?php get_footer();?>
