<?php

class Thim_RateDemo_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'rate-demo',
			esc_html__( 'Thim: Rating Demo', 'restaurant-wp' ),
			array(
				'description' => ''
			),
			array(),
			array(
				'list_rate' => array(
					'type'      => 'repeater',
					'label'     => esc_html__( 'List', 'restaurant-wp' ),
					'item_name' => esc_html__( 'Customer', 'restaurant-wp' ),
					'fields'    => array(
						'image_profile'  => array(
							'type'  => 'media',
							'label' => esc_html__( 'Image Profile', 'restaurant-wp' )
						),
						'comment'        => array(
							'type'  => 'text',
							'label' => esc_html__( 'Comment', 'restaurant-wp' )
						),
						'name_customer'  => array(
							'type'  => 'text',
							'label' => esc_html__( 'Customer Name', 'restaurant-wp' )
						),

					)
				),
			)
		);

	}
}

siteorigin_widget_register( 'rate-demo', __FILE__, 'Thim_RateDemo_Widget' );
?>