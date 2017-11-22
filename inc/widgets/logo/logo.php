<?php
class Thim_Logo_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'logo-rest',
			esc_html__( 'Thim: Logo Restaurant', 'thim-starter-theme' ),
			array(
				'description' => 'Select logo for restaurant',
			),
			array(),
			array(
				'logo'   => array(
					'type'  => 'media',
					'label' => esc_html__( 'Logo', 'thim-starter-theme' )
				),
				'description'=>array(
					'type'=>'text',
					'label'=>esc_html__('Description','thim-starter-theme'),
					'default'=>esc_html__('The Restara theme used to be greater than simply an area to get a hairstyle or cut; it was a center','thim-starter-theme')
				),
				'displayDes'=>array(
					'type'=>'checkbox',
					'label'=>esc_html__('Display description','thim-starter-theme')
				)
			)
		);
	}
}

siteorigin_widget_register( 'logo-rest', __FILE__, 'Thim_Logo_Widget' );