<?php

/**
 * Created By: Khoapq
 * Date: 30/09/2015
 */
class Thim_Top_Blog_Detail_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'top_blog_detail',
            esc_html__( 'Top blog detail', 'mabu' ),
            array(
                'description'   => esc_html__( 'Ad info person', 'mabu' ),
            ),
            array(),
            array(
                'image' => array(
                    'type' => 'media',
                    'label' => esc_html__( 'Add Image', 'thimpess')
                ),
                'title' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Title', 'thimpress' ),
                    'default' => ''
                ),

                'description' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Description', 'thimpress' ),
                    'default' => ''
                ),

            )
        );
    }

}

siteorigin_widget_register( "top_blog_detail", __FILE__, "Thim_Top_Blog_Detail_Widget" );