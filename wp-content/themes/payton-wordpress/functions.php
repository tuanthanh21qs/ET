<?php

include_once ( get_stylesheet_directory() . '/partials/tgm-init.php' );
include_once ( get_stylesheet_directory() . '/core/helpers/post.php' ); /*fix for shop space*/

add_filter( 'layers_customizer_control_defaults', 'payton_wordpress_customizer_defaults' );
 
function payton_wordpress_customizer_defaults( $defaults ){
 
$defaults = array(
	'body-fonts' => 'Roboto',
	'heading-fonts' => 'Poppins',
	'form-fonts' => 'Raleway',
	'header-background-color' => '#333333',
	'header-sticky' => '1',
	'footer-sidebar-count' => '0',
	'header-overlay' => '1',
	'footer-background-color' => '#333333',
	'footer-link-color' => '#ffffff',
);
 
return $defaults;
}


add_action( 'wp_enqueue_scripts', 'payton_wordpress_styles' ); 
function payton_wordpress_styles(){
wp_enqueue_style( 'framework', get_stylesheet_directory_uri() . '/assets/css/framework.css' );
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
wp_enqueue_style( 'et-line-font', get_stylesheet_directory_uri() . '/assets/css/et-line-font.css' );
wp_enqueue_style( 'payton-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
wp_enqueue_style( 'payton-animate-custom', get_stylesheet_directory_uri() . '/assets/css/animate-custom.css' );
wp_enqueue_style( 'payton-woocommerce', get_stylesheet_directory_uri() . '/assets/css/woocommerce.css' );
wp_enqueue_style( 'gutenberg', get_stylesheet_directory_uri() . '/assets/css/gutenberg.css' );

wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true  );
wp_enqueue_script('payton-wordpress-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true  );
}

function layers_payton_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'layers_payton_add_editor_styles' );

add_theme_support( 'align-wide' );
add_theme_support( 'editor-styles' );
 
add_action( 'after_setup_theme' , 'layers_setup', 100 );

/*Gutenberg*/


function payton_wordpress_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong red', 'payton-wordpress' ),
            'slug' => 'strong-red',
            'color' => '#cd2122',
        ),
        array(
            'name' => esc_html__( 'strong white', 'payton-wordpress' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'payton-wordpress' ),
            'slug' => 'light-black',
            'color' => '#040416',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'payton-wordpress' ),
            'slug' => 'very-light-gray',
            'color' => '#7a7a7a',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'payton-wordpress' ),
            'slug' => 'very-dark-black',
            'color' => '#2f2f2f',
        ),
    ) );

		// Add custom editor font sizes.
		add_theme_support( 'editor-font-sizes', array(
				array(
					'name'      => esc_html__( 'Small', 'payton-wordpress' ),
					'size'      => 12,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'payton-wordpress' ),
					'size'      => 14,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'payton-wordpress' ),
					'size'      => 30,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'payton-wordpress' ),
					'size'      => 36,
					'slug'      => 'huge',
				),
			)
		);
}
add_action( 'after_setup_theme', 'payton_wordpress_gutenberg_editor_palette_styles' );

function payton_wordpress_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'payton_wordpress_theme_add_editor_styles' );


/*comm*/


/*sidebar*/
  
function payton_wordpress_widgets_init() {
 register_sidebar( array(
 'name'          => esc_html__( 'Top bar', 'payton-wordpress' ),
 'id'            => 'payton_wordpress_above_header',
 'before_widget' => '<div>',
 'after_widget'  => '</div>',
 'before_title'  => '<h2>',
 'after_title'   => '</h2>',
 ) );
 }
add_action( 'widgets_init', 'payton_wordpress_widgets_init' );

	function payton_wordpress_html_widget_title( $var) {
		$var = (str_replace( '[', '<', $var ));
		$var = (str_replace( ']', '>', $var ));
		return $var ;
		
	}
	add_filter( 'widget_title', 'payton_wordpress_html_widget_title' );


/*end sidebar*/

/**/

/*
 * Function comment markup
 */
if( !function_exists('payton_wordpress_comment') ) :
function payton_wordpress_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	
	if ( get_comment_type() == 'comment' ) { 
?>
	<li class="comment-content" id="comment-<?php comment_ID() ?>">
		<div class="comment_image">
			<?php echo get_avatar( $comment->comment_author_email, 83 ); ?>
		</div>
		
		<div class="comment">
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'payton-wordpress' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			<?php edit_comment_link( esc_html__( 'Edit', 'payton-wordpress' ), '', '' ); ?>
			<h3 class="header"><span><?php echo get_comment_author_link() ?></span><small><?php echo get_comment_date(); ?></small></h3>
			<div class="comment-text">
				<?php echo wpautop( get_comment_text() ); ?>
				<?php if ($comment->comment_approved == '0') : ?>
					<p><em><?php esc_html_e('Your comment is awaiting moderation.', 'payton-wordpress') ?></em></p>
				<?php endif; ?>
			</div>
		</div>
<?php
	} else {
?>
	<li class="comment-content" id="comment-<?php comment_ID() ?>">
		<div class="comment ping">
			<?php echo '<span>' . comment_type() . ':</span> ' . get_comment_author_link() ?>
		</div>
<?php	
	}
}
endif;
