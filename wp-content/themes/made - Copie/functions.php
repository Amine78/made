<?php
function admin_css() {

$admin_handle = 'admin_css';
$admin_stylesheet = get_template_directory_uri() . '/css/syle.css';

wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'admin_css', 11 );
 }