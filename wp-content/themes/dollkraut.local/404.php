<?php get_header(); ?>
<div class="not-found-block">
 	<h1>404: Page not found.</h1>
 	<p>Looks like the page you are trying to reach doesn't exist!</p>
 	<p>Try one of the links above or head back to the <a href="<?php bloginfo('url'); ?>">homepage</a>.</p>
 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/src/img/content/dollkraut-logo.png" class="not-found-block__image" alt="home page background image">
</div>
<?php get_footer(); ?>
