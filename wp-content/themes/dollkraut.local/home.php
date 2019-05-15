<?php

//Template Name: home


get_header(); ?>

<div data-index="0" class="page-wrapper is-active page">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/src/img/content/dollkraut-logo.png" class="home-image" alt="home page background image"></img>
</div>

<?php
    include(locate_template('tourdata.php'));
    include(locate_template('music.php'));
    include 'bio-dj.php';
    include 'bio-band.php';
    include 'booking-band.php';
?>

<?php get_footer();
