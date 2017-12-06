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
