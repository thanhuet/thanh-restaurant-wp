<?php
/**
 * Section Footer Settings
 *
 */

// Add Section Footer Options
thim_customizer()->add_section(
	array(
		'id'       => 'footer_options',
		'title'    => esc_html__( 'Settings', 'restaurant-wp' ),
		'panel'    => 'footer',
		'priority' => 10,
	)
);


// Enable or Disable Footer Widgets
thim_customizer()->add_field(
	array(
		'type'     => 'switch',
		'id'       => 'footer_widgets',
		'label'    => esc_html__( 'Show Footer Widgets', 'restaurant-wp' ),
		'tooltip'  => esc_html__( 'Turn on to display footer widgets.', 'restaurant-wp' ),
		'section'  => 'footer_options',
		'default'  => true,
		'priority' => 20,
		'choices'  => array(
			true  => esc_html__( 'On', 'restaurant-wp' ),
			false => esc_html__( 'Off', 'restaurant-wp' ),
		),
	)
);

// Footer Column Numbers
thim_customizer()->add_field(
	array(
		'type'            => 'slider',
		'id'              => 'footer_columns',
		'label'           => esc_html__( 'Sidebar Number', 'restaurant-wp' ),
		'tooltip'         => esc_html__( 'Controls the number of columns in the footer.', 'restaurant-wp' ),
		'section'         => 'footer_options',
		'default'         => 4,
		'priority' 		  => 30,
		'choices'         => array(
			'min'  => '1',
			'max'  => '6',
			'step' => '1',
		),
		'active_callback' => array(
			array(
				'setting'  => 'footer_widgets',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

// Footer Background Color
thim_customizer()->add_field(
	array(
		'type'      => 'color',
		'id'        => 'footer_background_color',
		'label'     => esc_html__( 'Background Color', 'restaurant-wp' ),
		'section'   => 'footer_options',
		'default'   => '#FFFFFF',
		'priority'  => 40,
		'alpha'     => true,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => 'footer#colophon .footer',
				'function' => 'css',
				'property' => 'background-color',
			),
		),
	)
);

// Footer Text Color
thim_customizer()->add_field(
	array(
		'type'      => 'multicolor',
		'id'        => 'footer_color',
		'label'     => esc_html__( 'Colors', 'restaurant-wp' ),
		'section'   => 'footer_options',
		'priority'  => 50,
		'choices'   => array(
			'title' => esc_html__( 'Title', 'restaurant-wp' ),
			'text'  => esc_html__( 'Text', 'restaurant-wp' ),
			'link'  => esc_html__( 'Link', 'restaurant-wp' ),
			'hover' => esc_html__( 'Hover', 'restaurant-wp' ),
		),
		'default'   => array(
			'title' => '#212121',
			'text'  => '#666666',
			'link'  => '#333333',
			'hover' => '#c48981',
		),
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'title',
				'element'  => 'footer#colophon h1, footer#colophon h2, footer#colophon h3, footer#colophon h4, footer#colophon h5, footer#colophon h6',
				'property' => 'color',
			),
			array(
				'choice'   => 'text',
				'element'  => 'footer#colophon',
				'property' => 'color',
			),
			array(
				'choice'   => 'link',
				'element'  => 'footer#colophon a',
				'property' => 'color',
			),
			array(
				'choice'   => 'hover',
				'element'  => 'footer#colophon a:hover',
				'property' => 'color',
			),
		),
	)
);