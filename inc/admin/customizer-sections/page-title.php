<?php
/**
 * Section Page Title
 *
 * @package Thim_Starter_Theme
 */

thim_customizer()->add_section(
	array(
		'id'       => 'page_title',
		'panel'    => 'page_title_bar',
		'title'    => esc_html__( 'Settings', 'thim-starter-theme' ),
		'priority' => 10,
	)
);

// Enable or Disable Page Title
thim_customizer()->add_field(
	array(
		'id'       => 'hide_page_title',
		'type'     => 'switch',
		'label'    => esc_html__( 'Hidden Page Title', 'thim-starter-theme' ),
		'tooltip'  => esc_html__( 'Allows you can hidden or show page title on heading top. ', 'thim-starter-theme' ),
		'section'  => 'page_title',
		'default'  => false,
		'priority' => 10,
		'choices'  => array(
			true  => esc_html__( 'On', 'thim-starter-theme' ),
			false => esc_html__( 'Off', 'thim-starter-theme' ),
		),
	)
);

// Enable or Disable Parallax Page Title
thim_customizer()->add_field(
	array(
		'id'       => 'enable_parallax_page_title',
		'type'     => 'switch',
		'label'    => esc_html__( 'Turn On/Off Parallax', 'thim-starter-theme' ),
		'tooltip'  => esc_html__( 'Allows you can enable or disable parallax in page title.', 'thim-starter-theme' ),
		'section'  => 'page_title',
		'default'  => true,
		'priority' => 20,
		'choices'  => array(
			true  => esc_html__( 'On', 'thim-starter-theme' ),
			false => esc_html__( 'Off', 'thim-starter-theme' ),
		),
	)
);

