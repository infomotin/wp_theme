<?php 
function dz_customize_register($wp_customize ){
    dz_social_customizer_section($wp_customize);
    dz_misc_customize_sections($wp_customize);
}

?>