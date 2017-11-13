<?php

class Thim_HomeImageContent_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'home-image-content',
			esc_html__( 'Thim: Home Page Image', 'thim-starter-theme' ),
			array(
				'description' => esc_html__( 'Select Image For Home Page', 'thim-starter-theme' )
			),
			array(),
			array(
				'image' => array(
					'type'  => 'media',
					'label' => esc_html__( 'Image', 'thim-starter-theme' )
				)
			)
		);
	}

}

siteorigin_widget_register( 'home-image-content', __FILE__, 'Thim_HomeImageContent_Widget' );
?>