<?php

class Thim_FoodCard_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'food-card',
			esc_html__( 'Thim: Food Card', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Include image, name, description', 'restaurant-wp' )
			),
			array(),
			array(
				'name'          => array(
					'type'  => 'text',
					'label' => esc_html__( 'Name', 'restaurant-wp' )
				),
				'image'         => array(
					'type'  => 'media',
					'label' => esc_html__( 'Image', 'restaurant-wp' )
				),
				'description'   => array(
					'type'  => 'text',
					'label' => esc_html__( 'Description', 'restaurant-wp' )
				),
				'style_item' => array(
					'type'    => 'select',
					'label'   => esc_html__( 'Choose style of item', 'restaurant-wp' ),
					'default' => 'style_1',
					'options' => array(
						'style_1' => esc_html__( 'Card Image', 'restaurant-wp' ),
						'style_2' => esc_html__( 'Thumbnail Image', 'restaurant-wp' ),
					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'food-card', __FILE__, 'Thim_FoodCard_Widget' );
?>