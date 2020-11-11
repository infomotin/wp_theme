<!-- // In Wp first executing Functins.php before index.php -->


<?php 
//setup
define('JU_DEV_MODE', true); 


//Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/custom-nav-walker.php'));
include(get_theme_file_path('/includes/widgets.php'));


//Hooks 
add_action('wp_enqueue_scripts','ju_enqueue');
add_action('after_setup_theme','dz_setup_theme');
add_action('widgets_init','dz_widgets_init');
add_action('widgets_init','dz_widgets_init2');


//Shortcodes 

?>