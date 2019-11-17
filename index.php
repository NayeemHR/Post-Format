
<?php if(have_posts()):?>
	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/content', get_post_format()); ?>	
	<?php endwhile; ?>
  
  
//pagination start
	<?php if(function_exists('_pagenavi_init')) {

	wp_pagenavi();

	} else {

	include('navigation.php');

	} ?>
//pagination end

<?php endif; ?>
