<?php
/**
 * Page Title Bar
 */

global $wp_query, $post;
$GLOBALS['post']      = @$wp_query->post;
$thim_options         = get_theme_mods();
$thim_heading_top_src = $custom_title = $subtitle = $text_color = $sub_color = $bg_color = $front_title = '';
$hide_breadcrumb      = $hide_title = 0;
$bg_opacity           = 1;

$cat_obj = $wp_query->get_queried_object();
if ( isset( $cat_obj->term_id ) ) {
	$cat_ID = $cat_obj->term_id;
} else {
	$cat_ID = "";
}

if ( isset( $thim_options['hide_page_title'] ) ) {
	$hide_title = get_theme_mod( 'hide_page_title', false );
}
if(isset($thim_options['font_breadcrumb'])){
    $style_breadcrumb = get_theme_mod('font_breadcrumb');
}
if ( isset( $thim_options['disable_breadcrumb'] ) ) {
	$hide_breadcrumb = get_theme_mod( 'disable_breadcrumb' );
}
if(isset($thim_options['font_page_title'])){
    $style_page_title=get_theme_mod('font_page_title');
}
if ( isset( $thim_options['page_title_background_color'] ) ) {
	$bg_color = get_theme_mod( 'page_title_background_color' );
}
if ( isset( $thim_options['page_title_height'] ) ) {
	$page_title_height = get_theme_mod( 'page_title_height' );
}
if ( isset( $thim_options['page_title_background_opacity'] ) ) {
	$bg_opacity = (float) get_theme_mod( 'page_title_background_opacity' );
}

if ( ( isset( $thim_options['page_title_background_image'] ) && get_theme_mod( 'page_title_background_image' ) <> '' ) ) {
	$thim_heading_top_img = get_theme_mod( 'page_title_background_image' );
	$thim_heading_top_src = $thim_heading_top_img; // For the default value

	if ( is_numeric( $thim_heading_top_img ) ) {
		$thim_heading_top_attachment = wp_get_attachment_image_src( $thim_heading_top_img, 'full' );
		$thim_heading_top_src        = $thim_heading_top_attachment[0];
	}
}

// Get Style From MTB
if ( is_page() || is_single() ) {
	$postid               = get_the_ID();
	$using_custom_heading = get_post_meta( $postid, 'thim_enable_custom_title', true );

	if ( $using_custom_heading ) {
		$array_title = get_post_meta( $postid, 'thim_group_custom_title', false );
		$array_bg    = get_post_meta( $postid, 'thim_group_custom_background', false );

		if ( isset( $array_title[0] ) ) {
			if ( isset( $array_title[0]['thim_hide_title'] ) ) {
				$hide_title = $array_title[0]['thim_hide_title'];
			}
			if ( isset( $array_title[0]['thim_hide_breadcrumbs'] ) ) {
				$hide_breadcrumb = $array_title[0]['thim_hide_breadcrumbs'];
			}
			if ( isset( $array_title[0]['thim_custom_title'] ) ) {
				$custom_title = $array_title[0]['thim_custom_title'];
			}
			if ( isset( $array_title[0]['thim_custom_subtitle'] ) ) {
				$subtitle = $array_title[0]['thim_custom_subtitle'];
			}
			if ( isset( $array_title[0]['thim_color_title'] ) ) {
				$text_color_1 = $array_title[0]['thim_color_title'];
				if ( $text_color_1 <> '' ) {
					$text_color = $text_color_1;
				}
			}
			if ( isset( $array_title[0]['thim_color_subtitle'] ) ) {
				$sub_color_1 = $array_title[0]['thim_color_subtitle'];
				if ( $sub_color_1 <> '' ) {
					$sub_color = $sub_color_1;
				}
			}
		}

		if ( isset( $array_bg[0] ) ) {
			$bg_color_1 = isset( $array_bg[0]['thim_heading_background'] ) ? $array_bg[0]['thim_heading_background'] : '';
			$bg_opacity = isset( $array_bg[0]['thim_heading_background_opacity'] ) ? (float) $array_bg[0]['thim_heading_background_opacity'] : 1;
			if ( $bg_color_1 <> '' ) {
				$bg_color = $bg_color_1;
			}
			if ( isset( $array_bg[0]['thim_heading_image'] ) ) {
				$thim_heading_top_img        = $array_bg[0]['thim_heading_image'];
				$thim_heading_top_src        = $thim_heading_top_img[0];
				$thim_heading_top_attachment = wp_get_attachment_image_src( $thim_heading_top_img[0], 'full' );
				$thim_heading_top_src        = $thim_heading_top_attachment[0];
			}
		}

	}
}
$hide_title      = ( $hide_title == '1' ) ? '1' : $hide_title;
$hide_breadcrumb = ( $hide_breadcrumb == '1' ) ? '1' : $hide_breadcrumb;


// style css
$c_css_style       = $overlay_css_style = $title_css_style = $title_css = '';
$overlay_css_style .= ( $bg_color != '' ) ? 'background-color: ' . $bg_color . ';' : '';
$overlay_css_style .= ( $bg_color != '' ) ? 'opacity: ' . $bg_opacity . ';' : '';
$c_css_style       .= ( $thim_heading_top_src != '' ) ? 'background-image:url(' . $thim_heading_top_src . ');' : '';
$c_css_style       .= ( $thim_heading_top_src != '' ) ? 'height:' . $page_title_height . ';' : '';
$c_css_style       .= ( $thim_heading_top_src != '' ) ? 'background-position:center;' : '';
$title_css_style   .= ( $text_color != '' ) ? 'color: ' . $text_color . ';' : '';
$c_css_sub_color   = ( $sub_color != '' ) ? 'style="color:' . $sub_color . '"' : '';
$c_css_breadcrumb = ($style_breadcrumb !='')?'style="color:'.$style_breadcrumb['color'].';font-size:'.$style_breadcrumb['font-size'].';"':'';
$title_css   = ( $title_css_style != '' ) ? 'style="' . $title_css_style . ';font-size:'.$style_page_title['font-size'].';"' : '';
$c_css       = ( $c_css_style != '' ) ? 'style="' . $c_css_style . '"' : '';
$overlay_css = ( $overlay_css_style != '' ) ? 'style="' . $overlay_css_style . '"' : '';
$parallax    = get_theme_mod( 'enable_parallax_page_title', true ) ? ' data-stellar-background-ratio="0.5"' : '';
?>
<div class="page-title">
	<?php if ( $hide_title != '1' ) : ?>
        <div class="main-top" <?php echo ent2ncr( $c_css ); ?>  <?php echo ent2ncr( $parallax ); ?> >
            <span class="overlay-top-header" <?php echo ent2ncr( $overlay_css ); ?>></span>
			<?php if ( $hide_title != '1' ) : ?>
                <div class="content container " style="text-align: <?php echo $style_page_title['text-align']?>">
					<?php
					if ( is_single() ) {
						$typography = 'h2 ' . $title_css;
					} else {
						$typography = 'h1 ' . $title_css;
					}
					if ( ( is_category() || is_archive() || is_search() || is_404() ) ) {
						echo '<' . $typography . '>';
						echo thim_archive_title();
						echo '</' . $typography . '>';
						if ( category_description( $cat_ID ) != '' ) {
						} else {
							echo ( $subtitle != '' ) ? '<div class="banner-description" ' . $c_css_sub_color . '><p>' . $subtitle . '</p></div>' : '';
						}
					} elseif ( is_page() || is_single() ) {
						if ( is_single() ) {
							if ( get_post_type() == "post" ) {
								if ( $custom_title ) {
									$single_title = $custom_title;
								} else {
									$category     = get_the_category();
									$category_id  = get_cat_ID( $category[0]->cat_name );
									$single_title = get_category_parents( $category_id, false, " " );
								}
								echo '<' . $typography . '>' . $single_title;
								echo '</' . $typography . '>';
							}

							if ( get_post_type() == "our_team" ) {
								echo '<' . $typography . '>' . esc_html__( 'Our Team', 'thim-starter-theme' );
								echo '</' . $typography . '>';
							}
							if ( get_post_type() == "testimonials" ) {
								echo '<' . $typography . '>' . esc_html__( 'Testimonials', 'thim-starter-theme' );
								echo '</' . $typography . '>';
							}
						} else {
							echo '<' . $typography . '>';
							echo ( $custom_title != '' ) ? $custom_title : get_the_title( get_the_ID() );
							echo '</' . $typography . '>';
						}
						echo ( $subtitle != '' ) ? '<div class="banner-description" ' . $c_css_sub_color . '><p>' . $subtitle . '</p></div>' : '';
					} elseif ( is_front_page() || is_home() ) {
						echo '<h1>';
						echo ( $front_title != '' ) ? $front_title : esc_html__( 'Blog', 'thim-starter-theme' );
						echo '</h1>';
						echo ( $subtitle != '' ) ? '<div class="banner-description" ' . $c_css_sub_color . '><p>' . $subtitle . '</p></div>' : '';
					}
					?>
					<?php
					if ( $hide_breadcrumb != '1' ) :?>
                        <div class="breadcrumb-content" <?php echo $c_css_breadcrumb?>>
							<?php
							if ( ! is_front_page() || ! is_home() ) { ?>
                                <div class="breadcrumbs-wrapper">
                                    <div class="container">
										<?php
										if ( get_post_type() == 'product' ) {
											woocommerce_breadcrumb();
										} else {
											thim_breadcrumbs();
										}
										?>
                                    </div><!-- .container -->
                                </div><!-- .breadcrumbs-wrapper -->
							<?php }
							?>
                        </div><!-- .breadcrumb-content -->
						<?php
					endif;
					?>
                </div>
			<?php endif; ?>
        </div><!-- .main-top -->
	<?php endif; ?>


</div><!-- .page-title -->