<?php

/**
 * Info theme into dashboard
 * @return array
 */
function thim_config_links_guide_user() {
	return array(
		'docs'      => 'http://docspress.thimpress.com/restaurant-wp/',
		'support'   => 'https://thimpress.com/forums/forum/restaurant-wp/',
		'knowledge' => 'https://thimpress.com/knowledge-base/'
	);
}

add_filter( 'thim_theme_links_guide_user', 'thim_config_links_guide_user', 9999 );

/**
 * Import settings
 */
function thim_import_extra_plugin_settings( $settings ) {
	$settings[] = 'sb_instagram_settings';

	return $settings;
}

add_filter( 'thim_importer_basic_settings', 'thim_import_extra_plugin_settings' );