<?php 
function r_activate_plugin(){
    if(version_compare(get_bloginfo('version'),'5.0','<')){
       wp_die(__("Your WP are not supoort",'recipe_dazzle')); 
    }
}



?>