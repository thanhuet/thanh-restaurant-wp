<?php
$attachment = wp_get_attachment_image_src( $instance['logo'], 'full' );
$logo_url   = $attachment[0];
?>
<div class="logo-rest">
    <a href="<?php echo get_home_url();?>"><img class="img-logo" src="<?php echo esc_url($logo_url); ?>" alt="<?php esc_html__('Logo','restaurant-wp')?>"></a>
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