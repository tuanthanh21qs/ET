<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for child theme payton-wordpress Consult for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_stylesheet_directory() . '/partials/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'payton_wordpress_register_required_plugins' );

function payton_wordpress_register_required_plugins() {

	$plugins = array(


// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'SiteOrigin Widgets Bundle',
			'slug'      => 'so-widgets-bundle',
			'required'  => true,
),		
// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Livemesh SiteOrigin Widgets',
			'slug'      => 'livemesh-siteorigin-widgets',
			'required'  => true,
),			
					
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Visual Portfolio',
			'slug'      => 'visual-portfolio',
			'required'  => true,
),		
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Lightbox Ultimate',
			'slug'      => 'ultimate-lightbox',
			'required'  => true,
),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Page Builder de SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => true,
),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'MailChimp for WordPress',
			'slug'      => 'mailchimp-for-wp',
			'required'  => false,
),


		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'WooCommerce Menu Cart',
			'slug'      => 'woocommerce-menu-bar-cart',
			'required'  => false,
),


	$config = array(
		'id'           => 'payton-wordpress',            // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	)
);
	tgmpa( $plugins, $config );
	
}
