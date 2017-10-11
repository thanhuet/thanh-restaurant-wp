<?php

class Thim_InfoFooter_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'info-footer',
			esc_html__( 'Thim: Information For Footer', 'thim-starter-theme' ),
			array(
				'description' => 'About information detail restaurant',
			),
			array(),
			array(
				'title'            => array(
					'type'  => 'text',
					'label' => esc_html__( 'Title', 'thim-starter-theme' )
				),
				'repeater-content' => array(
					'type'       => 'repeater',
					'label'      => esc_html__( 'List Information', 'thim-starter-theme' ),
					'item_name'  => esc_html__( 'Item Information', 'thim-starter-theme' ),
					'item_label' => array(
						'selector'     => "[id*='repeat_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields'     => array(
						'repeat_title'   => array(
							'type'  => 'text',
							'label' => esc_html__( 'Title', 'thim-starter-theme' )
						),
						'repeat_content' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Content', 'thim-starter-theme' )
						)
					)
				),
				'displaytitle'     => array(
					'type'  => 'checkbox',
					'label' => esc_html__( 'Display Title For Information', 'thim-starter-theme' )
				),
			)
		);
	}
}

siteorigin_widget_register( 'info-footer', __FILE__, 'Thim_InfoFooter_Widget' );