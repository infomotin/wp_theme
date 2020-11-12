<?php 
function dz_customize_register($wp_customize ){
    // echo '<pre>';
    // var_dump($wp_customize);
    // echo '</pre>';
    $wp_customize->get_section('title_tagline')->title ='General';


    $wp_customize->add_panel('dazzle',[
        'title'         =>__('Dazzle','dazzle'),
        'descriptions'  => '<p> Dazzle Theme Settings</p>',
        'priority'      => 160
    ]);
    dz_social_customizer_section($wp_customize);
    dz_misc_customize_sections($wp_customize);
}

?>