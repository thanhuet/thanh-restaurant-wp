<?php
/**
 * Section Background Boxed Mode
 *
 * @package Hair_Salon
 */

// Body Background Group
thim_customizer()->add_group( array(
	'id'       => 'general_boxed_background_group',
	'section'  => 'general_styling',
	'priority' => 50,
	'groups'   => array(
		array(
			'id'     => 'boxed_background_group',
			'label'  => esc_html__( 'Boxed Background', ' thim-starter-theme' ),
			'fields' => array(
				array(
					'type'     => 'radio-buttonset',
					'id'       => 'background_boxed_type',
					'label'    => esc_html__( 'Select Background Type', ' thim-starter-theme' ),
					'tooltip'  => esc_html__( 'Allows you to select a background for body content when you selected box layout in General Layouts', ' thim-starter-theme' ),
					'default'  => 'color',
					'priority' => 10,
					'choices'  => array(
						'color'   => esc_html__( 'Color', ' thim-starter-theme' ),
						'image'   => esc_html__( 'Image', ' thim-starter-theme' ),
						'pattern' => esc_html__( 'Pattern', ' thim-starter-theme' ),
					),
				),
				array(
					'type'            => 'color',
					'id'              => 'background_boxed_color',
					'label'           => esc_html__( 'Background Color', ' thim-starter-theme' ),
					'default'         => '#FFFFFF',
					'priority'        => 15,
					'alpha'           => true,
					'transport'       => 'postMessage',
					'js_vars'         => array(
						array(
							'element'  => 'body.bg-type-color',
							'function' => 'css',
							'property' => 'background-color',
						),
					),
					'active_callback' => array(
						array(
							'setting'  => 'background_boxed_type',
							'operator' => '===',
							'value'    => 'color',
						),
					),
				),
				array(
					'type'            => 'kirki-image',
					'id'              => 'background_boxed_image',
					'label'           => esc_html__( 'Background image', ' thim-starter-theme' ),
					'priority'        => 30,
					'transport'       => 'postMessage',
					'js_vars'         => array(
						array(
							'element'  => 'body.bg-type-image',
							'function' => 'css',
							'property' => 'background-image',
						),
					),
					'active_callback' => array(
						array(
							'setting'  => 'background_boxed_type',
							'operator' => '===',
							'value'    => 'image',
						),
					),
				),
				array(
					'type'            => 'select',
					'id'              => 'background_boxed_image_repeat',
					'label'           => esc_html__( 'Background Repeat', ' thim-starter-theme' ),
					'default'         => 'no-repeat',
					'priority'        => 40,
					'choices'         => array(
						'repeat'    => esc_html__( 'Tile', ' thim-starter-theme' ),
						'repeat-x'  => esc_html__( 'Tile Horizontally', ' thim-starter-theme' ),
						'repeat-y'  => esc_html__( 'Tile Vertically', ' thim-starter-theme' ),
						'no-repeat' => esc_html__( 'No Repeat', ' thim-starter-theme' ),
					),
					'transport'       => 'postMessage',
					'js_vars'         => array(
						array(
							'element'  => 'body.bg-type-image',
							'function' => 'css',
							'property' => 'background-repeat',
						)
					),
					'active_callback' => array(
						array(
							'setting'  => 'background_boxed_type',
							'operator' => '===',
							'value'    => 'image',
						),
					),
				),
				array(
					'type'            => 'select',
					'id'              => 'background_boxed_image_position',
					'label'           => esc_html__( 'Background Position', ' thim-starter-theme' ),
					'default'         => 'center',
					'priority'        => 50,
					'choices'         => array(
						'left'   => esc_html__( 'Left', ' thim-starter-theme' ),
						'center' => esc_html__( 'Center', ' thim-starter-theme' ),
						'right'  => esc_html__( 'Right', ' thim-starter-theme' ),
					),
					'transport'       => 'postMessage',
					'js_vars'         => array(
						array(
							'element'  => 'body.bg-type-image',
							'function' => 'css',
							'property' => 'background-position',
						)
					),
					'active_callback' => array(
						array(
							'setting'  => 'background_boxed_type',
							'operator' => '===',
							'value'    => 'image',
						),
					),
				),
				array(
					'type'            => 'select',
					'id'              => 'background_boxed_image_attachment',
					'label'           => esc_html__( 'Background Attachment', ' thim-starter-theme' ),
					'default'         => 'fixed',
					'priority'        => 60,
					'choices'         => array(
						'scroll' => esc_html__( 'Scroll', ' thim-starter-theme' ),
						'fixed'  => esc_html__( 'Fixed', ' thim-starter-theme' ),
					),
					'transport'       => 'postMessage',
					'js_vars'         => array(
						array(
							'element'  => 'body.bg-type-image',
							'function' => 'css',
							'property' => 'background-attachment',
						)
					),
					'active_callback' => array(
						array(
							'setting'  => 'background_boxed_type',
							'operator' => '===',
							'value'    => 'image',
						),
					),
				),
				array(
					'type'            => 'radio-image',
					'id'              => 'background_boxed_pattern_image',
					'label'           => esc_html__( 'Select a Background Pattern', ' thim-starter-theme' ),
					'section'         => 'background',
					'default'         => THIM_URI . 'assets/images/patterns/pattern1.png',
					'priority'        => 70,
					'choices'         => array(
						THIM_URI . 'assets/images/patterns/pattern1.png'  => THIM_URI . 'assets/images/patterns/pattern1_icon.png',
						THIM_URI . 'assets/images/patterns/pattern2.png'  => THIM_URI . 'assets/images/patterns/pattern2_icon.png',
						THIM_URI . 'assets/images/patterns/pattern3.png'  => THIM_URI . 'assets/images/patterns/pattern3_icon.png',
						THIM_URI . 'assets/images/patterns/pattern4.png'  => THIM_URI . 'assets/images/patterns/pattern4_icon.png',
						THIM_URI . 'assets/images/patterns/pattern5.png'  => THIM_URI . 'assets/images/patterns/pattern5_icon.png',
						THIM_URI . 'assets/images/patterns/pattern6.png'  => THIM_URI . 'assets/images/patterns/pattern6_icon.png',
						THIM_URI . 'assets/images/patterns/pattern7.png'  => THIM_URI . 'assets/images/patterns/pattern7_icon.png',
						THIM_URI . 'assets/images/patterns/pattern8.png'  => THIM_URI . 'assets/images/patterns/pattern8_icon.png',
						THIM_URI . 'assets/images/patterns/pattern9.png'  => THIM_URI . 'assets/images/patterns/pattern9_icon.png',
						THIM_URI . 'assets/images/patterns/pattern10.png' => THIM_URI . 'assets/images/patterns/pattern10_icon.png',
						THIM_URI . 'assets/images/patterns/pattern11.png' => THIM_URI . 'assets/images/patterns/pattern11_icon.png',
						THIM_URI . 'assets/images/patterns/pattern12.png' => THIM_URI . 'assets/images/patterns/pattern12_icon.png',
						THIM_URI . 'assets/images/patterns/pattern13.png' => THIM_URI . 'assets/images/patterns/pattern13_icon.png',
						THIM_URI . 'assets/images/patterns/pattern14.png' => THIM_URI . 'assets/images/patterns/pattern14_icon.png',
						THIM_URI . 'assets/images/patterns/pattern15.png' => THIM_URI . 'assets/images/patterns/pattern15_icon.png',
						THIM_URI . 'assets/images/patterns/pattern16.png' => THIM_URI . 'assets/images/patterns/pattern16_icon.png',
						THIM_URI . 'assets/images/patterns/pattern17.png' => THIM_URI . 'assets/images/patterns/pattern17_icon.png',
						THIM_URI . 'assets/images/patterns/pattern18.png' => THIM_URI . 'assets/images/patterns/pattern18_icon.png',
						THIM_URI . 'assets/images/patterns/pattern19.png' => THIM_URI . 'assets/images/patterns/pattern19_icon.png',
						THIM_URI . 'assets/images/patterns/pattern20.png' => THIM_URI . 'assets/images/patterns/pattern20_icon.png',
						THIM_URI . 'assets/images/patterns/pattern21.png' => THIM_URI . 'assets/images/patterns/pattern21_icon.png',
					),
					'transport'       => 'postMessage',
					'js_vars'         => array(
						array(
							'element'  => 'body.bg-type-pattern',
							'function' => 'css',
							'property' => 'background-image',
						)
					),
					'active_callback' => array(
						array(
							'setting'  => 'background_boxed_type',
							'operator' => '===',
							'value'    => 'pattern',
						),
					),
				),
				array(
					'id'          => 'enable_box_shadow',
					'type'        => 'switch',
					'label'       => esc_html__( 'Boxed Layouts Box Shadow', ' thim-starter-theme' ),
					'tooltip'     => esc_html__( 'Allows you to enable or disable box shadow at body tag when you selected boxed layout. ', ' thim-starter-theme' ),
					'default'     => true,
					'priority'    => 80,
					'choices'     => array(
						true  	  => esc_html__( 'On', ' thim-starter-theme' ),
						false	  => esc_html__( 'Off', ' thim-starter-theme' ),
					),
				)
			),
		),
	)
) );