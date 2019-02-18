<?php get_header(); ?>
	<main>
		<div id="container">
			<article>

			<?php if (have_posts()) : ?>

				<?php while(have_posts()) : the_post(); ?>

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
