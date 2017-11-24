<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Thim_SC_News' ) ) {

	class Thim_SC_News {

		/**
		 * Shortcode name
		 * @var string
		 */
		protected $name = '';

		/**
		 * Shortcode description
		 * @var string
		 */
		protected $description = '';

		/**
		 * Shortcode base
		 * @var string
		 */
		protected $base = '';


		public function __construct() {

			//======================== CONFIG ========================
			$this->name        = esc_attr__( 'Thim News', 'restaurant-wp' );
			$this->description = esc_attr__( 'Display News', 'restaurant-wp' );
			$this->base        = 'news';
			//====================== END: CONFIG =====================


			$this->map();
			add_shortcode( 'thim-' . $this->base, array( $this, 'shortcode' ) );
		}

		/**
		 * vc map shortcode
		 */
		public function map() {
			vc_map( array(
				'name'        => $this->name,
				'base'        => 'thim-' . $this->base,
				'category'    => esc_attr__( 'Thim Shortcodes', 'restaurant-wp' ),
				'description' => $this->description,
				'params'      => array(/**
				 *
				 * code fields here
				 * **/

				)
			) );
		}

		/**
		 * Add shortcode
		 *
		 * @param $atts
		 */
		public function shortcode( $atts ) {
			global $paged;

			$params = shortcode_atts( array(
				'title' => '',

			), $atts );

			$params['sc-name'] = $this->base;

			$posts_per_page = $params['posts_per_page'];

			$current_page           = max( 1, get_query_var( 'paged' ) );
			$params['current_page'] = $current_page;

			$news_args = array();

			$posts = new WP_Query( $news_args );

			ob_start();

			thim_get_template( 'default', array( 'params' => $params, 'posts' => $posts ), $this->base . '/tpl/' );

			$html = ob_get_contents();
			ob_end_clean();
			wp_reset_postdata();

			return $html;

		}


		/**
		 * Get categories
		 * @return array
		 */
		public function get_categories() {
			$categories_array = array();
			$categories       = get_categories();

			$categories_array[0] = esc_attr__( 'All Category', 'restaurant-wp' );

			foreach ( $categories as $category ) {
				$categories_array[ html_entity_decode( $category->name ) ] = $category->slug;
			}

			return $categories_array;

		}

	}

	new Thim_SC_News();
}

