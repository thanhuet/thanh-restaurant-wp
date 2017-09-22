<?php
/**
 * Panel General
 * 
 * @package Thim_Starter_Theme
 */

thim_customizer()->add_panel(
	array(
		'id'       => 'general',
		'priority' => 10,
		'title'    => esc_html__( 'General', 'thim-starter-theme' ),
		'icon'     => 'dashicons-admin-generic',
	)
);