<?php 
/**
 * 
 */
get_header();
?>
<div id="some-app">
    <?php 
        while(have_posts() ):
            the_post();
            // the_content();
            get_template_part( 'template-parts/post/content' );
        endwhile;
        if(comments_open() || get_comments_number(  )):
            comments_template();
        endif;
    ?>
</div>
<div class="side-bar">
    <?php get_sidebar( ); ?>
</div>
<?php  
get_footer( ); 
?>