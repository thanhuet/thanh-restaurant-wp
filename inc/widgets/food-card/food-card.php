<?php
class Thim_FoodCard_Widget extends SiteOrigin_Widget{
	function __construct() {
		parent::__construct(
			'food-card',
			esc_html__('Thim: Food Card','thim-starter-theme'),
			array(
				'description'=>esc_html__('Include image, name, description','thim-starter-theme')
			),
			array(),
			array(
				'name' => array(
					'type'  => 'text',
					'label' => esc_html__( 'Name', 'thim-starter-theme' )
				),
				'image' => array(
					'type'  => 'media',
					'label' => esc_html__( 'Image', 'thim-starter-theme' )
				),
				'description' => array(
					'type'  => 'text',
					'label' => esc_html__( 'Description', 'thim-starter-theme' )
				)

			)
		);
	}
}
siteorigin_widget_register('food-card',__FILE__,'Thim_FoodCard_Widget');
?>