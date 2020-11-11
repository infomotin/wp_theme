<?php 
function dz_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menu('primary',__('Primary Menu','dazzlesoft'));
    register_nav_menu('secondary',__('Secondary Menu','dazzlesoft'));
    register_nav_menu('topheader',__('Topheader Menu','dazzlesoft'));


    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'dazzle_header',
                                 'description' => 'DazzleSoft Header position')
                                 );
        // quads_register_ad( array('location' => 'footer', 'description' => 'Footer position') );
        // quads_register_ad( array('location' => 'custom', 'description' => 'Custom position') );
        }
}

?>