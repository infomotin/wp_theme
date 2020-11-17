<?php 
function r_activate_plugin(){
    if(version_compare(get_bloginfo('version'),'5.0','<')){
       wp_die(__("Your WP are not supoort",'recipe_dazzle')); 
    }



//crate db on wp 
global $wpdb;
$createSQl ="
CREATE TABLE " . $wpdb->prefix . "recipe_ratings ( 
    ID BIGINT(20) NOT NULL AUTO_INCREMENT , 
    recipe_id BIGINT(20) NOT NULL ,
    rating FLOAT(3,2) NOT NULL ,
    user_ip VARCHAR(50) NOT NULL ,
    PRIMARY KEY (ID)
    ) ENGINE = InnoDB" . $wpdb->get_charset_collate() . ";";
    require(ABSPATH . "/wp-admin/includes/upgrade.php");
    dbDelta($createSQl);
}

?>