<?php

/**
 * Created By: Khoapq
 * Date: 30/09/2015
 */
class Thim_Recent_Posts_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'recent_posts',
            esc_html__( 'Recent Posts Image', 'thim-starter-theme' ),
            array(
                'description'   => esc_html__( 'Display recent posts', 'thim-starter-theme' ),
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
                    'default' => ''
                ),

                'posts_per_page' => array(
                    "type"    => "number",
                    "label"   => esc_attr__( "Posts Per Page", 'thim-starter-theme' ),
                    'default' => 3,
                    'desc'    => esc_attr__( 'Set max limit for items or enter -1 to display all (limited to 1000).', 'thim-starter-theme' ),

                ),

                'thumbnail_size' => array(
                    "type"    => "text",
                    "label"   => esc_attr__( "Thumbnail size", 'thim-starter-theme' ),
                    'default' => '440x285',
                    'desc'    => esc_attr__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', 'thim-starter-theme' ),
                ),

            )
        );
    }

}

siteorigin_widget_register( "recent_posts", __FILE__, "Thim_Recent_Posts_Widget" );