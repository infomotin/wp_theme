<?php 
function dz_customize_register($wp_customize ){
    $wp_customize->add_setting('dz_facebook_hendle',[
        'default' => '',
    ]);

    $wp_customize->add_section( 'dz_social_section' , array(
        'title'      => __( 'Dazzle Social Setting', 'dazzlesoft' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'dz_social_facebook_input',
            array(
                'label'          => __( 'facebook hendle', 'dazzlesoft' ),
                'section'        => 'dz_social_section',
                'settings'       => 'dz_facebook_hendle',
                //'type'           => 'radio',
                // 'choices'        => array(
                //     'dark'   => __( 'Dark' ),
                //     'light'  => __( 'Light' )
                // )
            )
        )
    );
}

?>