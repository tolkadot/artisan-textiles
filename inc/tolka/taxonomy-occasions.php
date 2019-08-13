<?php

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_occasions_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it occasions for your posts

function create_occasions_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Occasions', 'taxonomy general name' ),
    'singular_name' => _x( 'Occasion', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Occasions' ),
    'all_items' => __( 'All Occasions' ),
    'parent_item' => __( 'Parent Occasion' ),
    'parent_item_colon' => __( 'Parent Occasion:' ),
    'edit_item' => __( 'Edit Occasion' ),
    'update_item' => __( 'Update Occasion' ),
    'add_new_item' => __( 'Add New Occasion' ),
    'new_item_name' => __( 'New Occasion Name' ),
    'menu_name' => __( 'Occasions' ),
  );

// Now register the taxonomy

  register_taxonomy('occasions',array('product'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'occasion' ),
  ));

}

$labels = array(
  'name' => _x( 'Collections', 'taxonomy general name' ),
  'singular_name' => _x( 'Collection', 'taxonomy singular name' ),
  'search_items' =>  __( 'Search Collections' ),
  'all_items' => __( 'All Collections' ),
  'parent_item' => __( 'Parent Collection' ),
  'parent_item_colon' => __( 'Parent Collection:' ),
  'edit_item' => __( 'Edit Collection' ),
  'update_item' => __( 'Update Collection' ),
  'add_new_item' => __( 'Add New Collection' ),
  'new_item_name' => __( 'New Collection Name' ),
  'menu_name' => __( 'Collections' ),
);

// Now register the taxonomy

register_taxonomy('collections',array('product'), array(
  'hierarchical' => true,
  'labels' => $labels,
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'collection' ),
));

function change_post_menu_label() {
    global $menu, $submenu;

    $menu[5][0] = 'Notebook';
    $submenu['edit.php'][5][0] = 'Notebook';
    $submenu['edit.php'][10][0] = 'New Notebook Entry';
    $submenu['edit.php'][16][0] = 'Notebook Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Notebook';
    $labels->singular_name = 'Notebook';
    $labels->add_new = 'New Notebook Entry';
    $labels->add_new_item = 'New Notebook';
    $labels->edit_item = 'Edit Notebook';
    $labels->new_item = 'New Notebook';
    $labels->view_item = 'View Notebook';
    $labels->search_items = 'Search Notebook';
    $labels->not_found = 'Not found';
    $labels->not_found_in_trash = 'Not found in trash';
}
add_action( 'init', 'change_post_object_label' );


add_filter( 'register_post_type_args', 'wpd_change_post_type_args', 10, 2 );
function wpd_change_post_type_args( $args, $post_type ){
    if( 'products' == $post_type ){
        $args['rewrite']['with_front'] = false;
    }
    return $args;
}
