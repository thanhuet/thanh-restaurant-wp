<?php
	class Thim_IntroSite_Widget extends SiteOrigin_Widget{
		function __construct() {
			parent::__construct(
				'intro-site',
				esc_html__('Thim: Introduce Site','restaurant-wp'),
				array(
					'description'=>esc_html__('Information about this site','restaurant-wp')
				),
				array(),
				array(
					'title' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Title', 'restaurant-wp' )
					),
					'information' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Information', 'restaurant-wp' )
					),
					'detail' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Detail', 'restaurant-wp' )
					)

				)
			);
		}
	}
	siteorigin_widget_register('intro-site',__FILE__,'Thim_IntroSite_Widget');
?>