<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

$style = get_theme_mod( '404_style', false );
?>

<?php
if ( $style == 'style_2' ){
?>
<div class="container ">
    <section class="error-404 not-found row style-2">
        <div class="img-error-404 col-12 col-md-6">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/06_404.png' ); ?>">
        </div>
		<?php
		} else {
		?>
        <div class="container " style="padding:0;margin:0;width:100%;">
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
					<?php if ( $style == 'style_2' ) {
						?>
                        <div class="page-content">
                            <h1>Page not <span class="important-word">Found</span></h1>
                        </div><!-- .page-content -->
                        <div class="page-404-detail">
                            <p>Hehe, Page not Found because Page not Found. We&#39re so sorry about it.</p>
                        </div><!-- .page-content -->
						<?php
					}
					?>
                </div>
    </section><!-- .error-404 -->
</div>