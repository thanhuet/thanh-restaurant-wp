<?php
	class Thim_IntroSite_Widget extends SiteOrigin_Widget{
		function __construct() {
			parent::__construct(
				'intro-site',
				esc_html__('Thim: Introduce Site','thim-starter-theme'),
				array(
					'description'=>esc_html__('Information about this site','thim-starter-theme')
				),
				array(),
				array(
					'title' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Title', 'thim-starter-theme' )
					),
					'information' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Information', 'thim-starter-theme' )
					),
					'detail' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Detail', 'thim-starter-theme' )
					)

				)
			);
		}
	}
	siteorigin_widget_register('intro-site',__FILE__,'Thim_IntroSite_Widget');
?>