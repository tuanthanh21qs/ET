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

<div class="container content-main image-arch clearfix">
	<div class="grid">
		<?php get_sidebar( 'left' ); ?>

<div id="post-list" <?php layers_center_column_class(); ?>>
<?php
if( is_attachment() ) {
echo wp_get_attachment_image( get_the_ID(), 'large' );
} else {
echo layers_post_featured_media( array( 'postid' => get_the_ID(), 'wrap_class' => 'thumbnail push-bottom post-feature-thumbnail', 'size' => 'large' ) );
}
?>
<div class="story post-story">
<?php if ( ! empty( $post->post_excerpt ) ) : ?>
								<div class="entry-caption">
									<?php the_excerpt(); ?>
								</div><!-- .entry-caption -->
							<?php endif; ?>
</div>
</div>

		<?php get_sidebar( 'right' ); ?>
	</div>
</div>

<?php get_footer();