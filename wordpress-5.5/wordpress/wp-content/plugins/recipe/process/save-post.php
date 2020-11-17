<?php 
function r_save_post_admin($post_id,$post,$update){
    $recipe_date = get_post_meta($post_id,'recipe_date',true);
    $recipe_date = empty($recipe_date)?[]:$recipe_date;
    $recipe_date['rating'] = isset($recipe_date['rating'])? absint( $recipe_date['rating'] ): 0 ;
    $recipe_date['rating_count'] = isset($recipe_date['rating_count'])? absint( $recipe_date['rating_count'] ): 0 ;

    update_post_meta($post_id,'recipe_date',$recipe_date);
}



?>