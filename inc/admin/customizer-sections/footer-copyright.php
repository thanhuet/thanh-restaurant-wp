<?php
/**
 * Section Copyright
 *
 * @package Thim_Starter_Theme
 */

thim_customizer()->add_section(
	array(
		'id'       => 'copyright',
		'title'    => esc_html__( 'Copyright', 'thim-starter-theme' ),
		'panel'    => 'footer',
		'priority' => 50,
	)
);

// Enable Copyright Text
thim_customizer()->add_field(
	array(
		'type'     => 'switch',
		'id'       => 'copyright_bar',
		'label'    => esc_html__( 'Show Copyright Text', 'thim-starter-theme' ),
		'tooltip'  => esc_html__( 'Turn on to display the copyright bar.', 'thim-starter-theme' ),
		'section'  => 'copyright',
		'default'  => true,
		'priority' => 10,
		'choices'  => array(
			true  => esc_html__( 'On', 'thim-starter-theme' ),
			false => esc_html__( 'Off', 'thim-starter-theme' ),
		),
	)
);


// Enable Copyright Menu
thim_customizer()->add_field(
	array(
		'type'     => 'switch',
		'id'       => 'copyright_menu',
		'label'    => esc_html__( 'Show Menu', 'thim-starter-theme' ),
		'tooltip'  => esc_html__( 'Turn on to display the footer menu.', 'thim-starter-theme' ),
		'section'  => 'copyright',
		'default'  => true,
		'priority' => 12,
		'choices'  => array(
			true  => esc_html__( 'On', 'thim-starter-theme' ),
			false => esc_html__( 'Off', 'thim-starter-theme' ),
		),
	)
);

// Copyright Background Color
thim_customizer()->add_field(
	array(
		'id'        => 'copyright_background_color',
		'type'      => 'color',
		'label'     => esc_html__( 'Background Color', 'thim-starter-theme' ),
		'tooltip'   => esc_html__( 'Allows you to choose background color for your copyright area. ', 'thim-starter-theme' ),
		'section'   => 'copyright',
		'default'   => '#333333',
		'priority'  => 15,
		'alpha'     => true,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => 'footer#colophon .copyright-area',
				'property' => 'background-color',
			)
		)
	)
);

// Copyright Text Color, Link Color, Link Hover Colo
thim_customizer()->add_field(
	array(
		'type'      => 'multicolor',
		'id'        => 'font_copyright_color',
		'label'     => esc_html__( 'Colors', 'thim-starter-theme' ),
		'section'   => 'copyright',
		'priority'  => 20,
		'choices'   => array(
			'text'  => esc_html__( 'Text', 'thim-starter-theme' ),
			'link'  => esc_html__( 'Link', 'thim-starter-theme' ),
			'hover' => esc_html__( 'Hover', 'thim-starter-theme' ),
		),
		'default'   => array(
			'text'  => '#ffffff',
			'link'  => '#777777',
			'hover' => '#333333',
		),
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'text',
				'element'  => 'footer#colophon .copyright-area .copyright-content',
				'property' => 'color',
			),
			array(
				'choice'   => 'link',
				'element'  => 'footer#colophon .copyright-area .copyright-content a',
				'property' => 'color',
			),
			array(
				'choice'   => 'hover',
				'element'  => 'footer#colophon .copyright-area .copyright-content a:hover',
				'property' => 'color',
			),
		),
	)
);

// Enter Text For Copyright
$link = 'http://thimpress.com';

thim_customizer()->add_field(
	array(
		'type'      => 'textarea',
		'id'        => 'copyright_text',
		'label'     => esc_html__( 'Copyright Text', 'thim-starter-theme' ),
		'tooltip'   => esc_html__( 'Enter the text that displays in the copyright bar. HTML markup can be used.', 'thim-starter-theme' ),
		'section'   => 'copyright',
		'default'   => sprintf( 'Designed by <a href="$1$s">ThimPress</a>. Powered by WordPress.', esc_url( $link ) ),
		'priority'  => 100,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.copyright-text',
				'function' => 'html',
			),
		)
	)
);