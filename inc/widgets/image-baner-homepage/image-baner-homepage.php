<?php

class Thim_HomePageBannerImage_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'image-banner-homepage',
			esc_html__( 'Thim: Home Page Banner Image', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Select Banner For Home Page', 'restaurant-wp' )
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

siteorigin_widget_register( 'image-banner-homepage', __FILE__, 'Thim_HomePageBannerImage_Widget' );
?>