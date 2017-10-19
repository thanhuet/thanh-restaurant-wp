<?php

class Thim_InfoRest_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'info-rest',
			esc_html__( 'Thim: Information Restaurant', 'thim-starter-theme' ),
			array(
				'description' => 'About address and time active of restaurant',
			),
			array(),
			array(
				'title'  => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'thim-starter-theme' )
				),
				'info'   => array(
					'type'  => 'text',
					'label' => esc_html__( 'Information', 'thim-starter-theme' )
				),
				'detail' => array(
					'type'  => 'text',
					'label' => esc_html__( 'Detail', 'thim-starter-theme' )
				),
				'icon'   => array(
					'type'  => 'media',
					'label' => esc_html__( 'Icon', 'thim-starter-theme' )
				)
			)
		);
	}
}

siteorigin_widget_register( 'info-rest', __FILE__, 'Thim_InfoRest_Widget' );

?>