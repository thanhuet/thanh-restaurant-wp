<?php
$attachment = wp_get_attachment_image_src( $instance['logo'], 'full' );
$logo_url   = $attachment[0];
?>
<div class="logo-rest">
    <img class="img-logo" src="<?php echo $logo_url; ?>">
	<?php
	if ( $instance['displayDes']) {
		?>
        <div class="description-logo">
            <p>
				<?php echo $instance['description'] ?>
            </p>
        </div>
		<?php
	}
	?>
</div>