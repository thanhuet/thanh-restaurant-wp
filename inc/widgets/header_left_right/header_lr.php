<?php

/**
 * Created By: trung thanh
 * Date: 2/10/2017
 */
class Thim_Header_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'header-lr',
            esc_html__( 'Header', 'mabu' ),
            array(
                'description'   => esc_html__( 'Display infor header left right', 'mabu' ),
            ),
            array(),
            array(
                'logo' => array(
                    'type'    => 'media',
                    'label'   => esc_html__( 'Add Logo', 'mabu' ),
                ),

                'title' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Title', 'mabu' ),
                    'default' => ''
                ),

                'infor_more' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Time and Address', 'mabu' ),
                    'default' => ''
                ),

                'detail' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Detail', 'mabu' ),
                    'default' => ''
                ),



            )
        );
    }

}

siteorigin_widget_register( "header-lr", __FILE__, "Thim_Header_Widget" );