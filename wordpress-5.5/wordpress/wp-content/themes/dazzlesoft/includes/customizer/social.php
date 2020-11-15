<?php

function dz_social_customizer_section( $wp_customize ){

	$wp_customize->add_setting( 'dz_facebook_hendle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'dz_twitter_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'dz_instagram_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'dz_email', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'dz_phone_number', array(
		'default'                   =>  '',
	));

	$wp_customize->add_section( 'dz_social_section', array(
		'title'                     =>  __( 'Dazzle Social Settings', 'dazzlesoft' ),
        'priority'                  =>  30,
        'panel'                     =>'dazzle'
		
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_social_facebook_input',
		array(
			'label'                 =>  __( 'Facebook Handle', 'dazzlesoft' ),
			'section'               => 'dz_social_section',
			'settings'              => 'dz_facebook_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_social_twitter_input',
		array(
			'label'                 =>  __( 'Twitter Handle', 'dazzlesoft' ),
			'section'               => 'dz_social_section',
			'settings'              => 'dz_twitter_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_social_instagram_input',
		array(
			'label'                 =>  __( 'Instagram Handle', 'dazzlesoft' ),
			'section'               => 'dz_social_section',
			'settings'              => 'dz_instagram_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_social_email_input',
		array(
			'label'                 =>  __( 'Email', 'dazzlesoft' ),
			'section'               => 'dz_social_section',
			'settings'              => 'dz_email',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'dz_social_phone_number_input',
		array(
			'label'                 =>  __( 'Phone Number', 'dazzlesoft' ),
			'section'               => 'dz_social_section',
			'settings'              => 'dz_phone_number',
			'type'                  =>  'text'
		)
	));
}