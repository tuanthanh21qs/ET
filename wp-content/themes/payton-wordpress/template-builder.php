<?php
/**
 * Template Name: Template builder
 *
 * The template for displaying page builder no sidebar and title
 *
 * @package Layers
 * @since Layers 1.0.0
 */

get_header(); ?>


<div <?php post_class( 'container clearfix' ); ?>>
<?php do_action('layers_before_page_loop'); ?>
	
<?php get_template_part( 'partials/content', 'notitle' ); ?>

<?php do_action('layers_after_page_loop'); ?>
</div>

<?php get_footer();

 
