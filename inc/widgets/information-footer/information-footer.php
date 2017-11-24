<?php

class Thim_InfoFooter_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'info-footer',
			esc_html__( 'Thim: Information For Footer', 'restaurant-wp' ),
			array(
				'description' => 'About information detail restaurant',
			),
			array(),
			array(
				'title'            => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'restaurant-wp' )
				),
				'repeater-content' => array(
					'type'       => 'repeater',
					'label'      => esc_html__( 'List Information', 'restaurant-wp' ),
					'item_name'  => esc_html__( 'Item Information', 'restaurant-wp' ),
					'item_label' => array(
						'selector'     => "[id*='repeat_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields'     => array(
						'repeat_title'   => array(
							'type'  => 'text',
							'label' => esc_html__( 'Title', 'restaurant-wp' )
						),
						'repeat_content' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Content', 'restaurant-wp' )
						)
					)
				),
				'displaytitle'     => array(
					'type'  => 'checkbox',
					'label' => esc_html__( 'Display Title For Information', 'restaurant-wp' )
				),
			)
		);
	}
}

siteorigin_widget_register( 'info-footer', __FILE__, 'Thim_InfoFooter_Widget' );