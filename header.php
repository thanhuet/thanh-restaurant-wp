<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?><!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
<head>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php do_action( 'thim_before_body' ); ?>

<div id="wrapper-container" <?php thim_wrapper_container_class(); ?>>

    <!--    	--><?php //do_action( 'thim_topbar' ) ?>

    <!--	<header id="masthead" class="site-header affix-top<?php /*thim_header_layout_class();  */ ?>">
		<?php /*get_template_part( 'templates/header/' . get_theme_mod( 'header_style', 'default' ) );  */ ?>
	</header>--><!-- #masthead -->
<!--    <header id="masthead" class="site-header affix-top--><?php //thim_header_layout_class(); ?><!--">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="navigation col-sm-12">-->
<!--                    <div class="tm-table">-->
<!--                        <div class="width-logo table-cell sm-logo">-->
<!--						    --><?php //do_action( 'thim_header_sticky_logo' ); ?>
<!--                        </div>-->
<!--                        <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header><!-- #masthead -->
<!--    <nav class="visible-xs mobile-menu-container mobile-effect" itemscope-->
<!--         itemtype="http://schema.org/SiteNavigationElement">-->
<!--		--><?php //get_template_part( 'templates/header/mobile-menu' ); ?>
<!--    </nav><!-- nav.mobile-menu-container -->
<!--    <div class="container topbar-center row">-->
<!--		--><?php //dynamic_sidebar( 'topbar_center' ) ?>
<!--    </div>-->
<!--	--><?php /*wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu'
	) ) */?>

    <header id="masthead" class="site-header affix-top<?php thim_header_layout_class(); ?>">
		<?php get_template_part( 'templates/header/header_v1' ); ?>
    </header><!-- #masthead -->

    <nav class="visible-xs mobile-menu-container mobile-effect" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php get_template_part( 'templates/header/mobile-menu' ); ?>
    </nav><!-- nav.mobile-menu-container -->
    <div id="main-content">