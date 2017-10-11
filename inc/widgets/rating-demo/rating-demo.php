<?php

class Thim_RateDemo_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'rate-demo',
			esc_html__( 'Thim: Rating Demo', 'thim-starter-theme' ),
			array(
				'description' => esc_html__( '', 'thim-starter-theme' )
			),
			array(),

			array(
				'list_rate' => array(
					'type'      => 'repeater',
					'label'     => esc_html__( 'List', 'thim-starter-theme' ),
					'item_name' => esc_html__( 'Customer', 'thim-starter-theme' ),
					'fields'    => array(
						'image_profile'  => array(
							'type'  => 'media',
							'label' => esc_html__( 'Image Profile', 'thim-starter-theme' )
						),
						'comment'        => array(
							'type'  => 'text',
							'label' => esc_html__( 'Comment', 'thim-starter-theme' )
						),
						'name_customer'  => array(
							'type'  => 'text',
							'label' => esc_html__( 'Customer Name', 'thim-starter-theme' )
						),

					)
				),
			)
		);

	}
}

siteorigin_widget_register( 'rate-demo', __FILE__, 'Thim_RateDemo_Widget' );
?>