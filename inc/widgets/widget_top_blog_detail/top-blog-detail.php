<?php

/**
 * Created By: Khoapq
 * Date: 30/09/2015
 */
class Thim_Top_Blog_Detail_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'top_blog_detail',
            esc_html__( 'Top blog detail', 'restaurant-wp' ),
            array(
                'description'   => esc_html__( 'Ad info person', 'restaurant-wp' ),
            ),
            array(),
            array(
                'image' => array(
                    'type' => 'media',
                    'label' => esc_html__( 'Add Image', 'restaurant-wp')
                ),
                'title' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Title', 'restaurant-wp' ),
                    'default' => ''
                ),

                'description' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Description', 'restaurant-wp' ),
                    'default' => ''
                ),

            )
        );
    }

}

siteorigin_widget_register( "top_blog_detail", __FILE__, "Thim_Top_Blog_Detail_Widget" );