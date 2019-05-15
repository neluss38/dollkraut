<?php get_header(); ?>
	<main>
		<div class="container">
			<article>

			<?php if (have_posts()) : ?>

				<?php while(have_posts()) : the_post(); ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>

				<?php endwhile; ?>

			<?php else: ?>

				<p>Sorry, there doesn't seem to be any content for this page!</p>

			<?php endif; ?>

			</article>

			<?php 
				global $wp_query;
				if($wp_query->max_num_pages > 1) {
					include(locate_template('inc/pagination.php'));
				}
			?>

		</div>
	</main>


<?php get_footer(); ?>
