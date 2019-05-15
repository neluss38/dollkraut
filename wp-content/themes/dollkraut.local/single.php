<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>

		<?php endwhile; ?>
	<?php else: ?>

		<p>Sorry, there doesn't seem to be any content for this page!</p>

	<?php endif; ?>
	
	<?php echo str_replace('<a', '<a class="button"', get_previous_post_link( '%link', '&laquo; Previous Post' )); ?>
	<?php echo str_replace('<a', '<a class="button"', get_next_post_link( '%link', 'Next Post &raquo;' )); ?>



<?php get_footer(); ?>
