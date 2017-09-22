<?php

function thim_get_all_plugins_require( $plugins ) {
	return array(
		array(
			'name'     => 'Visual Composer',
			'slug'     => 'js_composer',
			'source'   => 'https://plugins.thimpress.com/downloads/js_composer.zip',
			'required' => true,
			'version'  => '4.12',
			'icon'     => THIM_URI . 'assets/images/plugins/js_composer.png',
		),
		array(
			'name' => 'bbPress',
			'slug' => 'bbpress',
		),
		array(
			'name' => 'MailChimp',
			'slug' => 'mailchimp-for-wp',
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
		),
		array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
		),
		array(
			'name' => 'LearnPress',
			'slug' => 'learnpress',
		),
		array(
			'slug' => 'yith-woocommerce-wishlist',
			'name' => 'YITH WooCommerce Wishlist',
			'icon' => 'https://ps.w.org/yith-woocommerce-wishlist/assets/icon-128x128.jpg',
		)
	);
}

add_action( 'thim_core_get_all_plugins_require', 'thim_get_all_plugins_require' );


function thim_get_core_require() {
	$thim_core = array(
		'name'    => 'Thim Core',
		'slug'    => 'thim-core',
		'version' => '1.0.0',
		'source'  => THIM_DIR . 'inc/plugins/thim-core.zip',
	);

	return $thim_core;
}

add_filter( 'thim_core_get_package', 'thim_get_core_require' );

/**
 * @todo: sau khi release, update version đầu tiên và thêm id của item vào đây.
 */
//function thim_envato_item_id() {
//	return '18828322';
//}
//
//add_filter( 'thim_envato_item_id', 'thim_envato_item_id' );