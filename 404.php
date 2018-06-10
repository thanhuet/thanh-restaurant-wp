<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

?>
<?php
if ($style == 'style_2'){
    ?>
    <?php
} else {
?>
<section>
    <div class="container " style="padding:0;margin:0;width:100%;">
        <img class="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/04_404-min.png'); ?>">
        <div class="error-404 not-found row style-1">
            <?php
            }
            ?>
            <div class="content-error-404 col-12 col-md-6">
                <header class="page-header">
                    <h1 class="page-title">404</h1>
                </header><!-- .page-header -->
                <div class="page-content">
                    <h1>Hair Not Found!</h1>
                </div><!-- .page-content -->
            </div>
        </div>
    </div>
</section><!-- .error-404 -->
