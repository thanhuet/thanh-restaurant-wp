<?php

/**
 * Created By: trung thanh
 * Date: 2/10/2017
 */
class Thim_Logo_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'logo',
            esc_html__( 'Logo header', 'mabu' ),
            array(
                'description'   => esc_html__( 'Display Logo', 'mabu' ),
            ),
            array(),
            array(
                'title' => array(
                    'type'    => 'media',
                    'label'   => esc_html__( 'Add Logo', 'mabu' ),
                ),

                'description' => array(
                    'type'    => 'text',
                    'label'   => esc_html__( 'Description', 'mabu' ),
                    'default' => ''
                ),

                'display' => array(
                    'type'  => 'checkbox',
                    'label' => esc_html__('Display description', 'mabu')
                )



            )
        );
    }

}

siteorigin_widget_register( "logo", __FILE__, "Thim_Logo_Widget" );