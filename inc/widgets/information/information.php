<?php

class Thim_InfoRest_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'info-rest',
			esc_html__( 'Thim: Information Restaurant', 'restaurant-wp' ),
			array(
				'description' => 'About address and time active of restaurant',
			),
			array(),
			array(
				'title'         => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'restaurant-wp' )
				),
				'info'          => array(
					'type'  => 'text',
					'label' => esc_html__( 'Information', 'restaurant-wp' )
				),
				'detail'        => array(
					'type'  => 'text',
					'label' => esc_html__( 'Detail', 'restaurant-wp' )
				),
				'icon'          => array(
					'type'  => 'media',
					'label' => esc_html__( 'Icon', 'restaurant-wp' )
				),
				'style_of_title' => array(
					'type'  => 'select',
					'label' => esc_html__( 'Choose style of item', 'restaurant-wp' ),
					'default'=>'style_1',
					'options'=>array(
						'style_1'=> esc_html__('Title style 1','restaurant-wp'),
						'style_2'=>esc_html__('Title style 2','restaurant-wp'),
					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'info-rest', __FILE__, 'Thim_InfoRest_Widget' );

?>