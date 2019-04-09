<?php

add_action( 'admin_bar_menu', 'show_template' );
function show_template() {
global $template;
print_r( $template );
}
