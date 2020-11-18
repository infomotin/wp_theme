<?php 


function r_enqueue_script(){
    wp_register_style('r_rateit',plugins_url('/assets/rateit/rateit.css',RECIPE_PLUGIN_URI));
    wp_enqueue_style('r_rateit');

    //working with wp jquery file 
    wp_register_script(
        'r_rateit',
        plugins_url('/assets/rateit/jquery.rateit.min.js',RECIPE_PLUGIN_URI),
        ['jquery'],
        '1.0.0',
        true
    );

    // main jquery file 
    wp_register_script(
        'r_main',
        plugins_url('/assets/js/main.js',RECIPE_PLUGIN_URI),
        ['jquery'],
        '1.0.0',
        true
    );

    //getting ajax value and calling ajax uri 
    wp_localize_script('r_main','recipe_obj',[
        'ajax_url'          => admin_url('admin-ajax.php'),
    ]);

    wp_enqueue_script('r_rateit');
    wp_enqueue_script('r_main');


}