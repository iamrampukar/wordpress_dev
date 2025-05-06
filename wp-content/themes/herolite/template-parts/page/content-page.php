<?php
/**
 * Content Page
 */
?>
<div class="single-app">
    <?php
    the_title( '<h3 class="">','</h3>' );
    ?>
</div>

<div class="image-app">
    <?php 
    if(has_post_thumbnail()):
        the_post_thumbnail('full');
    endif;
    ?>
</div>

<div>
    <?php
    the_content( );
    
    wp_link_pages( array(
        'before' => '<div>',
        'after' => '</div>',
    ) );
    ?>
</div>