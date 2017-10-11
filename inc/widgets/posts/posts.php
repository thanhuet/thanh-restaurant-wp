<?php

/**
 * Created By: Khoapq
 * Date: 30/09/2015
 */
class Thim_Posts_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'posts',
			esc_html__( 'Thim: Posts', 'mabu' ),
			array(
				'description'   => esc_html__( 'Display posts', 'mabu' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' )
			),
			array(),
			array(
				'title' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Title', 'thimpress' ),
					'default' => 'Latest Blog'
				),

				'description' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Description', 'thimpress' ),
					'default' => 'To enrich knowledge, we’re lucky to get certified from several famous institutions in our locality. Here we enlisted my top certifications.'
				),

				'column' => array(
					"type"    => "select",
					"label"   => esc_html__( "Column", 'mabu' ),
					"options" => array(
						"1" => esc_html__( "1", 'mabu' ),
						"2" => esc_html__( "2", 'mabu' ),
						"3" => esc_html__( "3", 'mabu' ),
						"4" => esc_html__( "4", 'mabu' ),
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