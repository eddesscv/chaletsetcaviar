<?php
/**
 * Pro upsell options
 *
 * @package Sydney
 */

/**
 * Main Header
 */
$sydney_controls_general     = json_decode( $wp_customize->get_control( 'sydney_main_header_tabs' )->controls_general );
$sydney_new_controls_general = array( '#customize-control-sydney_upsell_main_header' );
$wp_customize->get_control( 'sydney_main_header_tabs' )->controls_general = json_encode( array_merge( $sydney_controls_general, $sydney_new_controls_general ) );

$wp_customize->add_setting( 
    'sydney_upsell_main_header',
	array(
		'default'           => '',
		'sanitize_callback' => 'sydney_sanitize_text'
	)
);

$wp_customize->add_control( 
    new Sydney_Upsell_Message( 
        $wp_customize, 
        'sydney_upsell_main_header',
        array(
            'section'     => 'sydney_section_main_header',
            'description' => __( 'More header options are available in Sydney Pro', 'sydney' ),
            'priority'    => 999
        )
    ) 
);



/**
 * Mobile Header
 */
$sydney_controls_general     = json_decode( $wp_customize->get_control( 'sydney_mobile_header_tabs' )->controls_general );
$sydney_new_controls_general = array( '#customize-control-sydney_upsell_mobile_header' );
$wp_customize->get_control( 'sydney_mobile_header_tabs' )->controls_general = json_encode( array_merge( $sydney_controls_general, $sydney_new_controls_general ) );

$wp_customize->add_setting( 
    'sydney_upsell_mobile_header',
	array(
		'default'           => '',
		'sanitize_callback' => 'sydney_sanitize_text'
	)
);

$wp_customize->add_control( 
    new Sydney_Upsell_Message( 
        $wp_customize, 
        'sydney_upsell_mobile_header',
        array(
            'section'     => 'sydney_section_mobile_header',
            'description' => __( 'More header options are available in Sydney Pro', 'sydney' ),
            'priority'    => 999
        )
    ) 
);

/**
 * Footer widgets
 */
$sydney_controls_general     = json_decode( $wp_customize->get_control( 'sydney_footer_widgets_tabs' )->controls_general );
$sydney_new_controls_general = array( '#customize-control-sydney_upsell_footer_widgets' );
$wp_customize->get_control( 'sydney_footer_widgets_tabs' )->controls_general = json_encode( array_merge( $sydney_controls_general, $sydney_new_controls_general ) );

$wp_customize->add_setting( 
    'sydney_upsell_footer_widgets',
	array(
		'default'           => '',
		'sanitize_callback' => 'sydney_sanitize_text'
	)
);

$wp_customize->add_control( 
    new Sydney_Upsell_Message( 
        $wp_customize, 
        'sydney_upsell_footer_widgets',
        array(
            'section'     => 'sydney_section_footer_widgets',
            'description' => __( 'More footer options are available in Sydney Pro', 'sydney' ),
            'priority'    => 999
        )
    ) 
);

/**
 * Footer credits
 */
$sydney_controls_general     = json_decode( $wp_customize->get_control( 'sydney_footer_credits_tabs' )->controls_general );
$sydney_new_controls_general = array( '#customize-control-sydney_upsell_footer_credits' );
$wp_customize->get_control( 'sydney_footer_credits_tabs' )->controls_general = json_encode( array_merge( $sydney_controls_general, $sydney_new_controls_general ) );

$wp_customize->add_setting( 
    'sydney_upsell_footer_credits',
	array(
		'default'           => '',
		'sanitize_callback' => 'sydney_sanitize_text'
	)
);

$wp_customize->add_control( 
    new Sydney_Upsell_Message( 
        $wp_customize, 
        'sydney_upsell_footer_credits',
        array(
            'section'     => 'sydney_section_footer_credits',
            'description' => __( 'More footer options are available in Sydney Pro', 'sydney' ),
            'priority'    => 999
        )
    ) 
);

/**
 * Blog
 */
$sydney_controls_general     = json_decode( $wp_customize->get_control( 'sydney_blog_archive_tabs' )->controls_general );
$sydney_new_controls_general = array( '#customize-control-sydney_upsell_blog_archives' );
$wp_customize->get_control( 'sydney_blog_archive_tabs' )->controls_general = json_encode( array_merge( $sydney_controls_general, $sydney_new_controls_general ) );

$wp_customize->add_setting( 
    'sydney_upsell_blog_archives',
	array(
		'default'           => '',
		'sanitize_callback' => 'sydney_sanitize_text'
	)
);

$wp_customize->add_control( 
    new Sydney_Upsell_Message( 
        $wp_customize, 
        'sydney_upsell_blog_archives',
        array(
            'section'     => 'sydney_section_blog_archives',
            'description' => __( 'More blog options are available in Sydney Pro', 'sydney' ),
            'priority'    => 999
        )
    ) 
);

$sydney_controls_general     = json_decode( $wp_customize->get_control( 'sydney_blog_single_tabs' )->controls_general );
$sydney_new_controls_general = array( '#customize-control-sydney_upsell_blog_singles' );
$wp_customize->get_control( 'sydney_blog_single_tabs' )->controls_general = json_encode( array_merge( $sydney_controls_general, $sydney_new_controls_general ) );

$wp_customize->add_setting( 
    'sydney_upsell_blog_singles',
	array(
		'default'           => '',
		'sanitize_callback' => 'sydney_sanitize_text'
	)
);

$wp_customize->add_control( 
    new Sydney_Upsell_Message( 
        $wp_customize, 
        'sydney_upsell_blog_singles',
        array(
            'section'     => 'sydney_section_blog_singles',
            'description' => __( 'More blog options are available in Sydney Pro', 'sydney' ),
            'priority'    => 999
        )
    ) 
);