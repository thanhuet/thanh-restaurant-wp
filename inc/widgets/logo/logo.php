<?php
class Thim_Logo_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'logo-rest',
			esc_html__( 'Thim: Logo Restaurant', 'restaurant-wp' ),
			array(
				'description' => 'Select logo for restaurant',
			),
			array(),
			array(
				'logo'   => array(
					'type'  => 'media',
					'label' => esc_html__( 'Logo', 'restaurant-wp' )
				),
				'description'=>array(
					'type'=>'text',
					'label'=>esc_html__('Description','restaurant-wp'),
					'default'=>esc_html__('The Restara theme used to be greater than simply an area to get a hairstyle or cut; it was a center','restaurant-wp')
				),
				'displayDes'=>array(
					'type'=>'checkbox',
					'label'=>esc_html__('Display description','restaurant-wp')
				)
			)
		);
	}
}

siteorigin_widget_register( 'logo-rest', __FILE__, 'Thim_Logo_Widget' );