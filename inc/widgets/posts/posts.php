<?php

/**
 * Created By: Khoapq
 * Date: 30/09/2015
 */
class Thim_Posts_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'posts',
			esc_html__( 'Thim: Posts', 'thim-starter-theme' ),
			array(
				'description'   => esc_html__( 'Display posts', 'thim-starter-theme' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' )
			),
			array(),
			array(
				'title' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Title', 'thim-starter-theme' ),
					'default' => 'Latest Blog'
				),

				'description' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Description', 'thim-starter-theme' ),
					'default' => 'To enrich knowledge, we’re lucky to get certified from several famous institutions in our locality. Here we enlisted my top certifications.'
				),

				'column' => array(
					"type"    => "select",
					"label"   => esc_html__( "Column", 'thim-starter-theme' ),
					"options" => array(
						"1" => esc_html__( "1", 'thim-starter-theme' ),
						"2" => esc_html__( "2", 'thim-starter-theme' ),
						"3" => esc_html__( "3", 'thim-starter-theme' ),
						"4" => esc_html__( "4", 'thim-starter-theme' ),
					)
				),

				'posts_per_page' => array(
					"type"    => "number",
					"label"   => esc_attr__( "Posts Per Page", 'mag-wp' ),
					'default' => 3,
					'desc'    => esc_attr__( 'Set max limit for items or enter -1 to display all (limited to 1000).', 'mag-wp' ),

				),


			)
		);
	}

}

siteorigin_widget_register( "posts", __FILE__, "Thim_Posts_Widget" );