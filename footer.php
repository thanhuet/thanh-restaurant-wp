<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #main-content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

</div><!-- #main-content -->
<footer id="colophon" class="site-footer">
    <div class="container bottom-bar row">
		<?php dynamic_sidebar( 'bottom_bar' ) ?>
    </div>
	<?php thim_footer_layout(); ?>
</footer><!-- #colophon -->
</div><!-- content-pusher -->


<?php wp_footer(); ?>

<?php do_action( 'thim_space_body' ); ?>

</body>
</html>
