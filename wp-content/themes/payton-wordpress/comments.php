<?php
/**
 * The template for displaying post comments
 *
 * @package Layers
 * @since Layers 1.0.0
 */
 
if ( post_password_required() ) {
	return;
}
get_header(); 
get_template_part( 'partials/header' , 'page-title' );
do_action('layers_before_comments'); ?>


<div id="comments" <?php echo layers_wrapper_class( 'comment_container', 'push-top-large' ); ?>>
	<?php if ( have_comments() ) { ?>
		<div class="section-title small">
			<h3 class="heading comment-title">
				<?php comments_number();?>
			</h3>
		</div>
		
		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'callback'		=> 'payton_wordpress_comment',
					'short_ping'	=> true,
				) );
			?>
		</ul>
			

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {  ?>
			<nav id="comment-nav-below" class="pagination" role="navigation">
					<div class="nav-previous pull-left"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'layerswp' ) ); ?></div>
					<div class="nav-next pull-right"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'layerswp' ) ); ?></div>
				</nav>
			
			
		<?php } // check for comment navigation ?>
		
<?php }

if ( !is_page() && ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'layerswp' ); ?></p>
	<?php endif; ?>

	<?php comment_form();  ?>

</div>
		 
<?php do_action('layers_after_comments');