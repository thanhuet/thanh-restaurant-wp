<?php
/**
 * Section 404 style
 *
 * @package Hair_Salon
 */

thim_customizer()->add_section(
	array(
		'id'       => 'general_404_style',
		'panel'    => 'general',
		'title'    => esc_html__( '404 Style', 'restaurant-wp' ),
		'priority' => 30,
	)
);
thim_customizer()->add_field(
	array(
		'id'      => '404_style',
		'type'    => 'select',
		'label'   => esc_html__( 'Style', 'restaurant-wp' ),
		'tooltip' => esc_html__( 'Style for 404 page.', 'restaurant-wp' ),
		'section' => 'general_404_style',
		'default' => 'style_2',
		'priority' => 10,
		'multiple' => 0,
		'choices' => array(
			'style_1' => esc_html__( 'Style 1', 'restaurant-wp' ),
			'style_2' => esc_html__( 'Style 2', 'restaurant-wp' ),
		),
	)
);
thim_customizer()->add_field(
	array(
		'id'       => '404_background_image',
		'type'     => 'image',
		'label'    => esc_html__( '404 Background Image', 'restaurant-wp' ),
		'tooltip'  => esc_html__( 'You can upload image make to background image for page 404. ', 'restaurant-wp' ),
		'section'  => 'general_404_style',
		'priority' => 30,
		'js_vars'  => array(
			array(
				'element'  => '.main-top',
				'function' => 'css',
				'property' => 'background-image',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => '404_style',
				'operator' => '===',
				'value'    => 'style_1',
			),
		),
	)
);

