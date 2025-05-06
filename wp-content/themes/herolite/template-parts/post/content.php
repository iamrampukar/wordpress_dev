<?php
/**
 * 
 */
?>
<article>
    
    <?php 
    if(is_single(  )):
        the_title( '<h4 class="">','</h4>'); 
    else:
        the_title( '<h4 class=""><a class="" href="'.esc_url( get_permalink( ) ). '">','</a><h4>'); 
    endif;
    ?>
</article>

<?php
if(has_post_thumbnail( )):
    echo "hello";
    the_post_thumbnail( 'large' );
endif;
?>
<?php if(is_home(  ) || is_archive(  )): ?>
    <?php the_excerpt(  ); ?>
<?php elseif( is_single(  ) ): ?>
    <?php 
       the_content( ); 
       
    ?>
<?php endif; ?>
<hr/>
