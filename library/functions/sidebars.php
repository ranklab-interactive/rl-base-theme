<?php
//Add Sidebars
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Default Sidebar',
		'id'   => 'default-sidebar',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Custom Sidebar',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}
?>