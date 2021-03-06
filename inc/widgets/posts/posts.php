<?php

/**
 * Created By: Khoapq
 * Date: 30/09/2015
 */
class Thim_Posts_Widget extends SiteOrigin_Widget {

	function __construct() {
		$my_query = new WP_Query();

		$my_query->query( array(
			'post_type'   => 'post',
			'post_status' => 'publish',
			'tax_query'   => array(
				array(
					'taxonomy' => 'post_format',
					'field'    => 'slug',
					'terms'    => array( 'post-format-gallery' ),
					'operator' => 'NOT IN'
				)
			)
		) );
		$list_cate = array();
		if ( $my_query->have_posts() ) {
			while ( $my_query->have_posts() ) {
				$my_query->the_post();
				foreach ( ( get_the_category() ) as $category ) {
					if ( ! in_array( $category->cat_ID, $list_cate ) ) {
						$list_cate[] = $category->cat_ID;
					}
				}
			}
		}
		$list_cate        = get_categories( array(
			'exclude' => get_cat_ID( 'Gallery' )
		) );
		$list_cate_option = array(
			"1" => esc_html__( 'All categories', 'restaurant-wp' )
		);
		foreach ( $list_cate as $item ) {
			array_push( $list_cate_option, esc_html( $item->name ) );
		}

		parent::__construct(
			'posts',
			esc_html__( 'Thim: Posts', 'restaurant-wp' ),
			array(
				'description'   => esc_html__( 'Display posts', 'restaurant-wp' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' )
			),
			array(),
			array(
				'title' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Title', 'restaurant-wp' ),
					'default' => 'Latest Blog'
				),

				'description' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Description', 'restaurant-wp' ),
					'default' => 'To enrich knowledge, we\'re lucky to get certified from several famous institutions in our locality. Here we enlisted my top certifications.'
				),

				'column' => array(
					"type"    => "select",
					"label"   => esc_html__( "Column", 'restaurant-wp' ),
					"options" => array(
						"1" => esc_html__( "1", 'restaurant-wp' ),
						"2" => esc_html__( "2", 'restaurant-wp' ),
						"3" => esc_html__( "3", 'restaurant-wp' ),
						"4" => esc_html__( "4", 'restaurant-wp' ),
					)
				),

				'choose_cate' => array(
					"type"    => "select",
					"label"   => esc_html__( "Choose category", 'restaurant-wp' ),
					"options" => $list_cate_option
				),

				'posts_per_page' => array(
					"type"    => "number",
					"label"   => esc_attr__( "Posts Per Page", 'restaurant-wp' ),
					'default' => 3,
					'desc'    => esc_attr__( 'Set max limit for items or enter -1 to display all (limited to 1000).', 'restaurant-wp' ),

				),


			)
		);
	}

}

siteorigin_widget_register( "posts", __FILE__, "Thim_Posts_Widget" );