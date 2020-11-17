<?php 

/**
 * Plugin Name:       Dazzle Recipe
 * Plugin URI:        https://dazzlesoftbd.com
 * Description:       Dazzle Recipe is Simple Devloped With Udemy Lecture
 * Version:           1.0.0
 * Author:            Dazzlesoft 
 * Author URI:        http://dazzlesoftbd.com
 * Text Domain:       dazzlesoftbd
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /l10n
 * GitHub Plugin URI: https://github.com/dazzlesoftbd
 */

 if(!function_exists('add_action')){
    echo " OH! No Your Are not in!";
    exit;
 }

 //setup 


 //include 
include('include/activate.php');
include('include/init.php');
include('process/save-post.php');
include('process/filter-content.php');

 //hooks
register_activation_hook(__FILE__,'r_activate_plugin');
add_action('init','recipe_init');
add_action('save_post_recipe','r_save_post_admin',10,3);

add_filter('the_content','r_filter_recipe_content');

 //shortcodes

