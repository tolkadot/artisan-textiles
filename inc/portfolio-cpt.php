<?php

 /*Register  Post Type for Portfolio */
function _post_type_Portfolio() {

// Set UI labels for  Post Type
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'understrap' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'understrap' ),
        'menu_name'           => __( 'Portfolio', 'understrap' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'understrap' ),
        'all_items'           => __( 'All Portfolio', 'understrap' ),
        'view_item'           => __( 'View Portfolio', 'understrap' ),
        'add_new_item'        => __( 'Add New Portfolio', 'understrap' ),
        'add_new'             => __( 'Add New', 'understrap' ),
        'edit_item'           => __( 'Edit Portfolio', 'understrap' ),
        'update_item'         => __( 'Update Portfolio', 'understrap' ),
        'search_items'        => __( 'Search Portfolio', 'understrap' ),
        'not_found'           => __( 'Not Found', 'understrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'understrap' ),
    );

// Set other options for  Post Type

    $args = array(
        'label'               => __( 'Portfolio', 'understrap' ),
        'description'         => __( 'Portfolio', 'understrap' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', '-fields' ),
        // You can associate this CPT with a taxonomy or  taxonomy.
        /*'taxonomies'          => array( 'genres' ),*/
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
    );


    // Registering your  Post Type
    register_post_type( 'Portfolio', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', '_post_type_Portfolio', 0 );
