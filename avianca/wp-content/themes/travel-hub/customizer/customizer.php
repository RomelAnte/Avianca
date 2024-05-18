<?php

function travel_hub_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'adventure_travelling_tp_color_option_link' );
    $wp_customize->remove_control( 'adventure_travelling_tp_color_option_link' );
    
    $wp_customize->remove_setting( 'adventure_travelling_slider_content_layout' );
    $wp_customize->remove_control( 'adventure_travelling_slider_content_layout' );

}

add_action( 'customize_register', 'travel_hub_remove_customize_register', 11 );

function travel_hub_customize_register( $wp_customize ) {
	
	// Register the custom control type.
	$wp_customize->register_control_type( 'Travel_Hub_Toggle_Control' );

	$wp_customize->add_setting( 'travel_hub_tp_secondary_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'travel_hub_tp_secondary_color_option', array(
	    'description' => __('It will change the complete theme secondary color in one click.', 'travel-hub'),
	    'section' => 'adventure_travelling_color_option',
	    'settings' => 'travel_hub_tp_secondary_color_option',
  	)));

  	$wp_customize->add_setting('travel_hub_slider_content_layout',array(
        'default' => 'LEFT-ALIGN',
        'sanitize_callback' => 'adventure_travelling_sanitize_choices'
	));
	$wp_customize->add_control('travel_hub_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'travel-hub'),
        'section' => 'adventure_travelling_slider_section',
        'choices' => array(
        	'LEFT-ALIGN' => __('LEFT-ALIGN','travel-hub'),
            'CENTER-ALIGN' => __('CENTER-ALIGN','travel-hub'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','travel-hub'),
        ),
	) );

    //trip offer setting
	$wp_customize->add_section( 'travel_hub_trip_offer_section' , array(
    	'title'      => __( 'Trip Offers Settings', 'travel-hub' ),
		'panel' => 'adventure_travelling_panel_id',
		'priority' => 4,
	) );
    $wp_customize->add_setting( 'travel_hub_offer_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'adventure_travelling_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Travel_Hub_Toggle_Control( $wp_customize, 'travel_hub_offer_show_hide', array(
		'label'       => esc_html__( 'Show / Hide section', 'travel-hub' ),
		'section'     => 'travel_hub_trip_offer_section',
		'type'        => 'toggle',
		'settings'    => 'travel_hub_offer_show_hide',
	) ) );
	$wp_customize->add_setting('travel_hub_offer_section_short_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_hub_offer_section_short_title',array(
		'label'	=> __('Short Title','travel-hub'),
		'section'	=> 'travel_hub_trip_offer_section',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'travel_hub_offer_section_short_title', array(
		'selector' => '#travel-offer h6',
		'render_callback' => 'travel_hub_customize_partial_travel_hub_offer_section_short_title',
	) );
	$wp_customize->add_setting('travel_hub_offer_section_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_hub_offer_section_tittle',array(
		'label'	=> __('Section Title','travel-hub'),
		'section'	=> 'travel_hub_trip_offer_section',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('travel_hub_offer_section_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('travel_hub_offer_section_text',array(
		'label'	=> __('Section Description','travel-hub'),
		'section'	=> 'travel_hub_trip_offer_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$offer_cat[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('travel_hub_offer_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'adventure_travelling_sanitize_choices',
	));
	$wp_customize->add_control('travel_hub_offer_section_category',array(
		'type'    => 'select',
		'choices' => $offer_cat,
		'label' => __('Select Category','travel-hub'),
		'section' => 'travel_hub_trip_offer_section',
	));

}
add_action( 'customize_register', 'travel_hub_customize_register' );
