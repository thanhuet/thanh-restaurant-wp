<?php
/**
 * Panel Header
 * 
 * @package Thim_Starter_Theme
 */


thim_customizer()->add_panel(
	array(
		'id'       => 'header',
		'priority' => 20,
		'title'    => esc_html__( 'Header', 'thim-starter-theme' ),
		'icon'     => 'dashicons-editor-table'
	)
);