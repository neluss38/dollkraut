<?php

//Template Name: home


get_header(); ?>

<div data-index="0" class="page-wrapper page">
    <img src="<?php echo get_bloginfo('template_url') ?>/images/content/dollkraut-logo.png" class="home-image">
    </img>
</div>
<?php
    include 'tourdata.php';
    include 'music.php';
    include 'bio-dj.php';
    include 'bio-band.php';
    include 'booking-dj.php';
    include 'booking-band.php';
 ?>

<?php get_footer();
