<?php

class Thim_InfoRest_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'info-rest',
			esc_html__( 'Thim: Information Restaurant', 'mabu' ),
			array(
				'description' => 'About address and time active of restaurant',
			),
			array(),
			array(
				'title'  => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'mabu' )
				),
				'info'   => array(
					'type'  => 'text',
					'label' => esc_html__( 'Information', 'mabu' )
				),
				'detail' => array(
					'type'  => 'text',
					'label' => esc_html__( 'Detail', 'mabu' )
				),
				'icon'   => array(
					'type'  => 'media',
					'label' => esc_html__( 'Icon', 'mabu' )
				)
			)
		);
	}
}

siteorigin_widget_register( 'info-rest', __FILE__, 'Thim_InfoRest_Widget' );

?>