<?php

add_action( 'admin_bar_menu', 'show_template' );
function show_template() {
global $template;
print_r( $template );
}


register_nav_menus( array(
    'footer-menu' => esc_html__( 'Footer Menu', 'understrap-tolka' ),
) );
