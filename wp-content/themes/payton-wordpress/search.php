<?php
/**
 * The template for displaying post archives
 *
 * @package Layers
 * @since Layers 1.0.0
 */

get_header(); 
get_template_part( 'partials/header' , 'page-title' );
 ?>
<div class="container content-main archive clearfix">
	<div class="grid">
		<?php get_sidebar( 'left' ); ?>

		<?php if( have_posts() ) : ?>
			<div <?php layers_center_column_class(); ?>>
				<?php while( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'partials/content' , 'list' ); ?>
				<?php endwhile; // while has_post(); ?>

				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<div class="column span-8 story">
				<h3><?php esc_html_e( 'No Posts Found', 'payton-wordpress' ); ?></h3>
				<p><?php esc_html_e( 'There are no posts which match your query, please try a different search term.', 'payton-wordpress' ); ?></p>
				
			</div>
		<?php endif; // if has_post() ?>

		<?php get_sidebar( 'right' ); ?>
	</div><!-- /row -->
</div>
<?php get_footer();