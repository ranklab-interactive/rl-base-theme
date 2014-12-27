<?php
/*------------------------------------*\
	Theme Support
\*------------------------------------*/
if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
	
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// This theme uses wp_nav_menu()
	add_theme_support( 'nav-menus' );

}

// This theme uses wp_nav_menu() in one location.
function register_my_menus() {
	register_nav_menus(
		array(
			'main-nav' => __( 'Main Navigation' ),
		)
	);
}
add_action( 'init', 'register_my_menus' );



/*------------------------------------*\
	Alt Functions
\*------------------------------------*/
//Disable Autosave
function disableAutoSave(){
    wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disableAutoSave' );

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');


// Load jQuery
if ( !is_admin() ) {
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false);
   wp_enqueue_script('jquery');
}






/*------------------------------------*\
	Admin Functions
\*------------------------------------*/
/*
//Dashboard Logo
if ( ! function_exists( 'sm_add_adminbar_site_icon' ) ) {
// add to admin area, inside head
add_action( 'admin_head', 'sm_add_adminbar_site_icon' );
// add to frontend, inside head
add_action( 'wp_head', 'sm_add_adminbar_site_icon' );
function sm_add_adminbar_site_icon() {
if ( ! is_admin_bar_showing() ) {
return;
}
echo '<style>
#wp-admin-bar-site-name > a.ab-item:before {
float: left;
width: 18px;
height: 18px;
margin: 5px 5px 0 -1px;
display: block;
content: "";
opacity: 0.4;
background:url('.get_bloginfo('template_directory').'/style/images/wp_dashboard_logo.png) !important;
}
#wp-admin-bar-site-name:hover > a.ab-item:before {
opacity: 1;
}
</style>';
}
}
*/


/************* CUSTOM LOGIN PAGE *****************/
// calling your own login css so you can style it
function ranklab_login_css() {
	/* I couldn't get wp_enqueue_style to work :( */
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/style/css/login.css">';
}

// changing the logo link from wordpress.org to your site
function ranklab_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function ranklab_login_title() { return get_option('blogname'); }

// calling it only on the login page
add_action('login_head', 'ranklab_login_css');
add_filter('login_headerurl', 'ranklab_login_url');
add_filter('login_headertitle', 'ranklab_login_title');


//Change Footer Text
function modify_footer_admin () {
  echo 'Created by <a href="http://www.ranklab.com">Ranklab</a>';
}
add_filter('admin_footer_text', 'modify_footer_admin');


//Remove Dashboard Widgets
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

// example custom dashboard widget
function custom_dashboard_widget() {
	echo "<p>Dearest Client, Here&rsquo;s how to do that thing I told you about yesterday...</p>";
}
function add_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'How to Do Something in WordPress', 'custom_dashboard_widget');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

//Unregister Widgets
// unregister all default WP Widgets
function unregister_default_wp_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
}
add_action('widgets_init', 'unregister_default_wp_widgets', 1);

// Hide Login Errors
function failed_login () {
    return "the login information you have entered is incorrect.";
}
add_filter ( 'login_errors', 'failed_login' );

// Disallow File Edit
define ( 'DISALLOW_FILE_EDIT', true );
	

/*------------------------------------*\
	End Admin Functions
\*------------------------------------*/
	


//Replace Excerpt Ellipsis
function replace_excerpt($content) {       return str_replace('[...]','', $content);}add_filter('the_excerpt', 'replace_excerpt');
?>