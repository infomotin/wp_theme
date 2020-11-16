<?php

/**
 * Plugin Name:       Dazzle Hooks Example
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

//functions as like include as root function descriptions 
function dz_title($title){
    return 'DazzleSoft '.$title;
}
function dz_footer(){
    echo 'DazzleSoft footer example';
}




//hooks
add_filter('the_title','dz_title');
add_action('wp_footer','dz_footer');
