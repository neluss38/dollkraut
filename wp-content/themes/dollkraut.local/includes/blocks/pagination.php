<?php if(is_blog()) {
    $maxPages = '';
} else {
    $maxPages = $custom_query->max_num_pages;
}

$nextButton = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="8.333px" height="13.625px" viewBox="0 0 8.333 13.625" enable-background="new 0 0 8.333 13.625" xml:space="preserve"><polyline fill="none" stroke="#858585" stroke-width="2" stroke-miterlimit="10" points="0.766,0.789 6.766,6.789 0.766,12.789 "/></svg> Next Page'; 
$prevButton = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="8.333px" height="13.625px" viewBox="0 0 8.333 13.625" enable-background="new 0 0 8.333 13.625" xml:space="preserve"><polyline fill="none" stroke="#858585" stroke-width="2" stroke-miterlimit="10" points="7.531,12.789 1.531,6.789 7.531,0.789 "/></svg> Previous Page'
?>


<section class="pagination">
    <div class="container">
        <div class="pages">

            <?php /* Previous */ ?>         

                <?php 
                    if(!get_previous_posts_link()):?>
                        <a class="prev inactive"><a class="prev inactive"><?php echo $prevButton;?></a></a>
                    <?php else:
                        echo str_replace('<a', '<a class="prev"', get_previous_posts_link($prevButton));
                    endif; 
                ?>

            <?php /* Different numbers method for posts or custom post type*/ ?>

                <div class="numbers">
                    <?php if(is_blog()):?>
                        <?php pagination($wp_query->max_num_pages);?>
                    <?php else:?>
                        <?php custom_pagination($custom_query->max_num_pages,"",$paged);?>
                    <?php endif;?>
                </div>

            <?php /* Next */ ?>

                <?php 
                    if(!get_next_posts_link('',$maxPages)):?>
                        <a class="next inactive"><?php echo $nextButton;?></a>
                    <?php else: 
                        echo str_replace('<a', '<a class="next"', get_next_posts_link($nextButton,$maxPages));
                    endif; 
                ?>      

        </div>
    </div>
</section>



