<?php
/**
 * The template for displaying the 404 page
 *
 * @package Layers
 * @since Layers 1.0.0
 */

get_header(); 
get_template_part( 'partials/header' , 'page-404' );
?>

<div class="post content-main clearfix container">
     
       

        
            <?php get_template_part( 'partials/content', 'empty' ); ?>
        
  
</div>

<?php get_footer();