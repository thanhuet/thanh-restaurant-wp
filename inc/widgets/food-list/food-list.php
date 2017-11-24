<?php

class Thim_FoodList_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'food-list',
			esc_html__( 'Thim: Food List', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Food list and price', 'restaurant-wp' )
			),
			array(),
			array(
				'title'       => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'restaurant-wp' ),
				),
				'description' => array(
					'type'  => 'text',
					'label' => esc_html__( 'Description', 'restaurant-wp' ),
				),
				'listFood'    => array(
					'type'      => 'repeater',
					'label'     => esc_html__( 'List', 'restaurant-wp' ),
					'item_name' => esc_html__( 'Food Detail', 'restaurant-wp' ),
					'fields'    => array(
						'repeat_content' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Name', 'restaurant-wp' )
						),
						'repeat_price' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Price', 'restaurant-wp' )
						),

					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'food-list', __FILE__, 'Thim_FoodList_Widget' );
?>