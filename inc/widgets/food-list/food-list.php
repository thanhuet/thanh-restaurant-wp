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
						)
					)
				),
				'style_item'     => array(
					'type'          => 'radio',
					'label'         => esc_html__( 'Choose style for item', 'restaurant-wp' ),
					'options'       => array(
						'1' => 'Style 1',
						'2' => 'Style 2'
					),
					'default'       => '1',
					'state_emitter' => array(
						'callback' => 'select',
						'args'     => array( 'style_item' )
					),
				),
				'style_icon'     => array(
					'type'          => 'media',
					'label'         => esc_html__( 'Choose icon for title', 'restaurant-wp' ),
					'state_handler' => array(
						'style_item[1]' => array( 'hide' ),
						'style_item[2]' => array( 'show' ),
					)
				),
				'display_button' => array(
					'type'  => 'checkbox',
					'label' => esc_html__( 'Display Button For Item', 'restaurant-wp' ),
					'state_handler' => array(
						'style_item[2]' => array( 'hide' ),
						'style_item[1]' => array( 'show' ),
					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'food-list', __FILE__, 'Thim_FoodList_Widget' );
?>