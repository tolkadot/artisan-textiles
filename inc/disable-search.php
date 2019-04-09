<?php/*disable search */
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
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );
function remove_search_widget() {
    unregister_widget('WP_Widget_Search');
}
add_action( 'widgets_init', 'remove_search_widget' );
