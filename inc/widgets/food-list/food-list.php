<?php

class Thim_FoodList_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'food-list',
			esc_html__( 'Thim: Food List', 'thim-starter-theme' ),
			array(
				'description' => esc_html__( 'Food list and price', 'thim-starter-theme' )
			),
			array(),
			array(
				'title'       => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'thim-starter-theme' ),
				),
				'description' => array(
					'type'  => 'text',
					'lable' => esc_html__( 'Description', 'thim-starter-theme' ),
				),
				'listFood'    => array(
					'type'      => 'repeater',
					'label'     => esc_html__( 'List', 'thim-starter-theme' ),
					'item_name' => esc_html__( 'Food Detail', 'thim-starter-theme' ),
					'fields'    => array(
						'repeat_content' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Name', 'thim-starter-theme' )
						)
					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'food-list', __FILE__, 'Thim_FoodList_Widget' );
?>