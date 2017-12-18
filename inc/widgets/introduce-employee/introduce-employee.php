<?php

class Thim_Introduce_Employee extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'intro-employ',
			esc_html__( 'Thim: Introduce Employee', 'restaurant-wp' ),
			array(
				'description' => esc_html__( 'Introduce about employee', 'restaurant-wp' )
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
				'listEmploy'    => array(
					'type'      => 'repeater',
					'label'     => esc_html__( 'List', 'restaurant-wp' ),
					'item_name' => esc_html__( 'Employee Detail', 'restaurant-wp' ),
					'item_label' => array(
						'selector'     => "[id*='repeat_name']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields'    => array(
						'repeat_name' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Name', 'restaurant-wp' )
						),
						'repeat_img_profile' => array(
							'type'  => 'media',
							'label' => esc_html__( 'Image Profile', 'restaurant-wp' )
						),
						'repeat_info' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Information', 'restaurant-wp' )
						)
					)
				),
				'column'=>array(
					'type'=>'select',
					'label'=>esc_html__('Column','restaurant-wp'),
					'default'=>'3',
					'options'=>array(
						'1'=>'1',
						'2'=>'2',
						'3'=>'3',
					)
				)
			)
		);
	}
}

siteorigin_widget_register( 'intro-employ', __FILE__, 'Thim_Introduce_Employee' );
?>