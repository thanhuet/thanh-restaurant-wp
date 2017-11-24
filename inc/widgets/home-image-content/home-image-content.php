<?php

class Thim_HomeImageContent_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'home-image-content',
			esc_html__( 'Thim: Home Page Image', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Select Image For Home Page', 'restaurant-wp' )
			),
			array(),
			array(
				'image' => array(
					'type'  => 'media',
					'label' => esc_html__( 'Image', 'restaurant-wp' )
				)
			)
		);
	}

}

siteorigin_widget_register( 'home-image-content', __FILE__, 'Thim_HomeImageContent_Widget' );
?>