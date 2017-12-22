<?php

class Thim_IntroSite_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'intro-site',
			esc_html__( 'Thim: Introduce Site', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Information about this site', 'restaurant-wp' )
			),
			array(),
			array(
				'title'          => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'restaurant-wp' )
				),
				'information'    => array(
					'type'  => 'text',
					'label' => esc_html__( 'Information', 'restaurant-wp' )
				),
				'detail'         => array(
					'type'  => 'text',
					'label' => esc_html__( 'Detail', 'restaurant-wp' )
				),
				'style_item'     => array(
					'type'          => 'radio',
					'label'         => esc_html__( 'Choose style for item', 'restaurant-wp' ),
					'options'       => array(
						'1' => 'Style 1',
						'2' => 'Style 2',
					),
					'default'       => '1',
					'state_emitter' => array(
						'callback' => 'select',
						'args'     => array( 'style_item' )
					),
				),
				'style_icon'     => array(
					'type'          => 'media',
					'label'         => esc_html__( 'Choose icon for title', 'restaurant-wp' ),
					'state_handler' => array(
						'style_item[1]' => array( 'hide' ),
						'style_item[2]' => array( 'show' ),
					)
				),
				'image_detail'     => array(
					'type'          => 'media',
					'label'         => esc_html__( 'Choose Image For Item', 'restaurant-wp' ),
					'state_handler' => array(
						'style_item[1]' => array( 'hide' ),
						'style_item[2]' => array( 'show' ),
					)
				),
				'display_image' => array(
					'type'          => 'checkbox',
					'label'         => esc_html__( 'Display Image For Item', 'restaurant-wp' ),
					'state_handler' => array(
						'style_item[1]' => array( 'hide' ),
						'style_item[2]' => array( 'show' ),
					)
				),
				'display_button' => array(
					'type'          => 'checkbox',
					'label'         => esc_html__( 'Display Button For Item', 'restaurant-wp' ),
					'state_handler' => array(
						'style_item[1]' => array( 'hide' ),
						'style_item[2]' => array( 'show' ),
					)
				),

			)
		);
	}
}

siteorigin_widget_register( 'intro-site', __FILE__, 'Thim_IntroSite_Widget' );
?>