<?php 


function r_enqueue_script(){
    wp_register_style('r_rateit',plugins_url('/assets/rateit/rateit.css',RECIPE_PLUGIN_URI));
    wp_enqueue_script('r_rateit');


    wp_register_script('r_rateit',plugins_url('assets/rateit/jquery.rateit.min.js',RECIPE_PLUGIN_URI),
    ['jquery'],
    '1.0.0',true
    );
    wp_register_script('r_main',plugins_url('assets/js/main.js',RECIPE_PLUGIN_URI),
    ['jquery'],
    '1.0.0',true
    );
    wp_enqueue_script('r_rateit');
    wp_enqueue_script('r_main');


}