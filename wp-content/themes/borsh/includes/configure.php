<?php

/**
 * Customize the login page logo
 */
function borsh_custom_login_logo() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/src/img/materials-admin.png);
            height: 150px;
            width: 320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'borsh_custom_login_logo');
// MENUS
function _custom_theme_register_menu() {
    register_nav_menus(
        array(
            'menu-header' => __( 'Menu Header' ),
        )
    );
}
add_action( 'init', '_custom_theme_register_menu' );

function custom_setup() {
    // Images
    add_theme_support( 'post-thumbnails' );

    // Title tags
    add_theme_support('title-tag');

    // Languages
    load_theme_textdomain(THEME_TD, get_template_directory() . '/languages');

    // HTML 5 - Example : deletes type="*" in scripts and style tags
    add_theme_support( 'html5', [ 'script', 'style' ] );

    // Remove SVG and global styles
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters' );

    // Remove wp_footer actions which add's global inline styles
    remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

    // Remove render_block filters which adds unnecessary stuff
    remove_filter('render_block', 'wp_render_duotone_support');
    remove_filter('render_block', 'wp_restore_group_inner_container');
    remove_filter('render_block', 'wp_render_layout_support_flag');

	// Remove useless WP image sizes
	remove_image_size( '1536x1536' );
	remove_image_size( '2048x2048' );

	// Custom image sizes
	// add_image_size( '424x424', 424, 424, true );
	// add_image_size( '1920', 1920, 9999 );
	add_image_size( 'slider_image', 299, 266, true );
}
add_action('after_setup_theme', 'custom_setup');

// disabling big image sizes scaled
add_filter( 'big_image_size_threshold', '__return_false' );


// Remove WP Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// delete wp-embed.js from footer
function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// delete jquery migrate
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', null, null, true );
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

// add SVG to allowed file uploads
function add_file_types_to_uploads($mime_types) {
	$mime_types['svg'] = 'image/svg+xml';

	return $mime_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads', 1, 1);

//disable update emails
add_filter( 'auto_plugin_update_send_email', '__return_false' );
add_filter( 'auto_theme_update_send_email', '__return_false' );
