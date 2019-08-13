<?php

add_action( 'admin_bar_menu', 'show_template' );
function show_template() {
global $template;
print_r( $template );
}


register_nav_menus( array(
    'footer-menu' => esc_html__( 'Footer Menu', 'understrap-tolka' ),
) );


function disable_search( $query, $error = true ) {
  if ( is_search() ) {
    $query->is_search = false;
    $query->query_vars[s] = false;
    $query->query[s] = false;
    // to error
    if ( $error == true )
    $query->is_404 = true;
  }
}

add_action( 'parse_query', 'disable_search' );
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );
