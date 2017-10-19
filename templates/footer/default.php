<?php
/**
 * Footer template: Default
 *
 * @package Thim_Starter_Theme
 */
?>

<!--<div class="footer">
	<div class="container">
		<?php /*thim_footer_widgets(); */?>
	</div>
</div>-->
<?php
$copy_right_text = get_theme_mod( 'copyright_text' );
?>
<div class="copyright-area">
	<div class="container">
		<div class="copyright-content">
			<div class="row">
				<div class="col-sm-12">
                    <div class="copyright-text">
	                    <?php echo $copy_right_text; ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>