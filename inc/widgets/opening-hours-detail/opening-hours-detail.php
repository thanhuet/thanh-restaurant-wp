<?php

class Thim_OpeningHours_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'opening-hours-footer',
			esc_html__( 'Thim: Opening Hours For Footer', 'restaurant-wp' ),
			array(
				'description' => 'About opening hours detail restaurant',
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
						'selector'     => "[id*='repeat_day']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields'     => array(
						'repeat_day'   => array(
							'type'  => 'text',
							'label' => esc_html__( 'Day of week', 'restaurant-wp' )
						),
						'repeat_hours' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Opening hours', 'restaurant-wp' )
						)
					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'opening-hours-footer', __FILE__, 'Thim_OpeningHours_Widget' );