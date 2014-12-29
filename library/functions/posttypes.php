<?php
function post_type_sample() {
    $labels = array(
        'name' => __( 'Sample' ),
        'singular_name' => __( 'Sample' ),
        'add_new' => __( 'Add New Sample' ),
        'add_new_item' => __( 'Add New Sample' ),
        'edit_item' => __( 'Edit Sample' ),
        'new_item' => __( 'Add New Sample' ),
        'view_item' => __( 'View Sample' ),
        'search_items' => __( 'Search Samples' ),
        'not_found' => __( 'No Samples found' ),
        'not_found_in_trash' => __( 'No Samples found in trash' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments' ),
        'capability_type' => 'post',
        'rewrite' => array("slug" => "Sample"), // Permalinks format
        'menu_position' => 5,
        //'menu_icon' => plugin_dir_url( __FILE__ ) . '/images/calendar-icon.gif',  // Icon Path
        'has_archive' => true
    );
    register_post_type( 'sample', $args );
}
add_action( 'init', 'post_type_sample' );
?>