<?php
/**
 * This template is used for displaying posts in post lists
 *
 * @package Layers
 * @since Layers 1.0.0
 */

global $post, $layers_post_meta_to_display; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'recent-post-item' ); ?>>
	<?php do_action('layers_before_list_post_title'); ?>
	
	<?php do_action('layers_after_list_post_title'); ?>

	<?php /**
	* Display the Featured Thumbnail
	*/
	echo layers_post_featured_media( array( 'postid' => get_the_ID(), 'wrap_class' => 'recent-post-image', 'size' => 'large' ) ); ?>

<div class="recent-post-text">
		<?php do_action('layers_before_list_title'); ?>
		<h4 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php do_action('layers_after_list_title'); ?>
		<?php layers_post_meta( get_the_ID(), array( 'date' ) , 'span', 'commentsm' ); ?>
	
</div>

	 
</article>