<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */
?>

<section class="error-404 not-found row">
    <div class="img-error-404 col-6 col-xl-6">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/06_404.png' ); ?>">
    </div>
    <div class="content-error-404 col-6 col-xl-6">
        <header class="page-header">
            <h2 class="page-title">404</h2>
        </header><!-- .page-header -->
        <div class="page-content">
            <p>Page not </span class="important-word">Found</span></p>
        </div><!-- .page-content -->
        <div class="page-404-detail">
            <p>Hehe, Page not Found because Page not Found. We’re so sorry about it.</p>
        </div><!-- .page-content -->
    </div>
</section><!-- .error-404 -->
