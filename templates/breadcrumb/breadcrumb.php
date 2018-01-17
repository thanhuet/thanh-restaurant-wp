<?php
// breadcrumb display below page-title

if ( isset( $thim_options['disable_breadcrumb'] ) ) {
    $hide_breadcrumb = get_theme_mod( 'disable_breadcrumb' );
}

$styleBreadcrumb      = get_theme_mod( 'breadcrumb_style' ,false);

if ( $hide_breadcrumb != '1' && $styleBreadcrumb == 'style_1' && !is_404() ) : ?>

<div class="breadcrumb-content style-1" >
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