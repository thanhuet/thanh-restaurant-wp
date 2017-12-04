<?php

function thim_get_all_plugins_require( $plugins ) {
	return array(
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
		),
		array(
			'name' =>'Page Builder by SiteOrigin',
			'slug'=>'siteorigin-panels',
			'required' =>true,
		),
		array(
			'name'=>'SiteOrigin Widgets Bundle',
			'slug'=>'so-widgets-bundle',
			'required'=>true,
		),
		array(
			'name'=>'Instagram Feed',
			'slug'=>'instagram-feed',
		)
	);
}

add_action( 'thim_core_get_all_plugins_require', 'thim_get_all_plugins_require' );


function thim_get_core_require() {
$thim_core = array(
	'name'    => 'Thim Core',
	'slug'    => 'thim-core',
	'version' => '1.0.6.1',
	'source'  => 'https://foobla.bitbucket.io/thim-core/dist/thim-core.zip',
);

	return $thim_core;
}


function thim_envato_item_id() {
	return '20370918';
}

add_filter( 'thim_envato_item_id', 'thim_envato_item_id' );