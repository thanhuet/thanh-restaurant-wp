<?php

class Thim_Gallery extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'thim-gallery',
			esc_html__( 'Thim: Gallery', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Get all image in gallery post', 'restaurant-wp' )
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
				'style_icon'     => array(
					'type'          => 'media',
					'label'         => esc_html__( 'Choose icon for title', 'restaurant-wp' ),
				),
				'column'=>array(
					'type'=>'select',
					'label'=>esc_html__('Column','restaurant-wp'),
					'default'=>'4',
					'options'=>array(
						'1'=>'1',
						'2'=>'2',
						'3'=>'3',
						'4'=>'4'
					)
				),
				'number_image'=>array(
					'type'=>'slider',
					'label'=> esc_html__('Number Image Display','restaurant-wp'),
					'default'=>'4',
					'min' => 1,
					'max' => 4,
					'integer' => true
				)
			)
		);
	}
}

siteorigin_widget_register( 'thim-gallery', __FILE__, 'Thim_Gallery' );
?>