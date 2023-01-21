<?php 

include (get_theme_file_path('/includes/front/enqueue.php'));
include (get_theme_file_path('/includes/front/setup.php'));

add_action('wp_enqueue_scripts','u_enqueue');
add_action('wp_after_setup_theme','u_setup_theme');
