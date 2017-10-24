<?php

/**
 * Created By: thanh
 * Date: 30/09/2015
 */
class Thim_Banner_Ads_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'banner_ads',
            esc_html__( 'Display Banner Ads', 'mabu' ),
            array(
                'description'   => esc_html__( 'Display banner ads', 'mabu' ),
            ),
            array(),
            array(
                'banner_image' => array(
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

siteorigin_widget_register( "banner_ads", __FILE__, "Thim_Banner_Ads_Widget" );