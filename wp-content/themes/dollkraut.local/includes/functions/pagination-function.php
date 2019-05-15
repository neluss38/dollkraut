<?php 

// numbered pagination
function pagination($pages = '', $range = 4)
{  
    $showitems = ($range * 2)+1;  

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }   

    if(1 != $pages)
    {
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
    }
}



function custom_pagination($numpages = '', $pagerange = '', $paged='') {

    if (empty($pagerange)) {
        $pagerange = 2;
    }


    global $paged;

    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }

    /** 
    * We construct the pagination arguments to enter into our paginate_links
    * function. 
    */
    $big = 999999999; // need an unlikely integer

    $pagination_args = array(
        'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
        'format' => 'page/%#%',    'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => True,
        'prev_next'       => False,
        'prev_text'       => __(' Previous Page'),
        'next_text'       => __(' Next Page'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
        );





    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo $paginate_links;
    }
}