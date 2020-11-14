<?php 
function dz_misc_customize_sections($wp_customize ){
    $wp_customize->add_setting('dz_header_show_search',[
        'default'       => 'yes',
        'transport'     =>'postMessage'
    ]);
    $wp_customize->add_setting('dz_header_show_cart',[
        'default'       => 'yes',
        'transport'     =>'postMessage'
    ]);
    $wp_customize->add_setting('dz_footer_copywrite_text',[
        'default'       => 'Copyrite &copy; 2020 All Rights Reserved.',
    ]);
    $wp_customize->add_setting('dz_footer_tos_page',[
        'default'       => '0',
    ]);
    $wp_customize->add_setting('dz_footer_privacy_page',[
        'default'       => '0',
    ]);
        //colore chang setting 

    $wp_customize->add_setting('dz_colore_piker_more',[
        'default'       => '#f0f0f0',
    ]);
    //colore file chang setting 
    $wp_customize->add_setting('dz_report_file',[
        'default'       => '',
    ]);


    $wp_customize->add_section( 'dz_misc_section', array(
		'title'                     =>  __( 'Dazzle Misc Settings', 'dazzlesoft' ),
        'priority'                  =>  30,
        'panel'                     =>'dazzle'
		
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_header_show_search_input',
		array(
			'label'                 =>  __( 'Show Search Button In Header', 'dazzlesoft' ),
			'section'               => 'dz_misc_section',
			'settings'              => 'dz_header_show_search',
            'type'                  =>  'checkbox',
            'choices'               =>[
                'yes'               =>'Yes'

            ]
		)
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_header_show_cart_input',
		array(
			'label'                 =>  __( 'Show cart Button In Header', 'dazzlesoft' ),
			'section'               => 'dz_misc_section',
			'settings'              => 'dz_header_show_cart',
            'type'                  =>  'checkbox',
            'choices'               =>[
                'yes'               =>'Yes'

            ]
		)
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_footer_copywrite_text_input',
		array(
			'label'                 =>  __( 'Show copywrite In Footer', 'dazzlesoft' ),
			'section'               => 'dz_misc_section',
			'settings'              => 'dz_footer_copywrite_text',
            // 'type'                  =>  'checkbox',
            // 'choices'               =>[
            //     'yes'               =>'Yes'

            // ]
		)
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_footer_tos_page_input',
		array(
			'label'                 =>  __( 'Show Footer Page', 'dazzlesoft' ),
			'section'               => 'dz_misc_section',
			'settings'              => 'dz_footer_tos_page',
            'type'                  =>  'dropdown-pages',
            
		)
    ));
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_footer_privacy_page_input',
		array(
			'label'                 =>  __( 'Show Footer privacy Page', 'dazzlesoft' ),
			'section'               => 'dz_misc_section',
			'settings'              => 'dz_footer_privacy_page',
            // 'type'                  =>  'dropdown-pages',
            
		)
    ));

    //decliaring contrroller 
    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'dz_colore_piker_more_input', 
        array(
            'label'      => __( 'Read more link Color', 'dazzlesoft' ),
            'section'    => 'your_section_id',
            'settings'   => 'dz_colore_piker_more',
        ) )
    );
    //decliaring contrroller  uploade coltroller 
    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'dz_colore_piker_more_input', 
        array(
            'label'      => __( 'Header Color', 'mytheme' ),
            'section'    => 'your_section_id',
            'settings'   => 'your_setting_id',
        ) )
    );



}


?>