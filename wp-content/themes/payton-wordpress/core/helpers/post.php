<?php  /**
 * Post helper funtions
 *
 * This file is used to display post elements, from meta to media, to galleries, to in-post pagination, all post-related functions sit in this file.
 *
 * @package Layers
 * @since Layers 1.0.0
 */


if( !function_exists( 'layers_comment' ) ) {
	function layers_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;?>
		<?php if( 2  < $depth && isset( $GLOBALS['lastdepth'] ) && $depth != $GLOBALS['lastdepth'] ) { ?>
			<div class="comments-nested push-top">
		<?php } ?>
		<div <?php comment_class( 'content well' ); ?> id="comment-<?php comment_ID(); ?>">
			<div class="avatar push-bottom clearfix">
				<?php edit_comment_link(esc_html__('(Edit)' , 'layerswp' ),'<small class="pull-right">','</small>') ?>
				<a class="avatar-image" href="">
					<?php echo get_avatar($comment, $size = '70'); ?>
				</a>
				<div class="avatar-body">
					<h5 class="avatar-name"><?php echo get_comment_author_link(); ?></h5>
					<small><?php printf(esc_html__('%1$s at %2$s' , 'layerswp' ), get_comment_date(),  get_comment_time()) ?></small>
				</div>
			</div>

			<div class="copy small">
				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.' , 'layerswp' ) ?></em>
					<br />
				<?php endif; ?>
				<?php comment_text() ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		<?php if( 2 < $depth && isset( $GLOBALS['lastdepth'] ) && $depth == $GLOBALS['lastdepth'] ) { ?>
			</div>
		<?php } ?>

		<?php $GLOBALS['lastdepth'] = $depth; ?>
	<?php }
} 
// end layers_comment

/**
*  Adjust the site title for static front pages
*/
if( !function_exists( 'layers_post_class' ) ) {
	function layers_post_class( $classes ) {

		global $woocommerce;

		if( is_single() )
			$classes[] = 'container';

		if( ( isset( $woocommerce ) && is_cart() && 'product' == get_post_type() ) || is_post_type_archive( 'product' ) || is_tax( 'product_cat' ) || is_tax( 'product_tag' ) ) {

			$classes[] = 'column';
			// Honor WC loop columns filter
			$wc_span = 12 / apply_filters( 'loop_shop_columns', 3 );
			$spans = array(12, 6, 3, 2, 1);
			$span  = in_array($wc_span, $spans) ? $wc_span : 4;
			$classes[] = 'span-'.$span;
		}

		return $classes;
	}
}
add_filter( 'post_class' , 'layers_post_class' );
add_filter( 'product_cat_class' , 'layers_post_class' );

