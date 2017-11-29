<?php
/**
 * Section Header Layout
 * 
 * @package Thim_Starter_Theme
 */

thim_customizer()->add_section(
	array(
		'id'             => 'header_layout',
		'title'          => esc_html__( 'Layouts', 'restaurant-wp' ),
		'panel'			 => 'header',
		'priority'       => 20,
	)
);

// Select Header Layout

// Select Header Position
thim_customizer()->add_field(
	array(
		'id'          => 'header_position',
		'type'        => 'select',
		'label'       => esc_html__( 'Header Positions', 'restaurant-wp' ),
		'tooltip'     => esc_html__( 'Allows you can select position layout for header layout. ', 'restaurant-wp' ),
		'section'     => 'header_layout',
		'priority'    => 20,
		'multiple'    => 0,
		'default'     => 'default',
		'choices'     => array(
			'default' => esc_html__( 'Default', 'restaurant-wp' ),
			'overlay' => esc_html__( 'Overlay', 'restaurant-wp' ),
		),
	)
);


// Background Header
thim_customizer()->add_field(
	array(
		'id'          => 'header_background_color',
		'type'        => 'color',
		'label'       => esc_html__( 'Background Color', 'restaurant-wp' ),
		'tooltip'     => esc_html__( 'Allows you can choose background color for your header. ', 'restaurant-wp' ),
		'section'     => 'header_layout',
		'default'     => '#439fdf',
		'priority'    => 30,
		'alpha'       => true,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => 'body #masthead.site-header',
				'property' => 'background-color',
			)
		)
	)
);