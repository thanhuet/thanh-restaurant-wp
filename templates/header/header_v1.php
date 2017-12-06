<?php
/**
 * Header V1 Template
 * 
 * @package Thim_Starter_Theme
 */
?>

<div class="header-v1 container">
    <div class="row">
        <div class="navigation col-sm-12">
            <div class="tm-table">
                <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="width-logo table-cell sm-logo">
                    <?php do_action( 'thim_header_logo' ); ?>
                    <?php do_action( 'thim_header_sticky_logo' ); ?>
                </div>

                <div class="topbar-center row container">
		            <?php dynamic_sidebar( 'topbar_center' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navigation menu-main">
    <div class="container menu-main-navigation">
        <nav class="width-navigation table-cell table-right main-navigation">
            <div class="inner-navigation">
				<?php get_template_part( 'templates/header/main-menu' ); ?>
            </div>
        </nav>
    </div>
</div>