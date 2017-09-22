<?php

/**
 * Info theme into dashboard
 * @return array
 */
function thim_config_links_guide_user() {
	return array(
		'docs'      => 'http://docspress.thimpress.com/magwp/',
		'support'   => 'https://thimpress.com/forums/forum/magwp/',
		'knowledge' => 'https://thimpress.com/knowledge-base/'
	);
}

add_filter( 'thim_theme_links_guide_user', 'thim_config_links_guide_user', 9999 );


add_action( 'admin_init', 'thim_redirect_to_theme_dashboard' );
function thim_redirect_to_theme_dashboard() {
	$request = isset( $_GET['thim-redirect-to-theme-dashboard'] );

	if ( ! $request ) {
		return;
	}

	if ( is_callable( array( 'Thim_Core_Admin', 'go_to_theme_dashboard' ) ) ) {
		call_user_func( array( 'Thim_Core_Admin', 'go_to_theme_dashboard' ) );
	}

	wp_redirect( admin_url() );
	exit();
}

if ( class_exists( 'Thim_Core' ) ) {
	return;
}

add_action( 'admin_notices', 'thim_notify_install_plugins' );

function thim_notify_install_plugins() {
	if ( ! thim_admin_notice_active( 'dismissible-thimcore-0' ) ) {
		return;
	}
	$theme       = wp_get_theme();
	$user_guider = thim_config_links_guide_user();
	?>
	<div data-dismissible="dismissible-thimcore-0" class="notice notice-success is-dismissible">
		<h3><?php echo esc_html( $theme->get( 'Name' ) ); ?> notice!</h3>
		<p>
			Install theme success. <a
				href="<?php echo esc_url( admin_url( '?thim-install-plugin-require=1' ) ); ?>">
				<?php _e( 'Install and active ThimPress Core to start now!', 'mag-wp' ); ?>
			</a>
		</p>
		<p>
			<a href="<?php echo esc_html( $user_guider['docs'] ) ?>">Documentation</a> |
			<a href="<?php echo esc_html( $user_guider['support'] ) ?>">Forum</a> |
			<a href="<?php echo esc_html( $user_guider['knowledge'] ) ?>">Knowledge Base</a>
		</p>
	</div>
	<?php
}

add_action( 'admin_init', 'thim_install_plugin_require' );

function thim_install_plugin_require() {
	$request = isset( $_GET['thim-install-plugin-require'] );

	if ( ! $request ) {
		return;
	}

	require_once THIM_DIR . 'inc/libs/class-thim-plugin.php';

	$plugin_require = thim_get_core_require();

	$plugin = new Thim_Plugin();
	$plugin->set_args( $plugin_require );
	$plugin->install();

	wp_redirect( admin_url( '?thim-active-plugin-require' ) );
	exit();
}

add_action( 'admin_init', 'thim_active_plugin_require' );

function thim_active_plugin_require() {
	$request = isset( $_GET['thim-active-plugin-require'] );

	if ( ! $request ) {
		return;
	}

	require_once THIM_DIR . 'inc/libs/class-thim-plugin.php';

	$plugin_require = thim_get_core_require();

	$plugin = new Thim_Plugin();
	$plugin->set_args( $plugin_require );
	$plugin->activate( false );

	wp_redirect( admin_url( '?thim-redirect-to-theme-dashboard' ) );
	exit();
}
